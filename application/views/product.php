<?php include "includes/template_header.php"; ?>
    <main class="inside-content">
        <nav class="bread-crumbs-container product__bread-crumbs">
            <ul class="bread-crumbs">
                <li class="bread-crumb"><a class="bread-crumb__link" href="index.php">Главная</a></li>
                <li class="bread-crumb"><a class="bread-crumb__link" href="catalog.php">Каталог</a></li>
                <?php if ($flag == 1): ?>
                    <li class="bread-crumb"><a class="bread-crumb__link"
                                               href="catalog.php?id=<?= $main_category ?>"><?= $category ?></a></li>
                <?php endif ?>
                <li class="bread-crumb bread-crumb_current"><?= $row['name'] ?></li>
            </ul>
        </nav>
        <section class="product">

            <?php foreach ($rows_product as $row_product): ?>
                <h1 class="product__info-block-part product__headline"><?= $row_product['name'] ?></h1>
                <img class="product__image" src="<?= $row_product['image'] ?>"
                     alt="Упс! Здесь было фото сигареты, но теперь его нет :(">
                <span class="good-price good_price product__info-block-part product__info-price"><?= $row_product['price'] ?><small
                            class="good-price__currency">руб.</small></span>
                <article class="product__description">
                    <p>
                        <?= $row_product['description'] ?>
                    </p>
                </article>
                <?php $main_category = $row_product['main_category']; ?>
            <?php endforeach ?>
        </section>

    </main>
<?php include "includes/template_footer.php"; ?>