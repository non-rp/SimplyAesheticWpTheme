<?php
get_header(); ?>

<?php $doc_cat = get_the_terms(get_the_ID(), 'category'); ?>

<main class="single-doctors">

<section class="single-doctors__head">
    <div class="single-doctors__container">

        <a href="<?php echo get_post_type_archive_link('surgeons'); ?>" class="single-doctors__back _icon-arrow-2">Return to surgeon listing</a>
        
    </div>
</section>

<section class="about-doctor">
    <div class="about-doctor__container">
         
    <div class="about-doctor__column two-third">

		<div class="about-doctor-infobox">
			<div class="about-doctor-infobox-image">
				<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'clinic-square'); ?>" alt="">
			</div>
			<div class="about-doctor-infobox-meta">
				<h1 class="about-doctor_title"><?php the_title(); ?></h1>
				<div class="about-doctor_category">
					<?php echo $doc_cat[0]->name; ?>
				</div>
				<div class="about-doctor_langugage">
					<?php echo get_field('languages'); ?>
				</div>
			</div>
			<div class="about-doctor-infobox-cta">
				<div class="exp_box">
					<?php echo get_field('experience_lvl'); ?>
				</div>
			</div>
		</div>
		
		<div class="about-doctor__content">
			<h2>Biography</h2>
            <?php the_content(); ?>
        </div>
		
		<section class="asked mobile-hide">
			<div data-spollers="" class="spollers _anim-items _anim-no-hide _spoller-init _active">

				<?php if ( get_field('publications')[0] ) { ?>
				<div class="asked__item spollers__item">
					<button type="button" data-spoller="" class="spollers__title">Publications</button>
					<div class="spollers__body" hidden="">
						<p><?php echo get_field('publications'); ?></p>
					</div>
				</div>
				<?php } ?>
				
				<?php if ( get_field('conf_and_sems')[0] ) { ?>
				<div class="asked__item spollers__item">
					<button type="button" data-spoller="" class="spollers__title">Conferences and Seminars</button>
					<div class="spollers__body" hidden="">
						<p><?php echo get_field('conf_and_sems'); ?></p>
					</div>
				</div>
				<?php } ?>
				
				<?php if ( get_field('honors')[0] ) { ?>
				<div class="asked__item spollers__item">
					<button type="button" data-spoller="" class="spollers__title">Honors</button>
					<div class="spollers__body" hidden="">
						<p><?php echo get_field('honors'); ?></p>
					</div>
				</div>
				<?php } ?>
				
			</div>
    	</section>
		
    </div>
		
    <div class="about-doctor__column one-third">
		
		<?php if ( !empty($doc_cat[0]->name) ) { ?>
		<section class="sidebar-list">
			<div class="sidebar-list_container">
				<h4 class=" _anim-items _anim-no-hide">Specialisation</h4>
				<ul class="sidebar-list__list _anim-items _anim-no-hide bubled">
					<?php 
						foreach ( $doc_cat as $item ) { ?>
							 <li class=""><span><?php echo $item->name ?></span>  </li>
						<?php }
					?>
				</ul>
			</div>
		</section>
		<?php } ?>
		
		<?php if ( get_field('education')[0] ) { ?>
		<section class="sidebar-list">
			<div class="sidebar-list_container">
				<h4 class=" _anim-items _anim-no-hide">Education</h4>
				<ul class="sidebar-list__list _anim-items _anim-no-hide">
					<?php 
						foreach ( get_field('education') as $item ) { ?>
							 <li class=""><span><?php echo $item['item'] ?></span>  </li>
						<?php }
					?>
				</ul>
			</div>
		</section>
		<?php } ?>
		
		<?php if ( get_field('experience')[0] ) { ?>
		<section class="sidebar-list">
			<div class="sidebar-list_container">
				<h4 class=" _anim-items _anim-no-hide">Experience</h4>
				<ul class="sidebar-list__list _anim-items _anim-no-hide">
					<?php 
						foreach ( get_field('experience') as $item ) { ?>
							 <li class=""><span><?php echo $item['item'] ?></span>  </li>
						<?php }
					?>
				</ul>
			</div>
		</section>
		<?php } ?>
		
		<?php if ( get_field('memberships')[0] ) { ?>
		<section class="sidebar-list">
			<div class="sidebar-list_container">
				<h4 class=" _anim-items _anim-no-hide">Memberships</h4>
				<ul class="sidebar-list__list _anim-items _anim-no-hide">
					<?php 
						foreach ( get_field('memberships') as $item ) { ?>
							 <li class=""><span><?php echo $item['item'] ?></span>  </li>
						<?php }
					?>
				</ul>
			</div>
		</section>
		<?php } ?>
		
		<?php if ( get_field('courses')[0] ) { ?>
		<section class="sidebar-list">
			<div class="sidebar-list_container">
				<h4 class=" _anim-items _anim-no-hide">Courses</h4>
				<ul class="sidebar-list__list _anim-items _anim-no-hide">
					<?php 
						foreach ( get_field('courses') as $item ) { ?>
							 <li class=""><span><?php echo $item['item'] ?></span>  </li>
						<?php }
					?>
				</ul>
			</div>
		</section>
		<?php } ?>

    </div>
		
	<div class="about-doctor__column two-third">
		
		<section class="asked mobile-show">
			<div data-spollers="" class="spollers _anim-items _anim-no-hide _spoller-init _active">

				<?php if ( get_field('publications')[0] ) { ?>
				<div class="asked__item spollers__item">
					<button type="button" data-spoller="" class="spollers__title">Publications</button>
					<div class="spollers__body" hidden="">
						<p><?php echo get_field('publications'); ?></p>
					</div>
				</div>
				<?php } ?>
				
				<?php if ( get_field('conf_and_sems')[0] ) { ?>
				<div class="asked__item spollers__item">
					<button type="button" data-spoller="" class="spollers__title">Conferences and Seminars</button>
					<div class="spollers__body" hidden="">
						<p><?php echo get_field('conf_and_sems'); ?></p>
					</div>
				</div>
				<?php } ?>
				
				<?php if ( get_field('honors')[0] ) { ?>
				<div class="asked__item spollers__item">
					<button type="button" data-spoller="" class="spollers__title">Honors</button>
					<div class="spollers__body" hidden="">
						<p><?php echo get_field('honors'); ?></p>
					</div>
				</div>
				<?php } ?>
				
			</div>
    	</section>	
	</div>
		
    </div>
</section>


<?php if(get_field('guides')[0]) { ?>
<section class="asked">
    <h2 class="asked__heading heading-2 _anim-items _anim-no-hide"><?php the_field('title_guides'); ?></h2>
    <div data-spollers class="spollers _anim-items _anim-no-hide">
        <?php 
            foreach(get_field('guides') as $item) { ?>
            <div class="asked__item spollers__item">
            <button type="button" data-spoller class="spollers__title"><?php echo $item['guide'] ?></button>
            <div class="spollers__body"><p><?php echo $item['description'] ?> </p></div>
        </div>
           <?php }
        ?>
    </div>
</section>
<?php } ?>
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