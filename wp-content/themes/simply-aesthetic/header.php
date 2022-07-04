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
					<a href="<?php echo home_url(); ?>" class="header__logo "><img class="_anim-items _anim-no-hide" src="<?php the_field('logo', 'option'); ?>" alt="Simply Aesthetic"></a>
					<button type="button" class="menu__icon icon-menu"><span></span></button>
					
					<div class="header__menu menu">
					<?php 
						aesthetic_nav_menu(['theme_location' => 'header-menu']); ?>
						<!-- <nav class="menu__body">
							<ul class="menu__list">
								<li class="menu__item  has-children"><a href="" class="menu__link">Hair Transplant</a>
									<div class="menu__submenu submenu">
										<div class="submenu__wrap">
											<div class="submenu__title">Hair Surgery</div>
											<ul class="submenu__list">
												<li class="submenu__item"><a href="#" class="submenu__link _icon-arrow">Hair transplant</a>
													<ul class="submenu__list">
														<li class="submenu__item submenu__heading"><a href="#" class="submenu__link _icon-arrow">Resources</a></li>
														<li class="submenu__item"><a href="#" class="submenu__link _icon-arrow">Hair transplant</a></li>
														<li class="submenu__item"><a href="#" class="submenu__link _icon-arrow">Beard transplant </a></li>
														<li class="submenu__item"><a href="#" class="submenu__link _icon-arrow">Forehead reduction surgery</a></li>
													</ul>
												</li>
												<li class="submenu__item"><a href="#" class="submenu__link _icon-arrow">Beard transplant </a></li>
												<li class="submenu__item"><a href="#" class="submenu__link _icon-arrow">Forehead reduction surgery</a></li>
											</ul>
										</div>
										<div class="submenu__line"></div>
									</div>
								</li>
								<li class="menu__item  has-children"><a href="#" class="menu__link">Dental Surgery</a>
									<div class="menu__submenu submenu">
										<div class="submenu__wrap">
											<div class="submenu__title">Hair Surgery 2</div>
											<ul class="submenu__list">
												<li class="submenu__item"><a href="#" class="submenu__link _icon-arrow">Dental Surgery</a>
													<ul class="submenu__list">
														<li class="submenu__item submenu__heading"><a href="#" class="submenu__link _icon-arrow">Resources</a></li>
														<li class="submenu__item"><a href="#" class="submenu__link _icon-arrow">Hair transplant</a></li>
														<li class="submenu__item"><a href="#" class="submenu__link _icon-arrow">Beard transplant </a></li>
														<li class="submenu__item"><a href="#" class="submenu__link _icon-arrow">Forehead reduction surgery</a></li>
													</ul>
												</li>
												<li class="submenu__item"><a href="#" class="submenu__link _icon-arrow">Beard transplant </a></li>
												<li class="submenu__item"><a href="#" class="submenu__link _icon-arrow">Forehead reduction surgery</a></li>
											</ul>
										</div>
										<div class="submenu__line"></div>
									</div>
								</li>
								<li class="menu__item"><a href="#" class="menu__link">Plastic surgery</a></li>
								<li class="menu__item"><a href="#" class="menu__link">Treatment Guides</a></li>
								<li class="menu__item"><a href="#" class="menu__link">Meet the Surgeons</a></li>
							</ul>
						</nav> -->
					</div>

					<div class="header__button"><a href="<?php echo get_field('heade_button', 'option')['url']; ?>"><?php echo get_field('heade_button', 'option')['title']; ?></a></div>
				</div>

			</div>
		</header>
