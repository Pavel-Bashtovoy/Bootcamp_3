<?php
//---------цена до-------------
$price_to = (empty($_GET['cost-to'])) ?: (int)$_GET['cost-to'];
//--------------цена от-----//
$price_from = (empty($_GET['cost-from'])) ?: (int)$_GET['cost-from'];
//-----------каталог-------
$id_category = (empty($_GET['id'])) ?: (int)$_GET['id'];
//--------------номер страницы-----//
$page = (empty($_GET['page'])) ? (int)(1) : (int)$_GET['page'];

//-------проверка на корректность----///
if (!empty($_GET['page']) && is_int($page) && $page <= 0) {
    $header = 'Location: /template/404.php';
    header($header);
}
if (!empty($_GET['id']) && is_int($id_category) && $id_category <= 0) {
    $header = 'Location: /template/404.php';
    header($header);
}
if (!empty($_GET['cost-from']) && is_int($price_from) && $price_from < 0) {
    $header = 'Location: /template/404.php';
    header($header);
}
if (!empty($_GET['cost-to']) && is_int($price_to) && $price_to < 0) {
    $header = 'Location: /template/404.php';
    header($header);
}
require "application/models/catalog.php";
include "application/views/catalog.php";
?>