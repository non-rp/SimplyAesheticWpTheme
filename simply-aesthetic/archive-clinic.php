<?php
get_header(); ?>

        <main class="archive-clinic">


            <section class="clinic">
				<div class="clinic__contain">
					<section class="content__quote">
						<div class="block-quote__title"><h1>Our Trusted Clinics</h1></div>
					</section>
				</div>
				
                <div class="clinic__container">
					
					<div class="bakery-subheading">
						<h4>
							Discover our collection of the top 5 clinics in Turkey, where our clinics and are renowned for their expertise in cosmetic and dental surgery
						</h4>
					</div>
					
                <?php 
                    $loop = new WP_Query( array(
                        'post_type' => 'clinic',
                        'posts_per_page' => -1
                      )
                    ); ?>
                    
                    <?php while ( $loop->have_posts() ) : 
                        $loop->the_post(); ?>
                    
                        <div class="clinic__item">
                            <div class="clinic__img">
								<a href="<?php echo get_permalink(get_the_ID()); ?>">
									<div style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'clinic-medium'); ?>);" class="clinic_image_cover"></div>
									<!--<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'clinic-medium'); ?>" alt="">-->
								</a>
								
								<div class="clinic__premium"></div>
							</div>
							
							<div class="clinic__data">
								<h3 class="clinic__name"><a href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></h3>
								
								<div class="clinic__city"><?php echo get_field('city_country'); ?></div>
								
								<div class="clinic__boxes">
									<div class="clinic__quadbox">
										<?php echo get_field('founder_year'); ?><br /><span>Founded</span>
									</div>
									<!--<div class="clinic__quadbox">
										<?php echo get_field('doctors_total'); ?><br /><span>Doctors</span>
									</div> -->
									<div class="clinic__quadbox">
										<?php echo get_field('beds_total'); ?><br /><span>Beds</span>
									</div>
									<!--
									<div class="clinic__quadbox">
										<?php echo get_field('patients_total'); ?><br /><span>Patients</span>
									</div>
									-->
									<div style="clear: both;"></div>
								</div>
								
								<div class="clinic__excerpt"><?php the_excerpt(); ?></div>
								<!--
								<div class="clinic__startingfrom"><span>From</span> &pound;<?php echo get_field('starting_price'); ?></div>
								-->
								<a href="/contact/" class="meets__button button --action _anim-items _anim-no-hide _active">Get A FREE Quote <span class="oliver-queen _icon-arrow-2"></span></a>
							</div>
							
							<div style="clear:both;"></div>
                        </div>
                    
                    <?php endwhile; wp_reset_query(); ?>
                </div>
                
            </section>

            <section class="meets">
				<h2 class="meets__heading primary-title _anim-items _anim-no-hide">See what makes 
					Simply Aesthetic different </h2>
				<div class="meets__buttons">
					<a href="https://simplyaesthetic.co.uk/pricing/" class="meets__button button --action _anim-items _anim-no-hide">Our Pricing</a>
					<a href="https://simplyaesthetic.co.uk/contact/" class="meets__button button --light _anim-items _anim-no-hide">Book an appointment</a>
				</div>

			</section>

        </main>


<?php
get_footer();