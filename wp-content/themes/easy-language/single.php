<?php get_header(); ?>
<!-- Blog Content
  ================================================== -->
<div class="row"><!--Container row-->

    <!-- Blog Full Post
    ================================================== -->
    <div class="span8 blog">


        <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
        the_post(); ?>

        <!-- Article Post -->
        <article>
            <h3 class="title-bg"><?php the_title() ?></h3>
            <div class="post-content">
                <?php the_post_thumbnail('full') ?>

                <div class="post-body">
                    <?php the_content() ?>
                </div>

                <?php require_once 'inc/post-summary-footer.inc.php'?>
            </div>
        </article>

        <!-- About the Author -->
        <?php if (get_the_author_meta('description')): ?>
            <section class="post-content">
                <div class="post-body about-author">
                    <?= get_avatar(get_the_author_meta('ID')) ?>
                    <h4>About <?php the_author() ?></h4>
                    <?= get_the_author_meta('description') ?>
                </div>
            </section>
        <?php endif; ?>

            <!-- Post Comments
            ================================================== -->
            <?php comments_template()  ?>
            <!-- Close comments section-->

            <?php endwhile; ?>
            <?php else: ?>
                <span>Здесь пусто</span>
            <?php endif; ?>

    </div><!--Close container row-->

    <!-- Blog Sidebar
    ================================================== -->
    <?php require_once "inc/post-sidebar.inc.php" ?>

</div>

</div> <!-- End Container -->

<?php get_footer(); ?>
