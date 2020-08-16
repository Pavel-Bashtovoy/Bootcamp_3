<?php
session_start();
include "includes/lib.php";
$link = connection();
function add_to_sql($link, $author, $email, $phone, $text)
{
    $sql = "INSERT INTO `request`(`id`, `name`, `email`, `tel`, `request`) VALUES (NULL,'$author','$email','$phone','$text')";
    $result = mysqli_query($link, $sql);
    if ($result != false) {
        $_SESSION['flag'] = 1;
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
$title="Контакты";
?>
