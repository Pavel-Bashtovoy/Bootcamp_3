<?php include "includes/template_header.php"; ?>
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
                        
                            <input class="search-filter__input" step="0.01" type="number" min="0" name="cost-from"
                                   id="cost-from" <?php if (!empty($_GET['cost-from'])): ?>value="<?= $price_from ?>"
                                   <?php else: ?>placeholder="от"<?php endif ?>>
					</span>
    <span class="search-filter__item">
                        <label class="search-filter__label" for="cost-to">—</label>
                        
                            <input class="search-filter__input" type="number" min="0" name="cost-to" id="cost-to"
                            <?php if (!empty($_GET['cost-to'])): ?> value="<?= $price_to ?>"<?php else: ?>placeholder="до"<?php endif ?>>
					</span>
    <input class="form-submit search-filter__apply" type="submit" value="Применить">
</form>
<?php if ($res_products != false): ?>
    <ul class="categories categories__reposition">
        <?php foreach ($arrProducts as $arrProduct): ?>
            <li class="category good-piece">
                <a class="category__link"
                   href="product.php?id=<?= $arrProduct['id'] ?>&cat_id=<?= $arrProduct['main_category'] ?>">
                    <?php if ($arrProduct['image'] != ''): ?>
                        <img class="category__image good__image" src="<?= $arrProduct['image'] ?>"
                             alt="category-image-1">
                    <?php else: ?>
                        <img class="category__image good__image" src="application/views/img/category-none.jpg"
                             alt="category-image-1">
                    <?php endif ?>
                    <span class="category__name-container good_name"><span
                                class="category__name-inner"><?= $arrProduct['name'] ?></span></span>
                </a>
                <span class="good-price good_price"><?= $arrProduct['price'] ?><small
                            class="good-price__currency">р</small></span>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif ?>
<ul class="paginator catalog-page__paginator">
    <li class="paginator__elem paginator__elem_next"><a
            <?php if (!empty(remove_key())): //предыдущая ?>
                    href=" catalog.php?page=<?= $page - 1 ?>&<?=remove_key() ?>"
            <?php else: ?>
                    href=" catalog.php?page=<?= $page - 1 ?>"
            <?php endif ?>
                class="paginator__link">Предыдущая страница</a></li>
    <?php for ($j = 1; $j < $pages; $j++)://страницы (навигация ) ?>
        <?php if ($j == ($page)): ?>
            <li class="paginator__elem paginator__elem_current"><span class="paginator__link"><?= $j ?></span></li>
        <?php else: ?>
            <?php if (!empty($_GET['id'])): ?>
                <?php if (!empty($_GET['cost-to']) && !empty($_GET['cost-from'])): ?>
                    <li class="paginator__elem"><a
                                href="catalog.php?page=<?= $j ?>&<?=remove_key() ?>"
                                class="paginator__link"><?= $j ?></a></li>
                <?php else: ?>
                    <li class="paginator__elem"><a href="catalog.php?page=<?= $j ?>&<?=remove_key() ?>"
                                                   class="paginator__link"><?= $j ?></a></li>
                <?php endif ?>

            <?php else: ?>
                <?php if (!empty($_GET['cost-to']) && !empty($_GET['cost-from'])) : ?>
                    <li class="paginator__elem"><a
                                href="catalog.php?page=<?= $j ?>&<?=remove_key() ?>"
                                class="paginator__link"><?= $j ?></a></li>
                <?php else: ?>
                    <li class="paginator__elem"><a href="catalog.php?page=<?= $j ?>"
                                                   class="paginator__link"><?= $j ?></a></li>
                <?php endif ?>
            <?php endif ?>

        <?php endif ?>
    <?php endfor ?>

    <li class="paginator__elem paginator__elem_next"><a
            <?php if (!empty(remove_key()))://следующая страница?>
                    href=" catalog.php?page=<?= $j - 1 ?>&<?=remove_key() ?>"
            <?php else: ?>
                    href=" catalog.php?page=<?= $j - 1 ?>"
            <?php endif ?>
                class="paginator__link">Следующая страница</a></li>
</ul>
<?php include "includes/template_footer.php"; ?>
