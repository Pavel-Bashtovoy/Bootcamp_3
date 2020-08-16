<?php
function error_404()
{
    http_response_code(404);
    header('Location: /template/404.php');
}
//---------цена до-------------
$price_to = (empty($_GET['cost-to'])) ?: $_GET['cost-to'];
//--------------цена от-----//
$price_from = (empty($_GET['cost-from'])) ?: $_GET['cost-from'];
//-----------каталог-------
$id_category = (empty($_GET['id'])) ?: $_GET['id'];
//--------------номер страницы-----//
$page = (empty($_GET['page'])) ? (1) : (int)$_GET['page'];

//-------проверка на корректность----///
if (!empty($page) && is_int($page) && $page <0) {
    error_404();   
}
if (!empty($id_category) && is_int((int)$id_category) && (int)$id_category <= 0) {
    error_404();   
}
if (!empty($price_from) && is_int((double)$price_from) && (double)$price_from < 0) {
    error_404();   
}
if (!empty($price_to) && is_int((double)$price_to) && (double)$price_to < 0) {
    error_404();   
}
require "application/models/catalog.php";
include "application/views/catalog.php";
?>