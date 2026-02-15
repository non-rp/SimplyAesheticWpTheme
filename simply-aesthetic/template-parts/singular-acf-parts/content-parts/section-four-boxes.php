<?php 
    $four_boxes = get_sub_field('four_boxes');
?>

<section class="block-four_boxes">
        
		<?php foreach ( $four_boxes as $single_box ) { ?>
			
			<?php if ( !empty( $single_box['box_url'] ) && !empty( $single_box['box_title'] ) ) { ?>
			<div class="single-box">
				<img class="box-image" src="<?php echo $single_box['box_image'] ?>" />
				<div class="box-wrapper">
					
					<?php if ( !empty( $single_box['box_title'] ) ) { ?>
					<p class="box-title"><?php echo $single_box['box_title'] ?></p>
					<?php } ?>
					
					<?php if ( !empty( $single_box['box_description'] ) ) { ?>
					<p class="box-description"><?php echo $single_box['box_description'] ?></p>
					<?php } ?>
					
					<a class="box-cta main__button button --action _anim-items _anim-no-hide _active" href="<?php echo $single_box['box_url'] ?>">Learn more</a>
				</div>
				
			</div>
			<?php } ?>
		<?php } ?>
	
</section>