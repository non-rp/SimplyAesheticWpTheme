<?php

if ( ! class_exists( 'VcClinicBlock' ) ) {
 
    class VcClinicBlock extends WPBakeryShortCode {
 
        //Initialize Component
        function __construct() {
            add_action( 'init', array( $this, 'create_shortcode' ), 999 );           
            add_shortcode( 'vc_clinic_block', array( $this, 'render_shortcode' ) );
        }       
 
        //Map Component
        public function create_shortcode() {
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
				return;
			}       

			// Map blockquote with vc_map()
			vc_map( array(
				'name'          => __('Clinic Slider', 'simplyaesthetic'),
				'base'          => 'vc_clinic_block',
				'description'   => __( '', 'simplyaesthetic' ),
				'category'      => __( 'SA Modules', 'simplyaesthetic'),               
				'params'        => array( 
					
					array(
						'type'          => 'textfield',
						'heading'       => __( 'Title', 'simplyaesthetic' ),
						'param_name'    => 'clinic_title',
						'value'         => __( '', 'simplyaesthetic' ),
						'description'   => __( '', 'simplyaesthetic' ),
					),
	
					array(
						'type'          => 'textfield',
						'heading'       => __( 'Clinic IDs', 'simplyaesthetic' ),
						'param_name'    => 'clinic_ids',
						'value'         => __( '', 'simplyaesthetic' ),
						'description'   => __( 'Comma separated. Example: 1144,1231,6442', 'simplyaesthetic' ),
					),
				),
			));            

		}
 
        //Render Component
        public function render_shortcode( $atts, $content, $tag ) {
			global $post;
			
			$atts = (shortcode_atts(array(
				'clinic_ids'    => '',
				'clinic_title'  => 'Top Clinics for Breast Reduction in Turkey',
			), $atts));
			
			$uniq_ID = md5($atts["clinic_ids"]);	
			
			$clinic_IDs = explode( ",", $atts["clinic_ids"] );
			
			$output = '';
			$output .= '<div class="bandf-slider_over">';
			
			$output .= '<h3>'.$atts["clinic_title"].'</h3>';
			
			$output .= '<div class="bandf-slider id_'.$uniq_ID.'">';
			$output .= '<div class="swiper-wrapper">';

			$my_query = new WP_Query( array(
			   'post_type' => 'clinic',
			   'post__in' => $clinic_IDs,
		    ));

		    if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
			
				$img_url = wp_get_attachment_image_src( get_the_ID(), 'clinic-square', false );
			
				$output .= '<div class="swiper-slide bandf-slide clinic-slider">';
				$output .= '<div class="clinic-slider-image"><a href="' . get_permalink() . '">' .get_the_post_thumbnail( get_the_ID(), 'clinic-square' ) . '</a></div>';
				
				$output .= '<div class="clinic-slider-content">';
				$output .= "<h3><a href='" . get_permalink() . "'>" . get_the_title() . "</a></h3>";
				$output .= '<div class="clinic__city">'. get_field('city_country') . '</div>';
				$output .= '<div class="clinic__excerpt">'. implode(' ', array_slice( explode(' ', get_the_excerpt() ), 0, 42) ) . '</div>';
				
				$output .= '<div class="clinic__startingfrom"><span>From</span> &pound;'. get_field('starting_price') . '</div>';
			
				$output .= '<a href="'.get_permalink().'" class="meets__button button --action _anim-items _anim-no-hide _active">Get A FREE Quote <span class="oliver-queen _icon-arrow-2"></span></a>';				
			
				$output .= '</div>';
			
				$output .= '</div>';					

		    endwhile; 
		    wp_reset_postdata();
		    endif;
			
			$output .= '</div>';
			$output .= '<div class="swiper-naviis">';
			$output .= '<div class="swiper-button-prev"></div>';
			$output .= '<div class="swiper-pagination"></div>';
			$output .= '<div class="swiper-button-next-wrapper"><div class="swiper-button-next"></div></div>';
			$output .= '</div>';
			
			$output .= '</div>';
			$output .= '</div>';
			
			$output .= '<script>
				window.addEventListener("load", (function (e) {
						if (document.querySelector(".id_'.$uniq_ID.'")) new Swiper(".id_'.$uniq_ID.'", {
							loop: true,
							autoplay: {
							    delay: 7000,
							},
							pagination: {
								el: ".swiper-pagination",
								clickable: true,
							},
							navigation: {
								nextEl: ".swiper-button-next",
								prevEl: ".swiper-button-prev",
							},
						});			
				}));</script>';
			
			return $output;                 
		}
    }
 
    new VcClinicBlock();
 
}