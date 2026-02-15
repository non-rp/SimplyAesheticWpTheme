<?php
/*
Template Name: Landing Page
Template Post Type: page
*/


get_header();
?>

	<main class="fwpage">
		
		<?php  $benefits = get_field('benefits'); 
		if ($benefits) {  ?>
		<section class="benefits">
			<div class="benefits__column"><img src="<?php echo $benefits['image']; ?>" alt=""></div>
			<div class="benefits__column benefits__landing">
				<h2 class="benefits__landing__title heading-2 _anim-items _anim-no-hide"><?php echo $benefits['title']; ?></h2>
				<div class="benefits__description"><?php echo $benefits['description']; ?></div>
				<div class="benefits__form contact__forms"><?php echo do_shortcode( $benefits['contact_form_shortcode'] ); ?></div>
			</div>
		</section>
		<?php } ?>
		
		<?php  $benefit_list = get_field('benefits_lp'); 
		if ($benefit_list) {  ?>
		<section class="benefit_list">
			<div class="benefit_list__title"><?php echo $benefit_list['title']; ?></div>
			<?php $list = $benefit_list['benefit_list'];
				if ($list) { ?>
				<ul class="benefit__list _anim-items _anim-no-hide">
					<?php 
					foreach ($list as $item) { ?>
					 <li class="benefit_list_item _icon-check"> <?php echo $item['benefit_name'] ?></li>
					<?php } ?>
				</ul>
			<?php } ?>
		</section>
		<?php } ?>
		
		<?php  $reviews = get_field('reviews'); 
		if ($reviews) {  ?>
		<section class="reviews">
			<h2 class="reviews__title heading-2 _anim-items _anim-no-hide"><?php echo $reviews['title']; ?> </h2>
			<div class="reviews__subtitle subtitle _anim-items _anim-no-hide"><?php echo $reviews['subtitle']; ?> </div>

			<?php if ($reviews['reviews_items']) { ?>
			<div class="reviews__wrap">
				<?php foreach($reviews['reviews_items'] as $item) { ?>
				<div class="reviews__item">
					<p><?php echo $item['review']; ?></p>
					<div class="reviews__person _icon-rating"><?php echo $item['person']; ?> </div>
					<div class="reviews__location"><?php echo $item['location']; ?> </div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</section>
		<?php } ?>
		
		<?php  $questions = get_field('questions'); 
		if ($questions) {  ?>
		<section class="asked">
			<h2 class="asked__heading heading-2 _anim-items _anim-no-hide"><?php echo $questions['title']; ?> </h2>
			<?php if ($questions['question']) { ?>
			<div data-spollers class="spollers _anim-items _anim-no-hide">
				<?php foreach ($questions['question'] as $item) { ?>
				<div class="asked__item spollers__item">
					<button type="button" data-spoller class="spollers__title"><?php echo $item['heading']; ?> </button>
					<div class="spollers__body">
						<p><?php echo $item['content']; ?> </p>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</section>
		<?php } ?>
		
		<?php  $devider_2 = get_field('devider_2'); 
		if ($devider_2) {  ?>
		<section class="meets">
			<h2 class="meets__heading primary-title _anim-items _anim-no-hide"><?php echo  $devider_2['title']; ?> </h2>
			<div class="meets__buttons">
				<?php if (isset($devider_2['button_blue']['title'])) { ?> <a href="<?php echo $devider_2['button_blue']['url'] ?>" class="meets__button button --action _anim-items _anim-no-hide" target="<?php echo $devider_2['button_blue']['target'] ?>"><span><?php echo $devider_2['button_blue']['title'] ?> </span></a> <?php } ?>
				<?php if (isset($devider_2['button_transparent']['title'])) { ?> <a href="<?php echo $devider_2['button_transparent']['url'] ?>" class="meets__button button --light _anim-items _anim-no-hide" target="<?php echo $devider_2['button_transparent']['target'] ?>"><span><?php echo $devider_2['button_transparent']['title'] ?> </span></a> <?php } ?>
			</div>
		</section>
		<?php } ?>
		
	</main>

<?php
get_footer();


