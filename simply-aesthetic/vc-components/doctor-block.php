<?php

if ( ! class_exists( 'VcDoctorBlock' ) ) {
 
    class VcDoctorBlock extends WPBakeryShortCode {
 
        //Initialize Component
        function __construct() {
            add_action( 'init', array( $this, 'create_shortcode' ), 999 );           
            add_shortcode( 'vc_doctor_block', array( $this, 'render_shortcode' ) );
        }       
 
        //Map Component
        public function create_shortcode() {
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
				return;
			}       

			// Map blockquote with vc_map()
			vc_map( array(
				'name'          => __('Doctor Block', 'simplyaesthetic'),
				'base'          => 'vc_doctor_block',
				'description'   => __( '', 'simplyaesthetic' ),
				'category'      => __( 'SA Modules', 'simplyaesthetic'),               
				'params'        => array( 
	
					array(
					  "type" => "attach_image",
					  "class" => "",
					  "heading" => __( "Doctor Photo", "simplyaesthetic" ),
					  "param_name" => "doctor_img",
					  "value" => '',
					  "description" => __( "Min. 150x150", "simplyaesthetic" )
					),

					array(
						'type'          => 'textfield',
						'heading'       => __( 'Doctor Name', 'simplyaesthetic' ),
						'param_name'    => 'doctor_name',
						'value'         => __( '', 'simplyaesthetic' ),
						'description'   => __( '', 'simplyaesthetic' ),
					),
					
					array(
					  "type" => "textfield",
					  "class" => "",
					  "heading" => __( "Doctor Title", "simplyaesthetic" ),
					  "param_name" => "doctor_title",
					  "value" => '', 
					  "description" => __( "Enter title.", "simplyaesthetic" )
					)
					
				),
			));            

		}
 
        //Render Component
        public function render_shortcode( $atts, $content, $tag ) {
			$atts = (shortcode_atts(array(
				'doctor_img'    => '',
				'doctor_name'      => '',
				'doctor_title'       => '',
			), $atts));
			
			$img_url = wp_get_attachment_image_src( $atts['doctor_img'], 'thumbnail', false );	
			
			$output = '';
			$output .= '<div class="clinic_doctor_row">';
			
			$output .= '<div class="clinic_doctor_photo">';
			$output .= '<img src="'. $img_url[0] .'" />';
			$output .= '</div>';
			
			$output .= '<div class="clinic_doctor_info">';
			$output .= '<div class="clinic_doctor_name">'.esc_html($atts["doctor_name"]).'</div>';
			$output .= '<div class="clinic_doctor_type">'.esc_html($atts["doctor_title"]).'</div>';
			$output .= '</div>';
			
			$output .= '<div class="clinic_doctor_enquire"><a href="/contact" class="meets__button button --action _anim-items _anim-no-hide _active">enquire now</a></div><div style="clear: both;"></div>';
			
			$output .= '</div>';
			return $output;                 
		}
    }
 
    new VcDoctorBlock();
 
}