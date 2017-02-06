<!-- Slider Carousel
  ================================================== -->
<div class="span8">
    <?php $slider = new WP_Query([
        'post_type' => 'slide',
        'order' => 'desc',
        'orderby' => 'post_date'
    ]); ?>
    <?php if ($slider->have_posts()): ?>
        <div class="flexslider">
            <ul class="slides">
                <?php while ($slider->have_posts()): $slider->the_post() ?>
                    <li>
                        <?php if (post_custom('slide_link')): ?>
                        <a target="_blank" href="<?= post_custom('slide_link'); ?>">
                            <?php endif; ?>
                            <?php the_post_thumbnail('large') ?>
                            <p class="flex-caption"><?= get_the_title() ?></p>
                            <?php if (post_custom('slide_link')): ?>
                        </a>
                    <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    <?php else: ?>
        <p>Слайдов нет</p>
    <?php endif; ?>
</div>