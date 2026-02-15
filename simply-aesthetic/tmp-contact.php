<?php
/*
Template Name: Contacts
Template Post Type: page
*/


get_header();
?>

<main class="contact">

<section class="contact__map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.3672021421976!2d-0.10924318422938753!3d51.524824479637914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa81fe834f75c039b%3A0x7d87be3d0dbb3dc9!2sSimply%20Aesthetic!5e0!3m2!1sen!2slt!4v1673882145872!5m2!1sen!2slt" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<div class="contact__container">
    <div class="contact__info">
        <h5 class="contact__title"><?php the_field('title_info'); ?></h5>
        
        <div>
        <?php the_field('adress'); ?></div>
    </div>

    <div class="contact__forms">
        <h5 class="contact__title"><?php the_field('title_form'); ?></h5>

        <?php echo do_shortcode(get_field('contact_form_7_shortcode')); ?>
    </div>
</div>


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