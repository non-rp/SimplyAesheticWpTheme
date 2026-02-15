<?php
get_header(); ?>

<main class="single-doctors">

	<section class="single-doctors__head">
		<div class="single-doctors__container">
			<div class="single-doctors__name">
				<span class="single-clinic-title"><?php the_title(); ?></span>
				<span class="single-clinic-city"><?php echo get_field('city_country'); ?></span>
			</div>
			<a href="<?php echo get_post_type_archive_link('clinic'); ?>" class="single-doctors__back _icon-arrow">Back to listing Page</a>

		</div>
	</section>

	<section class="about-clinic-single">
		<div class="about-clinic__container">	
			<div class="about-clinic__featured">
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), "clinic-featured"); ?>" alt="">
				<div class="clinic__premium"></div>
			</div>
			
			<div class="about-clinic__mobile-navbar mobile-show">
				<a class="clinic-mobile-menu" href="javascript: void(0);">Menu <span class="oliver-queen2 _icon-arrow-2"></span></a>
			</div>
			
			<div class="about-clinic__navbar">
				<a class="overview active" href="javascript: void(0);">Overview</a>
				<!--
				<a class="clinicdoctors" href="javascript: void(0);">Doctors</a>
				<a class="creds" href="javascript: void(0);">Credentials and Awards</a>
				<a class="servicesprices" href="javascript: void(0);">Services and Prices</a>
				<a class="banda" href="javascript: void(0);">Before and After</a>
				<a class="location" href="javascript: void(0);">Location</a>-->
			</div>

			<div class="about-clinic__main overview-main">
				<div class="clinic-clinic__overview">Overview</div>
				
				<h1 class="clinic-clinic__name"><?php the_title(); ?></h1>
				
				<div class="clinic__boxes">
									<div class="clinic__quadbox">
										<?php echo get_field('founder_year'); ?><br /><span>Founded</span>
									</div>
					<!--
									<div class="clinic__quadbox">
										<?php echo get_field('doctors_total'); ?><br /><span>Doctors</span>
									</div>
-->
									<div class="clinic__quadbox">
										<?php echo get_field('beds_total'); ?><br /><span>Beds</span>
									</div>
					<!--
									<div class="clinic__quadbox">
										<?php echo get_field('patients_total'); ?><br /><span>Patients</span>
									</div>-->
									
									<div style="clear: both;"></div>
				</div>
				
				<div class="about-clinic__content">
					<?php the_content(); ?>
				</div>
			</div>
			
			<div class="about-clinic__main doctors-main" style="display: none;">
				<div class="clinic-clinic__overview">Doctors</div>
				
				<h1 class="clinic-clinic__name">Doctors in <?php the_title(); ?></h1>
				
				<div class="about-clinic__content">
					<?php foreach( get_field('doctors') as $single_doctor) { ?>
						<div class="clinic_doctor_row">
							<div class="clinic_doctor_photo">
								<?php echo wp_get_attachment_image( $single_doctor['doctor_photo'], 'medium' ); ?>
							</div>
							<div class="clinic_doctor_info">
								<div class="clinic_doctor_name"><?php echo $single_doctor['doctor_name'] ?></div>
								<div class="clinic_doctor_type"><?php echo $single_doctor['doctor_type'] ?></div>
							</div>
							
							<div class="clinic_doctor_enquire">
								<a href="<?php echo $single_doctor['doctor_url'] ?>" class="meets__button button --action _anim-items _anim-no-hide _active">enquire now</a>
							</div>
							
							<div style="clear: both;"></div>
						</div>
					<?php } ?>
				</div>
			</div>
			
			<div class="about-clinic__main credentials-main" style="display: none;">
				<div class="clinic-clinic__overview">Credentials and Awards</div>
				
				<h1 class="clinic-clinic__name">Hospital Accreditations of Quality</h1>
				
				
				<div class="about-clinic__content">
					<?php foreach( get_field('credentials_awards') as $single_cred) { ?>
						<div class="clinic_doctor_row">
							<div class="clinic_doctor_photo cred_photo">
								<?php echo wp_get_attachment_image( $single_cred['cred_photo'], 'medium' ); ?>
							</div>
							<div class="clinic_doctor_info cred_info">
								<div class="clinic_doctor_name cred_name"><?php echo $single_cred['cred_name'] ?></div>
								<div class="clinic_doctor_type cred_type"><?php echo $single_cred['cred_type'] ?></div>
							</div>
							
							<div style="clear: both;"></div>
						</div>
					<?php } ?>
				</div>
				
			</div>
			
			<div class="about-clinic__main services-main" style="display: none;">
				<div class="clinic-clinic__overview">Services and Prices</div>
				
				<?php foreach( get_field('services') as $single_service) { ?>
				<h1 class="clinic-clinic__name"><?php echo $single_service['service_title']; ?></h1>
				
				<div class="about-clinic__content content">
					<table>
						<thead>
							<tr>
								<th>Package Details</th>
								<th>Cost (GBP)</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach( $single_service['packages'] as $single_package) { ?>
							<tr>
								<td><?php echo $single_package['package_title'] ?></td>
								<td><?php echo $single_package['package_price'] ?></td>
							</tr>
							<?php } ?>	
						</tbody>
					</table>
				</div>
				<?php } ?>
			</div>
			
			<div class="about-clinic__main doctors-bandf" style="display: none;">
				<div class="clinic-clinic__overview">Before and After</div>
				
				<h1 class="clinic-clinic__name">Before and After</h1>
				
				<div class="about-clinic__content">
					
					<?php foreach( get_field('before_and_after') as $single_bnf) { ?>
						<div class="clinic_banda_row">
							<div class="clinic_before">
								<?php echo wp_get_attachment_image( $single_bnf['before_image'], 'clinic-square' ); ?>
								BEFORE
							</div>
							<div class="clinic_after">
								<?php echo wp_get_attachment_image( $single_bnf['after_image'], 'clinic-square' ); ?>
								AFTER
							</div>
						</div>
					<?php } ?>
					
				</div>
			</div>
			
			<div class="about-clinic__main location-main" style="display: none;">
				<div class="clinic-clinic__overview">Location</div>
				
				<h1 class="clinic-clinic__name">Location</h1>
				
				
				<div class="about-clinic__content">
					<?php echo get_field('location'); ?>
				</div>
				
			</div>
			
			<div class="about-clinic__sidebar">
				<div class="side_title"><?php the_title(); ?></div>
				<div class="side_city"><?php echo get_field('city_country'); ?></div>
				<div class="side_address"><?php echo get_field('full_address'); ?></div>	
				<!--<div class="side_price"><div class="clinic__startingfrom"><span>From</span> &pound;<?php echo get_field('starting_price'); ?></div></div>-->
				<div class="side_buybtn"><a href="/contact/" class="meets__button button --action _anim-items _anim-no-hide _active">Get A FREE Quote</a></div>
			</div>
			
			<div style="clear: both;"></div>
		</div>
	</section>	
	
	<script>
		jQuery(document).ready( function () {
			jQuery(".clinic-mobile-menu").click(function () { 
				if (jQuery(".about-clinic__navbar").css("display") == "none") {
					jQuery(this).addClass("openclinicmenu");
					jQuery(".about-clinic__navbar").slideDown();
				} else {
					jQuery(this).removeClass("openclinicmenu");
					jQuery(".about-clinic__navbar").slideUp();
				}
				
			});
			
			jQuery(".about-clinic__navbar a").click(function () {
				if ( jQuery(this).hasClass("overview")) {
					jQuery(".about-clinic__main").css("display", "none");
					jQuery(".about-clinic__navbar a").removeClass("active");
					jQuery(this).addClass("active");
					jQuery(".about-clinic__main.overview-main").fadeIn();
				}
				if ( jQuery(this).hasClass("clinicdoctors")) {
					jQuery(".about-clinic__main").css("display", "none");
					jQuery(".about-clinic__navbar a").removeClass("active");
					jQuery(this).addClass("active");
					jQuery(".about-clinic__main.doctors-main").fadeIn();
				}
				if ( jQuery(this).hasClass("creds")) {
					jQuery(".about-clinic__main").css("display", "none");
					jQuery(".about-clinic__navbar a").removeClass("active");
					jQuery(this).addClass("active");
					jQuery(".about-clinic__main.credentials-main").fadeIn();
				}
				if ( jQuery(this).hasClass("servicesprices")) {
					jQuery(".about-clinic__main").css("display", "none");
					jQuery(".about-clinic__navbar a").removeClass("active");
					jQuery(this).addClass("active");
					jQuery(".about-clinic__main.services-main").fadeIn();
				}
				if ( jQuery(this).hasClass("banda")) {
					jQuery(".about-clinic__main").css("display", "none");
					jQuery(".about-clinic__navbar a").removeClass("active");
					jQuery(this).addClass("active");
					jQuery(".about-clinic__main.doctors-bandf").fadeIn();
				}
				if ( jQuery(this).hasClass("location")) {
					jQuery(".about-clinic__main").css("display", "none");
					jQuery(".about-clinic__navbar a").removeClass("active");
					jQuery(this).addClass("active");
					jQuery(".about-clinic__main.location-main").fadeIn();
				}
			});
		});
	</script>

	<section class="meets">
		<h2 class="meets__heading primary-title _anim-items _anim-no-hide">See what makes 
			Simply Aesthetic different </h2>
		<div class="meets__buttons">
			<a href="https://simplyaesthetic.co.uk/pricing/" class="meets__button button --action _anim-items _anim-no-hide">Our Pricing</a>
			<a href="https://simplyaesthetic.co.uk/contact/" class="meets__button button --light _anim-items _anim-no-hide">Book an appointment</a>
		</div>
	</section>

	<?php echo get_field('schema_code'); ?>
	
</main>

<?php
get_footer();