<?php ?>

<section class="content__quote block-quote">
    <?php if (get_sub_field('title')) { ?>
        <h2 class="block-quote__title"><?php the_sub_field('title'); ?></h2>
    <?php } 
        if (get_sub_field('subtitle')) {   ?>
        <p class="block-quote__subtitle"><?php the_sub_field('subtitle'); ?></p>
    <?php } ?>
    <div class="block-quote__author-block">
    <?php if (get_sub_field('image')) { ?>
            <div class="block-quote__img"><img src="<?php the_sub_field('image'); ?>" alt=""></div>
        <?php } ?>
        <?php if (get_sub_field('author')) { ?>
        <div class="block-quote__author">
            <p>Article by: </p>
            <span><?php the_sub_field('author'); ?></span>
        </div>
        <?php } ?>
    </div>
</section>