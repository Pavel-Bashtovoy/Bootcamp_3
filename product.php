<?php
//-----------id товара-------
$id = 'id';

if (!empty($_GET[$id])) {
    $product_id = $_GET[$id];
} else {
    $header = 'Location: /template/404.php';
    header($header);
}
//-----------id категории-------
$cat_id = 'cat_id';

if (!empty($_GET[$cat_id])) {
    $category_id = $_GET[$cat_id];
}


//--------------------------------------

require "application/models/product.php";
include "application/views/product.php";
?>