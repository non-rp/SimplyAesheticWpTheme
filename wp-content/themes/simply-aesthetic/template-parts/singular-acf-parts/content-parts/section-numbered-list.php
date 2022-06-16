<?php 
    $list = get_sub_field('list');
?>

<section class="numbers-list">
	<h3 class="numbers-list__title"><?php the_sub_field('title'); ?></h3>
	<h4 class="numbers-list__subtitle"><?php the_sub_field('subtitle'); ?></h4>
	<ol class="numbers-list__list">
        <?php foreach ($list as $item) { ?> 
		    <li class="numbers-list__item"><?php echo $item['item'] ?></li>
        <?php } ?>
	</ol>
</section>