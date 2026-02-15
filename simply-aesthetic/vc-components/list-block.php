<?php

if ( ! class_exists( 'VcListBlock' ) ) {
 
    class VcListBlock extends WPBakeryShortCode {
 
        //Initialize Component
        function __construct() {
            add_action( 'init', array( $this, 'create_shortcode' ), 999 );           
            add_shortcode( 'vc_list_block', array( $this, 'render_shortcode' ) );
        }       
 
        //Map Component
        public function create_shortcode() {
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
				return;
			}       

			// Map blockquote with vc_map()
			vc_map( array(
				'name'          => __('List with Icon Block', 'simplyaesthetic'),
				'base'          => 'vc_list_block',
				'description'   => __( '', 'simplyaesthetic' ),
				'category'      => __( 'SA Modules', 'simplyaesthetic'),               
				'params'        => array( 
	
					array(
					  "type" => "attach_image",
					  "class" => "",
					  "heading" => __( "Icon", "simplyaesthetic" ),
					  "param_name" => "icon_img",
					  "value" => '',
					  "description" => __( "Min. 100x100", "simplyaesthetic" )
					),
					
					array(
					  "type" => "textfield",
					  "class" => "",
					  "heading" => __( "List text", "simplyaesthetic" ),
					  "param_name" => "list_text",
					  "value" => '', 
					  "description" => __( "Enter text.", "simplyaesthetic" )
					)
					
				),
			));            

		}
 
        //Render Component
        public function render_shortcode( $atts, $content, $tag ) {
			$atts = (shortcode_atts(array(
				'icon_img'    => '',
				'list_text'      => '',
			), $atts));
			
			$img_url = wp_get_attachment_image_src( $atts['icon_img'], 'thumbnail', false );	
			
			$output = '';
			$output .= '<div class="clinic_doctor_row">';
			
			$output .= '<div class="clinic_doctor_photo">';
			$output .= '<img src="'. $img_url[0] .'" />';
			$output .= '</div>';
			
			$output .= '<div class="clinic_doctor_info">';
			$output .= '<div class="clinic_doctor_name">'.esc_html($atts["list_text"]).'</div>';
			$output .= '</div>';
			
			$output .= '</div>';
			return $output;                 
		}
    }
 
    new VcListBlock();
 
}