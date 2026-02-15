<?php
/*
Template Name: Article Page
Template Post Type: page
*/


get_header();
?>

	<main class="single-tmp">
			<section class="page-head">
				<?php $main = get_field('main'); ?>
                <?php if ($main['background']) { ?>
                    <div class="page-head__img"><img src="<?php echo $main['background'] ?>" alt=""></div>
                <?php } ?>
				
				<?php if ($main['page_title']) { ?>
                    <span class="page-head__title"><img src="<?php echo $main['icon'] ?>" alt=""><?php echo $main['page_title'] ?></span>
                <?php } ?>
			</section>
			<nav class="breadcrumb">
				<ul class="breadcrumb__body">
					<?php get_breadcrumb(); ?>
				</ul>
			</nav>
		
			<div class="single-tmp__wrapper <?php if ( !have_rows('sidebar') ) { echo "no-sidebar-widgets"; } ?>">

				<?php if ( have_rows('sidebar') ) { ?>
				
				<section class="sidebar">
					
					<?php
						while (have_rows('sidebar')) { the_row();

							
							if (get_row_layout() == 'categories_list') {
								get_template_part('template-parts/singular-acf-parts/sidebar-parts/section', 'categories-list');
						 	}

							if (get_row_layout() == 'block_button') {
								get_template_part('template-parts/singular-acf-parts/sidebar-parts/section', 'button');
							}
							
						} 
					?>	
				</section>
				
				<?php } ?>
				


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
														  
								if (get_row_layout() == 'block_4_boxes') {
									get_template_part('template-parts/singular-acf-parts/content-parts/section', 'four-boxes'); 
								}
														  
								if (get_row_layout() == 'block_tabs') {
									get_template_part('template-parts/singular-acf-parts/content-parts/section', 'tabs'); 
								}
							}
						} ?>	

					<section class="article-footer">
						
						<?php the_content(); ?>
						
						<?php if ( is_page( array( 65, 106, 80, 74, 72, 70 ) ) ) { ?>
						<div class="article-footer__info">
							<div class="article-footer__image">
								<img src="/wp-content/uploads/2024/01/Tarek-Tantawy-Author-Bio.jpg" alt="">
							</div>
							<div class="article-footer__author">
								<div class="article-footer__position">author</div>
								<div class="article-footer__name">Dr. Tarek T. Himida</div>
								<div class="article-footer__desc"><p dir="ltr"><a href="https://www.linkedin.com/in/tarek-himida-787023135/">Dr. Tarek T. Himida</a> is a 2014 MSA University, School of Dentistry graduate, and was awarded a Master degree of Dental Public Health (MDPH) from <a href="https://www.dundee.ac.uk/people/tarek-himida">University of Dundee</a> in 2017. With over 10 years of experience, he is an accomplished clinician, <a href="https://www.researchgate.net/profile/Tarek-Himida">published academic researcher</a> and internationally-recognised dental <a href="https://pubmed.ncbi.nlm.nih.gov/?term=Himida+T&amp;cauthor_id=30461132">education expert</a>. Dr. Himida is the Head of the Planning Committee for the AGD PACE-approved program, <a href="https://theorg.com/org/3sixty/org-chart/tarek-himida">3Sixty Academy</a>. He serves as an Alumni Ambassador at the University of Dundee and is a member of the Health Services Research Unit (DHSRU) and Oral Health &amp; Health Research (OHHR) program at Dundee Dental School.</p></div>
							</div>
						</div>
						<?php } ?>
						
						<!--
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
						
						<div class="article-footer__return"><a href="" class="_icon-arrow">Return to article listing page</a></div>-->
					</section>

				</article>
			</div>

			<!--
			<div class="single-tmp__bottom">
				<?php $slider_group = get_field('slider_bottom'); ?>
				<h3 class="swiper__title"><?php echo $slider_group['title'] ?></h3>
				<div class="swiper__subtitle"><?php echo $slider_group['subtitle'] ?></div>
				<div class="single-tmp__slider swiper">
					
					<div class="single-tmp-slider__wrapper swiper-wrapper">
						<?php $slider = $slider_group['slides'];
							foreach ($slider as $slide) {

						 ?>
						<div class="single-tmp__slide swiper-slide">
						<a href="<?php echo $slider_group['link'] ?>"><img src="<?php echo $slide['img'] ?>" alt=""></a>
							<div class="swiper-slide__cntent">
								<div class="swiper-slide__heading"><a href="<?php echo $slider_group['link'] ?>"><?php echo $slide['title'] ?></a></div>
								<div class="swiper-slide__desc"><a href="<?php echo $slider_group['link'] ?>"><?php echo $slide['description'] ?></a></div>
							</div>
						</div>
					<?php } ?>
						
					</div>
					
				</div>
				<button type="button" class="single-tmp_swiper-button-prev _icon-arrow-2"></button>
				<button type="button" class="single-tmp_swiper-button-next _icon-arrow-2"></button>
			</div>
			-->
		
		</main>

<?php
get_footer();


