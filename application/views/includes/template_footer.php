</main>
<div class="sidebar">
    <?php $categories = sidebar_categories($link);?>
    <?php if (!empty($categories)):?>
        <section class="catalog">
            <h2 class="sidebar__headline">Каталог</h2>
            <ul class="catalog-list">
                <?php foreach ($categories as $category):?>
                    <li class="catalog-list__item"><a class="catalog-list__link"
                                                      href="catalog.php?id=<?= $category['id'] ?>"><?= $category['name'] ?></a>
                    </li>
                <?php endforeach?>
            </ul>
        </section>
    <?php endif?>
    <?php $news = sidebar_news($link);?>
    <?php if (!empty($news)):?>
        <section class="news">
            <h2 class="sidebar__headline news__headline">Новости</h2>
            <ul class="news-list">
                <?php
                foreach ($news as $new) {
                    ?>
                    <li class="news-item">
                        <a class="news-item__link" href="news-detail.php?id=<?= $new['id'] ?>">
                            <?= $new['title'] ?>
                        </a>
                        <span class="news-item__date"><?= $new['date'] ?></span>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <span class="archive"><a class="archive__link" href="news.php">Архив новостей</a></span>
        </section>
    <?php endif ?>
</div>
<?php if (basename($_SERVER['PHP_SELF'])== "index.php"):?>
    <?php include "application/views/include_areas/index_seo.php"; ?>
<?php endif?>
</div>
</div>

<footer class="page-footer">
    <div class="wrapper page-footer__wrapper">
        <div class="copyright">
            <span class="copyright__part copyright__lifetime">Copyright ©2007-<?php echo date('Y'); ?></span>
            <span class="copyright__part copyright__company-lifetime"><b>© "Company"</b>,<?php echo date('Y'); ?></span>
            <img class="copyright__image" src="img/logo.png" alt="Company-logo">
            <span class="copyright__part copyrhigt__company-name">Company</span>
        </div>
        <nav class="footer-nav">
            <ul class="footer-nav__list">
                <?php foreach ($menu as $item):?>
                    <li class="footer-nav__list-item"><a class="footer-nav__link"
                                                         href="<?= $item["href"] ?>"><?= $item["link"] ?></a></li>
                <?php endforeach ?>
            </ul>
        </nav>
        <div class="developer">
            <span class="developer__ref">Разработка сайта - <a class="developer__link" href="#">ITConstruct</a></span>
            <img class="counter" src="img/counter.png" alt="Page-counter">
        </div>
    </div>
</footer>
</body>

</html>
