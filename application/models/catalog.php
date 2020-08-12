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
        $sql_product = "SELECT * FROM `product` 
        WHERE main_category= '{$id_category}'
        AND price >'{$price_from}'
        AND price<'{$price_to}'
        LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product` 
        WHERE main_category= '{$id_category}'
        AND price >'{$price_from}'
        AND price<'{$price_to}'";
    } else if (!empty($_GET['cost-to']) && empty($_GET['cost-from'])) {
        $sql_product = "SELECT * FROM `product` 
        WHERE main_category= '{$id_category}'
        AND price<'{$price_to}'
        LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product` 
        WHERE main_category= '{$id_category}'
        AND price<'{$price_to}'";
    } else if (empty($_GET['cost-to']) && !empty($_GET['cost-from'])) {
        $sql_product = "SELECT * FROM `product` 
        WHERE main_category= '{$id_category}'
        AND price >'{$price_from}'
        LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product` 
        WHERE main_category= '{$id_category}'
        AND price >'{$price_from}'";
    } else {
        $sql_product = "SELECT * FROM `product` 
        WHERE main_category= '{$id_category}'
        LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product` 
        WHERE main_category= '{$id_category}'";
    }

} else {
    if (!empty($_GET['cost-to']) && !empty($_GET['cost-from'])) {
        $sql_product = "SELECT * FROM `product`
        AND price >'{$price_from}'
        AND price<'{$price_to}'
        LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product`
        AND price >'{$price_from}'
        AND price<'{$price_to}'";
    } else if (empty($_GET['cost-to']) && !empty($_GET['cost-from'])) {
        $sql_product = "SELECT * FROM `product`
        AND price >'{$price_from}'
        LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product`
        AND price >'{$price_from}'";
    } else if (!empty($_GET['cost-to']) && empty($_GET['cost-from'])) {
        $sql_product = "SELECT * FROM `product`
        AND price<'{$price_to}'
        LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product`
        AND price<'{$price_to}'";
    } else {
        $sql_product = "SELECT * FROM `product`	
        LIMIT " . NUMBER_OF_PRODUCTS . " OFFSET $list";

        $records_count = "SELECT COUNT(id) as cnt FROM `product`";
    }
}

$res = mysqli_query($link, $records_count);
$res = mysqli_fetch_assoc($res);
$num = $res['cnt'];

$result_product = mysqli_query($link, $sql_product);
if ($result_product != false) {
    $rows_product = mysqli_fetch_all($result_product, MYSQLI_ASSOC);
} //иначе вывели пустой каталог
// Вычисляем количество страниц, чтобы знать сколько ссылок выводить
$pages = ceil($num / NUMBER_OF_PRODUCTS) + 1;
// Округляем полученное число страниц в большую сторону
// Если значение page= больше числа страниц, то выводим первую страницу
if ($page > $pages) $page = 1;
$title = 'catalog';
