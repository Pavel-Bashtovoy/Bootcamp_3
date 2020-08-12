<?php include "includes/template_header.php"; ?>
<main class="categories">
    <h1 class="invisible">Company - Электронные сигареты</h1>
    <?php if (!empty($rows)): ?>
        <ul class="categories">
            <?php foreach ($rows as $row): ?>
                <li class="category">
                    <a class="category__link" href="catalog.php?id=<?= $row['id'] ?>">
                        <img class="category__image" src="<?= $row['image'] ?>" alt="category-image-1">
                        <span class="category__name-container"><span
                                    class="category__name-inner"><?= $row['name'] ?></span></span>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>
</main>
<?php include "includes/template_footer.php"; ?>

