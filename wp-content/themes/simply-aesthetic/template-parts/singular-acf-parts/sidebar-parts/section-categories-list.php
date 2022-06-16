<?php ?>

<div class="sidebar__categories">
    <?php if (get_sub_field('title')) { ?>
		<h3 class="sidebar__title"><?php the_sub_field('title'); ?></h3>
    <?php } ?>
	<ul class="sidebar__list">
        <?php 
            $list = get_sub_field('list'); 
            foreach ($list as $item) { ?>
                <li class="sidebar__item"><a href="<?php echo $item['link']['url'] ?>" class="sidebar__link"><?php echo $item['link']['title'] ?></a></li>
           <?php }
            ?>
	</ul>
</div>


                               

