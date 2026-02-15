<?php 
    $link = get_sub_field('button');
?>

<div class="sidebar__button-block">
	<p class="sidebar__title"><?php the_sub_field('title'); ?></p>
	<a href="<?php echo $link['url'] ?>" class="sidebar__button button --action _anim-items _anim-no-hide"><span><?php echo $link['title'] ?></span></a>
</div>

