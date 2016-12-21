<?php get_header() ?>

    <!-- Blog Content
     ================================================== -->
    <div class="row">

        <!-- Blog Posts
        ================================================== -->
        <div class="span8 blog">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!-- Category Post -->
                    <article>
                        <h3 class="title-bg"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                        <div class="post-summary">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('full') ?>
                            </a>
                            <?php the_excerpt() ?>
                            <div class="post-summary-footer">
                                <button class="btn btn-small btn-inverse"
                                        onclick="location.href='<?php the_permalink() ?>'" type="button">
                                    Читать далее
                                </button>
                                <?php include 'inc/post-summary-footer.inc.php'?>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else: ?>
                <span>Здесь пусто</span>
            <?php endif; ?>


            <!-- Pagination -->
            <?php sitePagination() ?>

        </div>

        <!-- Blog Sidebar
        ================================================== -->
        <?php require_once "inc/post-sidebar.inc.php" ?>

    </div>

    </div> <!-- End Container -->

<?php get_footer() ?>