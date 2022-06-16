<?php ?>

<section class="block-form">
	<h3 class="block-form__title"><?php the_sub_field('title'); ?></h3>
	<div class="block-form__form">
        <?php 
            $shortcode = get_sub_field('shortcode_contactform_7');
          echo do_shortcode( $shortcode );
        ?>
    </div>
</section>