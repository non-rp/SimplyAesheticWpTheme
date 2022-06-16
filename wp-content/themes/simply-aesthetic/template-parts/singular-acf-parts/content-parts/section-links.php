<?php 
    $links = get_sub_field('links');
?>

<section class="block-links">
	<h3 class="block-links__title"><?php the_sub_field('title'); ?></h3>
	<div class="block-links__links">
        <?php foreach($links as $link) {  ?>   
		    <a href="<?php echo $link['item']['url'] ?>" class="block-links__link "><span class="_icon-arrow"><?php echo $link['item']['title'] ?></span></a>
        <?php } ?>
	</div>
</section>