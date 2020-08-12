<?php

//-------------------//
$id = 'id';

if (!empty($_GET[$id])) {
    $new_id = $_GET[$id];
} else {
    $header = 'Location: /template/404.php';
    header($header);
}
require "application/models/news-detail.php";
include "application/views/news-detail.php";
?>