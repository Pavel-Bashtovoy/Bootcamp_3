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

?>