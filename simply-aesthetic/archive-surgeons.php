<?php
get_header(); ?>

        <main class="archive-doctors">
           <!-- <div class="single-tmp">
            <section class="page-head">
                <div class="page-head__img"><img src="http://simplyaesthetic.co.uk/wp-content/uploads/2022/07/h4.png" alt=""></div>
                <span class="page-head__title"><img src="http://simplyaesthetic.co.uk/wp-content/uploads/2022/06/plastic-1.svg" alt="">Meet the Surgeons</span>
            </section>
            </div>-->
			
			


            <section class="doctors">
				<div class="surges__container">
					<section class="content__quote block-quote">
						<div class="block-quote__title"><h1>Meet the Surgeons</h1></div>
					</section>
				</div>
                <div class="doctors__container">
				
				

                <?php 
                    $loop = new WP_Query( array(
                        'post_type' => 'surgeons',
                        'posts_per_page' => -1
                      )
                    ); ?>
                    
                    <?php while ( $loop->have_posts() ) : 
                        $loop->the_post(); ?>
                    
                        <div class="doctors__item">
                            <div class="doctors__img"><a href="<?php echo get_permalink(get_the_ID()); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt=""></a></div>
                            <h5 class="doctors__name"><a href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></h5>
                            <p><?php 
                                $doc_cat = get_the_terms(get_the_ID(), 'category');
                                    echo $doc_cat[0]->name;
                            ?></p>
                            <a href="<?php echo get_permalink(get_the_ID()); ?>" class="doctors__btn _icon-arrow">View profile</a>
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