<?php

    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','shop');
    define('NUMBER_OF_NEWS','6');
    define('NUMBER_OF_PRODUCTS','12');
    $menu = array (
        array ("link"=>"Главная", "href"=>"index.php","submenu"=>array()),
        array ("link"=>"Категория", "href"=>"catalog.php","submenu"=>array(
            array("submenu_link"=>"Электронные сигареты","submenu_href"=>"catalog.php?id=1"),
            array("submenu_link"=>"Трубки","submenu_href"=>"catalog.php?id=2"),
            array("submenu_link"=>"Картриджи","submenu_href"=>"catalog.php?id=3"),
            array("submenu_link"=>"Аккумуляторы и атомайзеры","submenu_href"=>"catalog.php?id=4"),
            array("submenu_link"=>"Аксессуары","submenu_href"=>"catalog.php?id=5"),
            array("submenu_link"=>"Зарядные устройства","submenu_href"=>"catalog.php?id=6"),
            array("submenu_link"=>"Жидкости для заправки","submenu_href"=>"catalog.php?id=7"),
            array("submenu_link"=>"Подарочные наборы","submenu_href"=>"catalog.php?id=8"))),
        array ("link"=>"О компании", "href"=>"about.php","submenu"=>array()),
        array ("link"=>"Новости", "href"=>"news.php","submenu"=>array()),
        array ("link"=>"Доставка и оплата", "href"=>"paydelivery.php","submenu"=>array()),
        array ("link"=>"Контакты", "href"=>"contacts.php","submenu"=>array())
   );

?>