<?php
//--------------номер страницы-----//
$page = 'page';

if (!empty($_GET[$page])) {
    $page = $_GET[$page];
} else {
    $page = 1;
}
require "application/models/news.php";
include "application/views/news.php";
?>