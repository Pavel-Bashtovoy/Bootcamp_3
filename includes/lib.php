<?php

    //сюда можно сложить какие-то вспомогательные функции, функции для подключения к БД с возвратом дескриптора
    require "config.php";
    function connection()
    {
        //----Данные для подключения-------------      
        $link = new mysqli(HOST,USER,PASSWORD,DATABASE);
        if (mysqli_connect_errno()) 
        {
            echo "Не удалось подключиться к MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
            exit;
        }
        else
        {
            return  $link;
        }

    }
    function sidebar_categories($link)
    {
        $sql_category = 'SELECT * FROM `categories`';
	    $result = mysqli_query($link, $sql_category);
	    if($result&&mysqli_num_rows($result) > 0)
	    {    
            $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        else
        {
            $categories=array();
        }
        return $categories;
    }
    function sidebar_news($link)
    {
        $sql_news = 'SELECT * FROM `news`ORDER BY `date`DESC LIMIT 6';
        $result_news = mysqli_query($link, $sql_news);
        if($result_news&&mysqli_num_rows($result_news) > 0)
        {
            $news = mysqli_fetch_all($result_news, MYSQLI_ASSOC);
        }
        else
        {
            $news=array();
        }
        return $news;
    }
?>