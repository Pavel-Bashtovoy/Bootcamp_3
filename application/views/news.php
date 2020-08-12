<?php include "includes/template_header.php"; ?>
    <main class="inside-content">
        <h1 class="invisible">Новости</h1>
        <nav class="bread-crumbs-container">
            <ul class="bread-crumbs">
                <li class="bread-crumb"><a class="bread-crumb__link" href="index.php">Главная</a></li>
                <li class="bread-crumb bread-crumb_current">Новости</li>
            </ul>
        </nav>
        <ul class="categories categories__reposition">
            <?php foreach ($news as $new): ?>
                <li class="category good-piece">
                    <a class="news-item__link" href="news-detail.php?id=<?= $new['id'] ?>">
                        <?= $new['title'] ?>
                    </a>
                    <span class="news-item__date"><?= $new['date'] ?></span>
                </li>
            <?php endforeach ?>
        </ul>
        <ul class="paginator catalog-page__paginator">
            <li class="paginator__elem paginator__elem_next"><a href=" news.php?page=<?= $page - 1 ?>"
                                                                class="paginator__link">Предыдущая страница</a></li>
            <?php for ($j = 1; $j < $pages; $j++): ?>
                <?php if ($j == ($page)): ?>
                    <li class="paginator__elem paginator__elem_current"><span class="paginator__link"><?= $j ?></span>
                    </li>
                <?php else: ?>
                    <li class="paginator__elem"><a href="news.php?page=<?= $j ?>" class="paginator__link"><?= $j ?></a>
                    </li>
                <?php endif ?>
            <?php endfor ?>
            <li class="paginator__elem paginator__elem_next"><a href=" news.php?page=<?= $j - 1 ?>"
                                                                class="paginator__link">Следующая страница</a></li>
        </ul>
    </main>
<?php include "includes/template_footer.php"; ?>