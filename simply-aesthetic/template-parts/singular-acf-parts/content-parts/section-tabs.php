<?php 
    $tabs = get_sub_field('tabs');
	$i = 0;
	$z = 0;
?>

<section class="block-tabs">
	<div class="tab-titles">
		<?php foreach ( $tabs as $single_tab ) { ?>
				<?php if ( !empty( $single_tab['tab_title'] ) ) { ?>
					<a id="<?php echo md5( $single_tab['tab_title'] ); ?>" class="tab-title <?php if ($i==0) echo "active-tab"; $i++;?>" href="javascript:void(0);"><?php echo $single_tab['tab_title'] ?><span class="open-close"></span></a>
				<?php } ?>
		<?php } ?>
	</div>   
	
	<div class="tab-content">	
		<?php foreach ( $tabs as $single_tab ) { ?>
			<div class="single-tab <?php if ($z==0) echo "display-block"; $z++; ?> <?php echo md5( $single_tab['tab_title'] ); ?>">
				<div class="tab-wrapper">					
					<?php if ( !empty( $single_tab['tab_content'] ) ) { ?>
						<?php echo $single_tab['tab_content'] ?>
					<?php } ?>	
				</div>
			</div>
		<?php } ?>
	</div>
	
</section>

<script>
	jQuery(document).ready(function () {
		jQuery(".tab-title").click(function () {
			if ( !jQuery(this).hasClass("active-tab") ) {
				jQuery(".tab-title").each(function() {
					jQuery(this).removeClass("active-tab");
				}); 
				jQuery(".single-tab").each(function() {
					jQuery(this).removeClass("display-block");
				}); 
				
				jQuery(this).addClass("active-tab");
				jQuery( "." + jQuery(this).attr('id') ).addClass("display-block");
			}
		});
	});
</script>