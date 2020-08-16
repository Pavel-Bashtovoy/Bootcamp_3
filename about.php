<?php
session_start();
include "includes/lib.php";
$link = connection();
?>
<?php
$title = 'О компании';
include "application/views/includes/template_header.php";
?>
    <main class="inside-content">
        <article class="shipment-article">
            <h1>О компании</h1>
            <p><b>Уважаемые покупатели!</b></p>
            <p>
                Наш интернет магазин на рынке более 3-х лет.Мы продаем товары наилучшее качества.
                <br>Как вы могли заметить :у нас самые низкие цены и большой ассортимент.
                <br>Мы ценим каждого покупателя!
            </p>
            <p><b>Также наш интернет-магазин работает с разными видами платежных систем,что позволит вам без проблем
                    осуществить покупку:</b></p>
            <ol>
                <li>Оплата наличными курьеру (в Москве в пределах МКАД)</li>
                <li>Оплата с помощью Яндекс.Деньги</li>
                <li>Оплата по безналичному расчету</li>
                <li>Оплата по квитанции Сбербанка РФ или другого коммерческого банка.</li>
            </ol>

        </article>
    </main>

<?php 
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
include "application/views/includes/template_footer.php"; 
?>