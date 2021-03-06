<?php
session_start();
include "includes/lib.php";
$link = connection();
?>
<?php
$title = 'Доставка и оплата';
include "application/views/includes/template_header.php";
?>
    <main class="inside-content">
        <article class="shipment-article">
            <h1>Доставка</h1>
            <p><b>Уважаемые покупатели!</b></p>
            <p>
                Оплатить свой заказ Вы можете любым из следующих способов:
            </p>
            <ol>
                <li>Оплата наличными курьеру (в Москве в пределах МКАД)</li>
                <li>Оплата с помощью Яндекс.Деньги</li>
                <li>Оплата по безналичному расчету</li>
                <li>Оплата по квитанции Сбербанка РФ или другого коммерческого банка.</li>
            </ol>
            <p>В двух последних случаях мы выписываем Вам счет, который Вы получаете по электронной почте после
                подтверждения
                Вашего заказа. После получения денег, мы в течение 2-3 рабочих дней доставляем Вам товар с помощью
                транспортных
                компаний "СПСР" и "Грузовозофф" (по РФ), а так же по желанию "Почтой РФ". Стоимость доставки по РФ
                согласовывается с Вами и включается в стоимость счета.</p>
            <p>Доставка по Москве осуществляется на следующий день после согласования заказа.</p>
            <p>Стоимость курьерской доставки по Москве составляет <b>250 р.</b></p>
            <p>Доставка по Москве крупногабаритных товаров (от 5 кг) - <b>300 р.</b></p>
            <p>Доставка за пределы МКАД - по договоренности</p>
            <p><i>Также, Вы имеете возможность приобрести товары в нашем шоу-руме на м.Сходненская</i></p>
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