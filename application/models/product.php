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
?>