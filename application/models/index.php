<?php
session_start();
include "includes/lib.php";
$link = connection();
$sql = 'SELECT * FROM `categories`';
$result = mysqli_query($link, $sql);
if ($result != false) 
{
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
} 
$title='Главная';
