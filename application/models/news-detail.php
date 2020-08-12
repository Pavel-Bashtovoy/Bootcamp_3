<?php
session_start();
include "includes/lib.php";
$link = connection();
$flag = 0;
$sql_news = 'SELECT * FROM `news`';
$result_news = mysqli_query($link, $sql_news);
if ($result_news != false) {
    $rows = mysqli_fetch_all($result_news, MYSQLI_ASSOC);
    foreach ($rows as $row) {
        if ($row['id'] == $new_id) {
            $flag = 1;
        }
    }
    if ($flag == 0) {
        $header = 'Location: /template/404.php';
        header($header);
    }
}
$sql_news = "SELECT * FROM `news`WHERE id = '{$new_id}'";
$result_news = mysqli_query($link, $sql_news);
if ($result_news != false) {
    $rows_news = mysqli_fetch_all($result_news, MYSQLI_ASSOC);
    foreach ($rows_news as $row_new)
    {
        $title= $row_new['title'];
    }
}
