<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simply_Aesthetic
 */

?>

<footer class="footer">
			<div class="footer__container">

				<div class="footer__row">
					<a href="" class="footer__logo"><img src="<?php the_field('footer_logo', 'option'); ?>" alt="Simply Aesthetic"></a>
					<div class="footer__socials">
					<?php 
						$socials = get_field('socials', 'option');?>
						<div class="footer-icons-new">
							<?php
							if ($socials['tiktok']) {?> <a href="<?php echo $socials['tiktok'] ?>" class="icon2-tiktok"></a> <?php } 
							if ($socials['facebook']) {?> <a href="<?php echo $socials['facebook'] ?>" class="_icon-facebook-logo"></a> <?php } 
							if ($socials['instagram']) {?> <a href="<?php echo $socials['instagram'] ?>" class="_icon-instagram"></a> <?php } 
							if ($socials['twitter']) {?> <a href="<?php echo $socials['twitter'] ?>" class="icon2-Vector"></a> <?php } 
							if ($socials['linkedin']) {?> <a href="<?php echo $socials['linkedin'] ?>" class="_icon-linkedin"></a> <?php } ?>
						</div>
						<div class="footer__phone"><img src="<?php echo get_template_directory_uri() . '/assets/img/phone.svg'; ?>" /><a href="tel:<?php echo  preg_replace('/[^0-9]/', '', get_field('phone', 'option'));  ?>"><?php echo get_field('phone', 'option') ?></a></div>
					</div>

				</div>
				<div class="footer__row top__margin">
					<div class="footer__copyright"><?php the_field('copyright', 'option'); ?></div>
					
					<div class="footer__menu menu">
						<?php wp_nav_menu([
							'theme_location' => 'footer-menu',
							'container'       => 'nav',   
							'container_class' => 'footer-menu__body',  
							'menu_class'      => 'footer-menu__list',
							'echo'            => true,

						]); ?>
					</div>
				</div>

			</div>
		</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	
	//hide whatsapp on mobiles untill scrolled down
	const btnScrollToTop = document.querySelector("#qlwapp");

	jQuery(document).ready( function () {
		if (window.innerWidth <= 480) { 
			btnScrollToTop.style.display = 'none';
		}
	});

	// toggle 'scroll to top' based on scroll position
	window.addEventListener('scroll', e => {
		if (window.innerWidth <= 480) {
			btnScrollToTop.style.display = window.scrollY > 40 ? 'block' : 'none';
		}
	});
</script>

</body>
</html>
