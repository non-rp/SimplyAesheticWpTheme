<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simply_Aesthetic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
	<header class="header">
			<div class="header__wrap">
				<div class="header__top _anim-items _anim-no-hide"><span><?php the_field('top_header_row', 'option'); ?></span></div>
				<div class="header__main">
					<a href="<?php echo home_url(); ?>" class="header__logo "><img class="_anim-items _anim-no-hide" width="236" height="32" src="<?php the_field('logo', 'option'); ?>" alt="Simply Aesthetic"></a>
					<button type="button" class="menu__icon icon-menu"><span></span></button>
					
					<div class="header__menu menu">
					<?php 
						aesthetic_nav_menu(['theme_location' => 'header-menu']); ?>
					</div>

					<div class="header__button"><a href="<?php echo get_field('heade_button', 'option')['url']; ?>"><?php echo get_field('heade_button', 'option')['title']; ?></a></div>
				</div>

			</div>
		</header>
