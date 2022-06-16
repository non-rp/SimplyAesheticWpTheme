<?php 
    $list = get_sub_field('list');
?>

<section class="block-img-list">
	<div class="block-img-list__title"><?php the_sub_field('title'); ?></div>
	<div class="block-img-list__wrap">
		<div class="block-img-list__img"><img src="<?php the_sub_field('image'); ?>" alt=""></div>
		<ul class="block-img-list__list  _anim-items _anim-no-hide">
            <?php foreach($list as $item) { ?>
			    <li class="block-img-list__item _icon-check"><?php echo $item['item'] ?></li>
            <?php } ?>
		</ul>
	</div>
</section>