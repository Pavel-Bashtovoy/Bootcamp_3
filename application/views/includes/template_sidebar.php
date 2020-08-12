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