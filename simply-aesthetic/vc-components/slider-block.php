<?php

if ( ! class_exists( 'VcImageSlider' ) ) {
 
    class VcImageSlider extends WPBakeryShortCode {
 
        //Initialize Component
        function __construct() {
            add_action( 'init', array( $this, 'create_shortcode' ), 999 );           
            add_shortcode( 'vc_swiperslider_block', array( $this, 'render_shortcode' ) );
        }       
 
        //Map Component
        public function create_shortcode() {
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
				return;
			}       

			// Map blockquote with vc_map()
			vc_map( array(
				'name'          => __('Swiper Slider', 'simplyaesthetic'),
				'base'          => 'vc_swiperslider_block',
				'description'   => __( '', 'simplyaesthetic' ),
				'category'      => __( 'SA Modules', 'simplyaesthetic'),               
				'params'        => array( 
	
					array(
					  "type" => "attach_images",
					  "class" => "",
					  "heading" => __( "Slider Photos", "simplyaesthetic" ),
					  "param_name" => "swiper_images",
					  "value" => '',
					  "description" => __( "", "simplyaesthetic" )
					)
				),
			));            

		}
 
        //Render Component
        public function render_shortcode( $atts, $content, $tag ) {
			$atts = (shortcode_atts(array(
				'swiper_images'    => ''
			), $atts));
			
			$uniq_ID = md5($atts["swiper_images"]);	
			
			$slider_image_IDs = explode( ",", $atts["swiper_images"] );
			
			$output = '';
			$output .= '<div class="bandf-slider id_'.$uniq_ID.'">';
			$output .= '<div class="swiper-wrapper">';
				
			foreach ( $slider_image_IDs as $single_slider_img ) {
				$img_url = wp_get_attachment_image_src( $single_slider_img, 'landing-slide', false );
				$output .= '<div class="swiper-slide bandf-slide"><img src="' . $img_url[0] . '" /></div>';
			}
			
			$output .= '</div>';
			$output .= '<div class="swiper-naviis">';
			$output .= '<div class="swiper-button-prev"></div>';
			//$output .= '<div class="swiper-pagination"></div>';
			$output .= '<div class="swiper-button-next"></div>';
			$output .= '</div>';
			
			$output .= '</div>';
			
			$output .= '<script>
				window.addEventListener("load", (function (e) {
						if (document.querySelector(".id_'.$uniq_ID.'")) new Swiper(".id_'.$uniq_ID.'", {
							loop: true,
							initialSlide: 3,
							navigation: {
								nextEl: ".swiper-button-next",
								prevEl: ".swiper-button-prev",
							},
							breakpoints: {
							200: {
							  slidesPerView: 1.2,
							  spaceBetween: 20,
							  centeredSlides: false,
							},
							768: {
							  slidesPerView: 4.2,
							  spaceBetween: 30,
							  centeredSlides: true,
							}
						    }
						});			
				}));</script>';
			
			return $output;                 
		}
    }
 
    new VcImageSlider();
 
}