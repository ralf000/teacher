<div class="post-summary-footer">
    <ul class="post-data">
        <li><i class="icon-calendar"></i> <?php the_time('d/m/y') ?></li>
        <li><i class="icon-user"></i><?php the_author() ?></li>
        <li><i class="icon-comment"></i> <a
                href="<?php comment_link() ?>"><?php comments_number() ?></a></li>
        <?php if (get_the_tag_list()): ?>
            <li><i class="icon-tags"></i>
                <?= getTags(get_the_tag_list()) ?>
            </li>
        <?php endif; ?>
    </ul>
</div>