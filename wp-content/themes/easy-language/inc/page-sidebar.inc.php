<div class="span4 sidebar page-sidebar"><!-- Begin sidebar column -->

    <!--Search-->
    <section>
        <div class="input-append">
            <form action="<?php bloginfo('url'); ?>">
                <input id="appendedInputButton" size="16" name="s" type="text" placeholder="Поиск">
                <button class="btn" type="submit"><i class="icon-search"></i></button>
            </form>
        </div>
    </section>

    <!--Tabbed Content-->
    <h5 class="title-bg">Информация</h5>
    <ul class="nav nav-tabs"></ul>

    <div class="tab-content">
        <?php
        if (!dynamic_sidebar('page_sidebar_tabs'))
            echo '<p>Виджеты правой колонки страниц для переключающейся панели</p>';
        ?>
    </div>

    <!--Testimonials-->
    <?php
    $quotes = new WP_Query([
        'post_type' => 'quote',
        'post_count' => 2,
        'orderby' => 'rand'
    ]);
    ?>

    <?php
    if (!dynamic_sidebar('page_sidebar'))
        echo '<p>Виджеты правой колонки страницы</p>';
    ?>

</div><!-- End sidebar column -->
<script type="application/javascript" src="<?= get_template_directory_uri() ?>/js/sidebar_tabs.js"></script>