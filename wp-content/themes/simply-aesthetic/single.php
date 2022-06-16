<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Simply_Aesthetic
 */

get_header();
?>

	<main class="single-tmp">
			<section class="page-head">
				<?php $main = get_field('main'); ?>
				<div class="page-head__img"><img src="<?php echo $main['background'] ?>" alt=""></div>
				<h1 class="page-head__title"><img src="<?php echo $main['icon'] ?>" alt=""><?php echo $main['page_title'] ?></h1>
			</section>
			<nav class="breadcrumb">
				<ul class="breadcrumb__body">
					<li class="breadcrumb__item"><a href="" class="breadcrumb_link">Home</a></li>
					<li class="breadcrumb__item"><a href="" class="breadcrumb_link">Hair Surgery</a></li>
					<li class="breadcrumb__item"><a href="" class="breadcrumb_link">Transplant Surgery in Turkey</a></li>
				</ul>
			</nav>
			<div class="single-tmp__wrapper">

				<section class="sidebar">
					<?php 
					if (have_rows('sidebar')) { 
						while (have_rows('sidebar')) { the_row();

							
							if (get_row_layout() == 'categories_list') {
								get_template_part('template-parts/singular-acf-parts/sidebar-parts/section', 'categories-list');
						 	}
							


							if (get_row_layout() == 'block_button') {
								get_template_part('template-parts/singular-acf-parts/sidebar-parts/section', 'button');
							}
							
						}
					} ?>
				</section>


				<article class="content">
					<?php
					if (have_rows('content')) { 
							while (have_rows('content')) { the_row();					


								if (get_row_layout() == 'block_quote') {
									get_template_part('template-parts/singular-acf-parts/content-parts/section', 'quote');
								}

								if (get_row_layout() == 'block_quote_button') {
									get_template_part('template-parts/singular-acf-parts/content-parts/section', 'quote-2');
								}

								if (get_row_layout() == 'block_text_nunito') {
									get_template_part('template-parts/singular-acf-parts/content-parts/section', 'desc-1');
								}

								if (get_row_layout() == 'block_text_marcellus') {
									get_template_part('template-parts/singular-acf-parts/content-parts/section', 'desc-2');
								}

								if (get_row_layout() == 'block_image') {
									get_template_part('template-parts/singular-acf-parts/content-parts/section', 'image');
								}
								
								if (get_row_layout() == 'block_links') {
									get_template_part('template-parts/singular-acf-parts/content-parts/section', 'links');
								}

								if (get_row_layout() == 'numbered_list') {
									get_template_part('template-parts/singular-acf-parts/content-parts/section', 'numbered-list');
								}

								if (get_row_layout() == 'block_image_and_list') {
									get_template_part('template-parts/singular-acf-parts/content-parts/section', 'img-and-list');
								}

								if (get_row_layout() == 'block_about') {
									get_template_part('template-parts/singular-acf-parts/content-parts/section', 'about'); 
								}

								if (get_row_layout() == 'block_form') {
									get_template_part('template-parts/singular-acf-parts/content-parts/section', 'form'); 
								}

								if (get_row_layout() == 'block_author') {
									get_template_part('template-parts/singular-acf-parts/content-parts/section', 'form'); 
								}
							}
						} ?>	

					<section class="article-footer">
						<div class="article-footer__info">
							<div class="article-footer__image">
								<img src="http://2259842.plastikb.web.hosting-test.net/wp-content/uploads/2022/06/photo-1438761681033-6461ffad8d80.jpg" alt="">
							</div>
							<div class="article-footer__author">
								<div class="article-footer__position">author</div>
								<div class="article-footer__name">Wilhemina Smith</div>
								<div class="article-footer__desc">Just about to go home from my hair transplant at clinicians in Turkey. So happy with my results, and so happy with the people who work here. They do a lot for you and are so friendly. Would definitely recommend them to anyone who is thinking Of coming.</div>
							</div>
						</div>
						<div class="article-footer__share">
							<div class="article-footer__subtitle">like this article?</div>
							<h3 class="article-footer__title">Be sure to like and share this article with friends!</h3>

							<div class="article-footer__socials">
								<a href="" class="_icon-facebook-logo"></a>
								<a href="" class="_icon-instagram"></a>
								<a href="" class="_icon-twitter"></a>
								<a href="" class="_icon-linkedin"></a>
							</div>
						</div>
						<div class="article-footer__return"><a href="" class="_icon-arrow">Return to article listing page</a></div>
					</section>

				</article>
			</div>

			<div class="single-tmp__bottom">
				<h3 class="swiper__title">Related Hair Treatment Guides</h3>
				<div class="swiper__subtitle">Simply Aesthetic specializes in medical tourism, and is an official booking partner for some of the leading aesthetic surgeries in Turkey.</div>
				<div class="single-tmp__slider swiper">
					<div class="single-tmp-slider__wrapper swiper-wrapper">
						<div class="single-tmp__slide swiper-slide">
							<img src="http://2259842.plastikb.web.hosting-test.net/wp-content/uploads/2022/05/Rectangle-Copy-14.png" alt="">
							<div class="swiper-slide__cntent">
								<div class="swiper-slide__heading">Hair Transplant </div>
								<div class="swiper-slide__desc">Simply Aesthetic specializes in medical tourism, and is an official booking partner.</div>
							</div>
						</div>

						<div class="single-tmp__slide swiper-slide">
							<img src="http://2259842.plastikb.web.hosting-test.net/wp-content/uploads/2022/05/Rectangle-Copy-14.png" alt="">
							<div class="swiper-slide__cntent">
								<div class="swiper-slide__heading">Hair Transplant </div>
								<div class="swiper-slide__desc">Simply Aesthetic specializes in medical tourism, and is an official booking partner.</div>
							</div>
						</div>

						<div class="single-tmp__slide swiper-slide">
							<img src="http://2259842.plastikb.web.hosting-test.net/wp-content/uploads/2022/05/Rectangle-Copy-14.png" alt="">
							<div class="swiper-slide__cntent">
								<div class="swiper-slide__heading">Hair Transplant </div>
								<div class="swiper-slide__desc">Simply Aesthetic specializes in medical tourism, and is an official booking partner.</div>
							</div>
						</div>
					</div>

				</div>
				<button type="button" class="single-tmp_swiper-button-prev _icon-arrow-2"></button>
				<button type="button" class="single-tmp_swiper-button-next _icon-arrow-2"></button>
			</div>

		</main>

<?php
get_footer();
