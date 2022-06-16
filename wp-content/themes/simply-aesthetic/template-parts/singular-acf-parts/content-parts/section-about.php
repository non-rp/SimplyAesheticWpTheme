<?php ?>

<section class="about-clinic">
	<h3 class="about-clinic__title"><?php the_sub_field('title'); ?></h3>
	<p class="about-clinic__desc"><?php the_sub_field('description'); ?></p>
	<div class="about-clinic__map">
		<?php the_sub_field('code_map'); ?>
	</div>
</section>