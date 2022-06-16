<?php ?>

<section class="content__quote-2 block-quote-2">
	<h2 class="block-quote-2__title"><?php the_sub_field('title'); ?></h2>
	<div class="block-quote-2__author-block">
		<div class="block-quote-2__img"><img src="<?php the_sub_field('image'); ?>" alt=""></div>
		<div class="block-quote-2__author">
			<p>Article by: </p>
			<span><?php the_sub_field('author'); ?></span>
		</div>
		<div class="block-quote-2__buttons">
			<a href="<?php echo get_sub_field('button')['url']; ?>" class="block-quote-2__button button --action _anim-items _anim-no-hide"><span><?php echo get_sub_field('button')['title']; ?></span></a>
		</div>
	</div>
</section>