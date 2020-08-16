<?php
session_start();
include "includes/lib.php";
$link = connection();
// Чтобы у нас значение page= в адресе ссылки совпадало с номером
// страницы будем его увеличивать на единицу при выводе ссылок, а
// здесь наоборот уменьшать чтобы ничего не нарушить.
$list = ($page) * NUMBER_OF_PRODUCTS - 12;
// Делаем запрос подставляя значения переменных .NUMBER_OF_PRODUCTS и $list

if (!empty($_GET['id'])) {

    if (!empty($_GET['cost-to']) && !empty($_GET['cost-from'])) {
        $middle_query="WHERE main_category= '{$id_category}'
        AND price >'{$price_from}'
        AND price<'{$price_to}'";
        $sql_product = "SELECT * FROM `product`" .$middle_query. 
        "LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product`".$middle_query;
    } else if (!empty($_GET['cost-to']) && empty($_GET['cost-from'])) {
        $middle_query="WHERE main_category= '{$id_category}'
        AND price<'{$price_to}'";
        $sql_product = "SELECT * FROM `product`".$middle_query. 
        "LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product`".$middle_query;
    } else if (empty($_GET['cost-to']) && !empty($_GET['cost-from'])) {
        $middle_query="WHERE main_category= '{$id_category}' AND price >'{$price_from}'";
        $sql_product = "SELECT * FROM `product`".$middle_query. 
        "LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product`".$middle_query;
    } else {
        $middle_query="WHERE main_category= '{$id_category}'";
        $sql_product = "SELECT * FROM `product`".$middle_query.         
        "LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product`".$middle_query;
    }

} else {
    if (!empty($_GET['cost-to']) && !empty($_GET['cost-from'])) {
        $middle_query="WHERE price >'{$price_from}' AND price<'{$price_to}'";
        $sql_product = "SELECT * FROM `product`".$middle_query.      
        "LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product`".$middle_query;///PRODOLZHU TUT
    } else if (empty($_GET['cost-to']) && !empty($_GET['cost-from'])) {
        $middle_query="WHERE price >'{$price_from}'";
        $sql_product = "SELECT * FROM `product`".$middle_query.
        "LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product`".$middle_query;
    } else if (!empty($_GET['cost-to']) && empty($_GET['cost-from'])) {
        $middle_query="WHERE price<'{$price_to}'";
        $sql_product = "SELECT * FROM `product`".$middle_query.
        "LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product`".$middle_query;
    } else {
        $sql_product = "SELECT * FROM `product`	
        LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product`";
    }
}

$res = mysqli_query($link, $records_count);
$productCount = mysqli_fetch_assoc($res);
$num = $productCount['cnt'];
$res_products = mysqli_query($link, $sql_product);
if ($res_products != false) {
    $arrProducts = mysqli_fetch_all($res_products, MYSQLI_ASSOC);
} //иначе вывели пустой каталог
// Вычисляем количество страниц, чтобы знать сколько ссылок выводить
$pages = ceil($num / NUMBER_OF_PRODUCTS) + 1;
// Округляем полученное число страниц в большую сторону
// Если значение page= больше числа страниц, то выводим первую страницу
if ($page > $pages) $page = 1;
$title = 'Каталог';
function remove_key() 
{
    parse_str($_SERVER['QUERY_STRING'], $vars);//разбили параметры на массив
    $url =http_build_query(array_diff_key($vars,array("page"=>"")));
    return $url;
}
function sidebar_categories($link)
{
    $sql_category = 'SELECT * FROM `categories`';
    $result = mysqli_query($link, $sql_category);
    $categories=array();
    if($result&&mysqli_num_rows($result) > 0)
    {    
        $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    return $categories;
}
function sidebar_news($link)
{
    $sql_news = 'SELECT * FROM `news`ORDER BY `date`DESC LIMIT 6';
    $result_news = mysqli_query($link, $sql_news);
    $news=array();
    if($result_news&&mysqli_num_rows($result_news) > 0)
    {
        $news = mysqli_fetch_all($result_news, MYSQLI_ASSOC);
    }
    return $news;
}