<?php

if ( ! class_exists( 'VcContactBlock' ) ) {
 
    class VcContactBlock extends WPBakeryShortCode {
 
        //Initialize Component
        function __construct() {
            add_action( 'init', array( $this, 'create_shortcode' ), 999 );           
            add_shortcode( 'vc_contact_block', array( $this, 'render_shortcode' ) );
        }       
 
        //Map Component
        public function create_shortcode() {
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
				return;
			}       

			// Map blockquote with vc_map()
			vc_map( array(
				'name'          => __('Contact Form Block', 'simplyaesthetic'),
				'base'          => 'vc_contact_block',
				'description'   => __( '', 'simplyaesthetic' ),
				'category'      => __( 'SA Modules', 'simplyaesthetic'),               
				'params'        => array( 
	

					array(
						'type'          => 'textfield',
						'heading'       => __( 'Subtitle', 'simplyaesthetic' ),
						'param_name'    => 'form_subtitle',
						'value'         => __( '', 'simplyaesthetic' ),
						'description'   => __( '', 'simplyaesthetic' ),
					),
					
					array(
						'type'          => 'textfield',
						'heading'       => __( 'Title', 'simplyaesthetic' ),
						'param_name'    => 'form_title',
						'value'         => __( '', 'simplyaesthetic' ),
						'description'   => __( '', 'simplyaesthetic' ),
					),
					
					array(
						'type'          => 'textarea_raw_html',
						'heading'       => __( 'Form Shortcode', 'simplyaesthetic' ),
						'param_name'    => 'form_shortcode',
						'value'         => __( '', 'simplyaesthetic' ),
						'description'   => __( '', 'simplyaesthetic' ),
					),
					
				),
			));            

		}
 
        //Render Component
        public function render_shortcode( $atts, $content, $tag ) {
			$atts = (shortcode_atts(array(
				'form_subtitle'    => '',
				'form_title'      => '',
				'form_shortcode'       => '',
			), $atts));
			
			$fixed_shortcode = urldecode(base64_decode($atts["form_shortcode"]));
			
			$img_url = wp_get_attachment_image_src( $atts['author_img'], 'thumbnail', false );

			$output = '';
			$output .= '<div class="contact-form-block">';
			
			$output .= '<div class="contact-form-subtitle">'.esc_html($atts["form_subtitle"]).'</div>';
			$output .= '<div class="contact-form-title">'.esc_html($atts["form_title"]).'</div>';

			$output .= '<div class="author-bio">'. do_shortcode($fixed_shortcode) .'</div>';
			
			$output .= '</div>';
			return $output;                 
		}
    }
 
    new VcContactBlock();
 
}