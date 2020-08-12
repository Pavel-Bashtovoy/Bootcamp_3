<?php

    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','shop');
    define('NUMBER_OF_NEWS','6');
    define('NUMBER_OF_PRODUCTS','12');
    $menu = array (
        array ("link"=>"Главная", "href"=>"index.php"),
        array ("link"=>"Категория", "href"=>"catalog.php"),
        array ("link"=>"О компании", "href"=>"about.php"),
        array ("link"=>"Новости", "href"=>"news.php"),
        array ("link"=>"Доставка и оплата", "href"=>"paydelivery.php"),
        array ("link"=>"Контакты", "href"=>"contacts.php")
   );

?>