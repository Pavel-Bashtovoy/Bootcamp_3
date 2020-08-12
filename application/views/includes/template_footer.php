<?php include "template_sidebar.php"; ?>
<?php if ($_SERVER['PHP_SELF'] == "/template/index.php"):?>
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
                <?php foreach ($menu as $item) { ?>
                    <li class="footer-nav__list-item"><a class="footer-nav__link"
                                                         href="<?= $item["href"] ?>"><?= $item["link"] ?></a></li>
                <?php } ?>
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
