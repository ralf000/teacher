<div class="span4 sidebar">

    <!--Search-->
    <section>
        <div class="input-append">
            <form action="<?php bloginfo('url'); ?>">
                <input id="appendedInputButton" size="16" name="s" type="text" placeholder="Поиск">
                <button class="btn" type="submit"><i class="icon-search"></i></button>
            </form>
        </div>
    </section>

    <!--Categories-->
    <h5 class="title-bg">Подкатегории</h5>
    <ul class="post-category-list">
        <?php foreach (getSubcategoriesByCurrentCategory() as $link => $sub): ?>
            <li><a href="<?= $link ?>"><i class="icon-plus-sign"></i><?= $sub ?></a></li>
        <?php endforeach; ?>
    </ul>

    <h5 class="title-bg">Популярные записи</h5>
    <?php wpp_get_mostpopular([
        'cat' => implode(',', getSubcategoriesIds()),
        'post_html' => '<li>{thumb} <a href="{url}"><i class="icon-plus-sign"></i>{text_title}</a></li>'
    ]); ?>

    <?php
    $tags = get_terms([
        'taxonomy' => 'post_tag',
        'fields' => 'id=>name'
    ]);
    ?>

    <?php if ($tags): ?>
        <!--Categories-->
        <h5 class="title-bg">Categories</h5>
        <ul class="post-category-list">
            <?php foreach ($tags as $id => $name): ?>
                <li><a href="<?= get_tag_link($id) ?>"><i class="icon-plus-sign"></i><?= $name ?></a></li>
            <?php endforeach; ?>
        </ul>
    <? endif; ?>

    <?php
    if (!dynamic_sidebar('category_sidebar')) {
        echo '<p>Виджеты правой колонки категории записей</p>';
    }
    ?>

    <!--Tabbed Content-->
    <h5 class="title-bg">Дополнительно</h5>
    <ul class="nav nav-tabs"></ul>


    <div class="tab-content">
        <?php
        if (!dynamic_sidebar('category_sidebar_tabs')) {
            echo '<p>Виджеты правой колонки категории записей для переключающейся панели</p>';
        }
        ?>

    </div>

</div>
<script type="application/javascript" src="<?= get_template_directory_uri() ?>/js/sidebar_tabs.js"></script>