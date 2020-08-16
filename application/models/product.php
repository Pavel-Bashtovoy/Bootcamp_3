<?php
session_start();
include "includes/lib.php";
$link = connection();
$flag = 0;
$sql_product = 'SELECT * FROM `product`';
$result_product = mysqli_query($link, $sql_product);
if ($result_product != false) {
    $rows = mysqli_fetch_all($result_product, MYSQLI_ASSOC);
    foreach ($rows as $row) {
        if ($row['id'] == $_GET[$id]) {
            if (!empty($_GET[$cat_id])) {
                if ($row['main_category'] == $category_id) {
                    $flag = 1;
                }
            } else {
                $flag = 1;
            }
        }
    }
    if ($flag == 0) {
        $header = 'Location: /template/404.php';
        header($header);
    }
}

$sql_product = "SELECT * FROM `product`WHERE id = '{$product_id}'";
$result_product = mysqli_query($link, $sql_product);
if ($result_product != false) {
    $rows_product = mysqli_fetch_all($result_product, MYSQLI_ASSOC);
    foreach ($rows_product as $row_product) {
        $title = $row_product['name'];
        $main_category = $row_product['main_category'];
        $sql_cat= "SELECT * FROM `shop`.`categories` WHERE `id` = '{$main_category}'";
        $result_cat = mysqli_query($link, $sql_cat);
        if ($result_cat != false) {
            $rows_cat = mysqli_fetch_all($result_cat, MYSQLI_ASSOC);
            foreach ($rows_cat as $row_cat) {
                $category = $row_cat['name'];
            }
        }
    }
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
?>