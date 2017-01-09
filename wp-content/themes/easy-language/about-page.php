<?php
/*
Template Name: Шаблон страницы "О сайте"
*/
?>
<?php get_header(); ?>

<!-- Page Content
================================================== -->
<div class="row"><!--Container row-->

    <!-- Title Header -->
    <div class="span8"><!--Begin page content column-->


        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <h2><?php the_title() ?></h2>
                <img src="<?= get_the_post_thumbnail_url(null, 'large')?>" alt="<?php the_title() ?>" width="250" class="alignleft size-large wp-image-54 img-responsive" />
                <?php the_content() ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </div> <!--End page content column-->

    <!-- Blog Sidebar
    ================================================== -->
    <?php require_once "inc/page-sidebar.inc.php" ?>

</div><!-- End container row -->

</div> <!-- End Container -->

<script>
    //оборачиваем текст до тега more
//    $(function () {
//        $('.row p > span').parent('p').addClass('lead');
//    });
</script>

<?php get_footer(); ?>
