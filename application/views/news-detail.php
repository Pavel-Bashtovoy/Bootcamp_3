<?php include "application/views/includes/template_header.php"; ?>
    <main class="inside-content">
        <article class="shipment-article">
            <?php foreach ($rows_news as $row_new): ?>
                <p><b><?= $row_new['date'] ?></b></p>
                <h1><?= $row_new['title'] ?></h1>
                <p><?= $row_new['description'] ?></p>
            <?php endforeach ?>
        </article>
    </main>
<?php include "application/views/includes/template_footer.php"; ?>