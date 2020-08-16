<?php
session_start();
include "includes/lib.php";
$link = connection();
$sql_product = 'SELECT * FROM `news`';
//количество на одной странице(нужно для навигации)
//--------------------------------------
$result_product = mysqli_query($link, $sql_product);
$num = mysqli_num_rows($result_product); //узнаем количество записей
// Вычисляем количество страниц, чтобы знать сколько ссылок выводить
$pages = $num / NUMBER_OF_NEWS;
// Округляем полученное число страниц в большую сторону
$pages = ceil($pages);
// Здесь мы увеличиваем число страниц на единицу чтобы начальное значение было
// равно единице, а не нулю. Значение page= будет
// совпадать с цифрой в ссылке, которую будут видеть посетители
$pages++;
// Если значение page= больше числа страниц, то выводим первую страницу
if ($page > $pages) $page = 1;
// Чтобы у нас значение page= в адресе ссылки совпадало с номером
// страницы будем его увеличивать на единицу при выводе ссылок, а
// здесь наоборот уменьшать чтобы ничего не нарушить.
$list = ($page) * NUMBER_OF_NEWS - 6;
// Делаем запрос подставляя значения переменных $quantity и $list


$sql_1 = "SELECT * FROM `news`ORDER BY `date`DESC LIMIT " . NUMBER_OF_NEWS . " OFFSET $list";
$result_1 = mysqli_query($link, $sql_1);
if ($result_1 != false) {
    $news = mysqli_fetch_all($result_1, MYSQLI_ASSOC);
}
$title = 'Новости';
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