<?php include "includes/template_header.php"; ?>
<main class="inside-content">
    <h1 class="invisible">Каталог товаров</h1>
    <nav class="bread-crumbs-container">
        <ul class="bread-crumbs">
            <li class="bread-crumb"><a class="bread-crumb__link" href="index.php">Главная</a></li>
            <li class="bread-crumb bread-crumb_current">Каталог</li>
        </ul>
    </nav>
    <form class="search-filter" id="catalog-page__search-filter-1" action="catalog.php?id=1" method="GET">
        <input type="hidden" name="id" value="<?= $id_category ?>">
        <input type="hidden" name="page" value="<?= $page ?>">
        <span class="search-filter__item">
                        <label class="search-filter__label" for="cost-from">Цена</label>
                        <? if (!empty($_GET['cost-from'])): ?>
                            <input class="search-filter__input" step="0.01" type="number" min="0" name="cost-from"
                                   id="cost-from" value="<?= $price_from ?>">
                        <? else: ?>
                            <input class="search-filter__input" step="0.01" type="number" min="0" name="cost-from"
                                   id="cost-from" placeholder="от">
                        <? endif ?>
					</span>
        <span class="search-filter__item">
                        <label class="search-filter__label" for="cost-to">—</label>
                        <? if (!empty($_GET['cost-to'])): ?>
                            <input class="search-filter__input" type="number" min="0" name="cost-to" id="cost-to"
                                   value="<?= $price_to ?>">
                        <? else: ?>
                            <input class="search-filter__input" type="number" min="0" name="cost-to" id="cost-to"
                                   placeholder="до">
                        <? endif ?>
					</span>
        <input class="form-submit search-filter__apply" type="submit" value="Применить">
    </form>
    <?php if ($result_product != false): ?>
        <ul class="categories categories__reposition">
            <?php foreach ($rows_product as $row_product): ?>
                <li class="category good-piece">
                    <a class="category__link"
                       href="product.php?id=<?= $row_product['id'] ?>&cat_id=<?= $row_product['main_category'] ?>">
                        <?php if ($row_product['image'] != ''): ?>
                            <img class="category__image good__image" src="<?= $row_product['image'] ?>"
                                 alt="category-image-1">
                        <?php else: ?>
                            <img class="category__image good__image" src="application/views/img/category-none.jpg"
                                 alt="category-image-1">
                        <?php endif ?>
                        <span class="category__name-container good_name"><span
                                    class="category__name-inner"><?= $row_product['name'] ?></span></span>
                    </a>
                    <span class="good-price good_price"><?= $row_product['price'] ?><small
                                class="good-price__currency">р</small></span>
                </li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>
    <ul class="paginator catalog-page__paginator">
        <?php if (!empty($_GET['id'])): //предыдущая ?>
            <?php if (!empty($_GET['cost-to']) && !empty($_GET['cost-from'])): ?>
                <li class="paginator__elem paginator__elem_next"><a
                            href=" catalog.php?page=<?= $page - 1 ?>&id=<?= $id_category ?>&cost_to=<?= $price_to ?>&cost_from=<?= $price_from ?>"
                            class="paginator__link">Предыдущая страница</a></li>
            <?php else: ?>
                <li class="paginator__elem paginator__elem_next"><a
                            href=" catalog.php?page=<?= $page - 1 ?>&id=<?= $id_category ?>" class="paginator__link">Предыдущая
                        страница</a></li>
            <?php endif ?>
        <?php else: ?>
            <?php if (!empty($_GET['cost-to']) && !empty($_GET['cost-from'])): ?>
                <li class="paginator__elem paginator__elem_next"><a
                            href=" catalog.php?page=<?= $page - 1 ?>&cost_to=<?= $price_to ?>&cost_from=<?= $price_from ?>"
                            class="paginator__link">Предыдущая страница</a></li>
            <?php else: ?>
                <li class="paginator__elem paginator__elem_next"><a href=" catalog.php?page=<?= $page - 1 ?>"
                                                                    class="paginator__link">Предыдущая страница</a></li>
            <?php endif ?>
        <?php endif ?>
        <?php for ($j = 1; $j < $pages; $j++)://страницы (навигация ) ?>
            <?php if ($j == ($page)): ?>
                <li class="paginator__elem paginator__elem_current"><span class="paginator__link"><?= $j ?></span></li>
            <?php else: ?>
                <?php if (!empty($_GET['id'])): ?>
                    <?php if (!empty($_GET['cost-to']) && !empty($_GET['cost-from'])): ?>
                        <li class="paginator__elem"><a
                                    href="catalog.php?page=<?= $j ?>&id=<?= $id_category ?>&cost_to=<?= $price_to ?>&cost_from=<?= $price_from ?>"
                                    class="paginator__link"><?= $j ?></a></li>
                    <?php else: ?>
                        <li class="paginator__elem"><a href="catalog.php?page=<?= $j ?>&id=<?= $id_category ?>"
                                                       class="paginator__link"><?= $j ?></a></li>
                    <?php endif ?>

                <?php else: ?>
                    <?php if (!empty($_GET['cost-to']) && !empty($_GET['cost-from'])) : ?>
                        <li class="paginator__elem"><a
                                    href="catalog.php?page=<?= $j ?>&cost_to=<?= $price_to ?>&cost_from=<?= $price_from ?>"
                                    class="paginator__link"><?= $j ?></a></li>
                    <?php else: ?>
                        <li class="paginator__elem"><a href="catalog.php?page=<?= $j ?>"
                                                       class="paginator__link"><?= $j ?></a></li>
                    <?php endif ?>
                <?php endif ?>

            <?php endif ?>
        <?php endfor ?>

        <?php if (!empty($_GET['id']))://следующая страница?>
            <?php if (!empty($_GET['cost-to']) && !empty($_GET['cost-from'])): ?>
                <li class="paginator__elem paginator__elem_next"><a
                            href=" catalog.php?page=<?= $j - 1 ?>&id=<?= $id_category ?>&cost_to=<?= $price_to ?>&cost_from=<?= $price_from ?>"
                            class="paginator__link">Следующая страница</a></li>
            <?php else: ?>
                <li class="paginator__elem paginator__elem_next"><a
                            href=" catalog.php?page=<?= $j - 1 ?>&id=<?= $id_category ?>" class="paginator__link">Следующая
                        страница</a></li>
            <?php endif ?>
        <?php else: ?>
            <?php if (!empty($_GET['cost-to']) && !empty($_GET['cost-from'])): ?>
                <li class="paginator__elem paginator__elem_next"><a
                            href=" catalog.php?page=<?= $j - 1 ?>&cost_to=<?= $price_to ?>&cost_from=<?= $price_from ?>"
                            class="paginator__link">Следующая страница</a></li>
            <?php else: ?>
                <li class="paginator__elem paginator__elem_next"><a href=" catalog.php?page=<?= $j - 1 ?>"
                                                                    class="paginator__link">Следующая страница</a></li>
            <?php endif ?>
        <?php endif ?>
    </ul>
</main>
<?php include "includes/template_footer.php"; ?>
