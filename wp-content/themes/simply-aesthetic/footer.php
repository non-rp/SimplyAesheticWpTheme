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
							$socials = get_field('socials', 'option');
							if ($socials['facebook']) {?> <a href="<?php echo $socials['facebook'] ?>" class="_icon-facebook-logo"></a> <?php } 
							if ($socials['instagram']) {?> <a href="<?php echo $socials['instagram'] ?>" class="_icon-instagram"></a> <?php } 
							if ($socials['twitter']) {?> <a href="<?php echo $socials['twitter'] ?>" class="_icon-twitter"></a> <?php } 
							if ($socials['linkedin']) {?> <a href="<?php echo $socials['linkedin'] ?>" class="_icon-linkedin"></a> <?php } ?>
					</div>

				</div>
				<div class="footer__row">
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

</body>
</html>
