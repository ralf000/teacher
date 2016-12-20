<!-- Main Navigation
        ================================================== -->
<div class="span8 navigation">
    <div class="navbar hidden-phone">

        <?= getMainMenu(); ?>

    </div>

    <!-- Mobile Nav
    ================================================== -->
    <form action="#" id="mobile-nav" class="visible-phone">
        <div class="mobile-nav-select">
                <?= getMobileMainMenu() ?>
        </div>
    </form>

</div>