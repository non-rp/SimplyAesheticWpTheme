<?php

get_header(); ?>

<main class="page">

<?php  $main = get_field('main'); 
if ($main) {  ?>
<section class="main">
    <div class="main__column">
        <h2 class="main__title _anim-items _anim-no-hide"><?php echo $main['title']; ?></h2>
        <?php if (isset($main['description'])) { ?>

        <div class="main__desc _anim-items _anim-no-hide">
            <p>
            <?php echo $main['description']; ?>
            </p>
        </div>

        <?php } ?>

        <div class="main__buttons">
            <?php if ($main['button_blue']['title']) { ?> <a href="<?php echo $main['button_blue']['url'];?>"  <?php echo $target = $main['button_blue']['target'] ? 'target="_blank"' : '' ; ?> class="main__button button --action _anim-items _anim-no-hide"><span><?php echo $main['button_blue']['title']; ?></span></a> <?php } ?>
            <?php if ($main['button_transparent']['title']) { ?> <a href="<?php echo $main['button_transparent']['url']; ?>" <?php echo $target = $main['button_transparent']['target'] ? 'target="_blank"' : '' ; ?> class="main__button button --light _anim-items _anim-no-hide"><span><?php echo $main['button_transparent']['title']; ?></span></a> <?php } ?>
            
        </div>
    </div>
    <div class="main__column">
        <img src="<?php echo $main['image']; ?>" alt="">
    </div>
</section>
<?php } ?>

<?php  $devider = get_field('devider'); 
if ($devider) {  ?>
<section class="devider">
    <h2 class="devider__title heading _anim-items _anim-no-hide"><?php echo $devider['title'] ?></h2>
    <div class="devider__desc descripton _anim-items _anim-no-hide">
        <p>
        <?php echo $devider['subtitle'] ?>            
        </p>
    </div>
</section>
<?php } ?>

<?php  $benefits = get_field('benefits'); 
if ($benefits) {  ?>
<section class="benefits">
    <div class="benefits__column"><img src="<?php echo $benefits['image']; ?>" alt=""></div>
    <div class="benefits__column">
        <div class="benefits__title"><?php echo $benefits['title']; ?> Benefits of Hair Transplants </div>
        <?php $list = $benefits['list'];
         if ($list) { ?>
        <ul class="benefits__list  _anim-items _anim-no-hide">
            <?php 
            foreach ($list as $item) { ?>
             <li class="benefits__item _icon-check"> <?php echo $item['item'] ?></li>
            <?php } ?>
        </ul>
        <?php } ?>
    </div>
</section>
<?php } ?>

<?php  $meets = get_field('meets'); 
if ($meets) {  ?>
<section class="meets">
    <h2 class="meets__heading primary-title _anim-items _anim-no-hide"><?php echo $meets['title'] ?> </h2>
        <?php if ($meets['button']['title']) { ?> <a href="<?php echo $meets['button']['url']; ?>" <?php echo $target = $meets['button']['target'] ? 'target="_blank"' : '' ; ?> class="meets__button button --action _anim-items _anim-no-hide"><span><?php echo $meets['button']['title']; ?></span></a> <?php } ?>
    
</section>
<?php } ?>

<?php  $services = get_field('services'); 
if ($services['items']) {  ?>
<section class="services">
    <div class="services__wrap">
    <?php foreach ($services['items'] as $item) { ?>
        <div class="services__column">
            <div class="services__item">
                <a href="<?php echo $item['link'] ?>"><img src="<?php echo $item['image'] ?>" alt=""></a>
                <a href="<?php echo $item['link'] ?>">
                    <h3 class="services__title"><?php echo $item['title'] ?></h3>
                </a>
                <div class="services__desc">
                    <p>
                    <?php echo $item['description'] ?>
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<?php } ?>

<?php  $appointment = get_field('appointment'); 
if ($appointment) {  ?>
<section class="appointment">
    <h2 class="appointment__heading primary-title _anim-items _anim-no-hide"><?php echo $appointment['title']; ?> </h2>
    <?php if ($appointment['button']['title']) {?> <a href="<?php echo $appointment['button']['url'] ?>" target="<?php echo $appointment['button']['target'] ?>" class="appointment__button button --action _anim-items _anim-no-hide"><span><?php echo $appointment['button']['title'] ?></span></a> <? } ?>
    <img src="<?php echo $appointment['bacground_image']; ?>" alt="" class="appointment__bg">
</section>
<?php } ?>


<?php  $reviews = get_field('reviews'); 
if ($reviews) {  ?>
<section class="reviews">
    <h2 class="reviews__title heading-2 _anim-items _anim-no-hide"><?php echo $reviews['title']; ?> </h2>
    <div class="reviews__subtitle subtitle _anim-items _anim-no-hide"><?php echo $reviews['subtitle']; ?> </div>

    <?php if ($reviews['reviews_items']) { ?>
    <div class="reviews__wrap">
        <?php foreach($reviews['reviews_items'] as $item) { ?>
        <div class="reviews__item">
            <p><?php echo $item['review']; ?></p>
            <div class="reviews__person _icon-rating"><?php echo $item['person']; ?> </div>
            <div class="reviews__location"><?php echo $item['location']; ?> </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</section>
<?php } ?>

<?php  $treatment = get_field('treatment'); 
if ($treatment) {  ?>
<section class="treatments">
    <h2 class="treatments__heading heading-2 _anim-items _anim-no-hide"><?php echo $treatment['title'] ?></h2>
    <div class="treatments__subtitle subtitle _anim-items _anim-no-hide"><?php echo $treatment['subtitle'] ?> </div>
    <?php if ($treatment['slider']) { ?>
    <div class="treatments__container">
        <div class="treatments__slider swiper">
            <div class="treatments__wrapper swiper-wrapper">
                <?php foreach ($treatment['slider'] as $slide) { ?>
                <div class="treatments__slide swiper-slide">
                    <a href="<?php echo $slide['link'] ?>"><img src="<?php echo $slide['image'] ?>" alt=""></a>
                    <div class="treatments__title"><a href="<?php echo $slide['link'] ?>"><?php echo $slide['title'] ?></a></div>
                    <div class="treatments__desc"><?php echo $slide['description'] ?> </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <button type="button" class="swiper-button-prev _icon-arrow-2"></button>
        <button type="button" class="swiper-button-next _icon-arrow-2"></button>
        <div class="swiper-pagination"></div>
    </div>
    <?php } ?>
</section>
<?php } ?>

<?php  $questions = get_field('questions'); 
if ($questions) {  ?>
<section class="asked">
    <h2 class="asked__heading heading-2 _anim-items _anim-no-hide"><?php echo $questions['title']; ?> </h2>
    <?php if ($questions['question']) { ?>
    <div data-spollers class="spollers _anim-items _anim-no-hide">
        <?php foreach ($questions['question'] as $item) { ?>
        <div class="asked__item spollers__item">
            <button type="button" data-spoller class="spollers__title"><?php echo $item['heading']; ?> </button>
            <div class="spollers__body">
                <p><?php echo $item['content']; ?> </p>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</section>
<?php } ?>

<?php  $devider_2 = get_field('devider_2'); 
if ($devider_2) {  ?>
<section class="meets">
    <h2 class="meets__heading primary-title _anim-items _anim-no-hide"><?php echo  $devider_2['title']; ?> </h2>
    <div class="meets__buttons">
        <?php if (isset($devider_2['button_blue']['title'])) { ?> <a href="<?php echo $devider_2['button_blue']['url'] ?>" class="meets__button button --action _anim-items _anim-no-hide" target="<?php echo $devider_2['button_blue']['target'] ?>"><span><?php echo $devider_2['button_blue']['title'] ?> </span></a> <?php } ?>
        <?php if (isset($devider_2['button_transparent']['title'])) { ?> <a href="<?php echo $devider_2['button_transparent']['url'] ?>" class="meets__button button --light _anim-items _anim-no-hide" target="<?php echo $devider_2['button_transparent']['target'] ?>"><span><?php echo $devider_2['button_transparent']['title'] ?> </span></a> <?php } ?>
    </div>
</section>
<?php } ?>

</main>


<?php  get_footer();