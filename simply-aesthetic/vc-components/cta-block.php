<?php

if ( ! class_exists( 'VcCtaBlock' ) ) {
 
    class VcCtaBlock extends WPBakeryShortCode {
 
        //Initialize Component
        function __construct() {
            add_action( 'init', array( $this, 'create_shortcode' ), 999 );           
            add_shortcode( 'vc_cta_block', array( $this, 'render_shortcode' ) );
        }       
 
        //Map Component
        public function create_shortcode() {
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
				return;
			}       

			// Map blockquote with vc_map()
			vc_map( array(
				'name'          => __('CTA Block', 'simplyaesthetic'),
				'base'          => 'vc_cta_block',
				'description'   => __( '', 'simplyaesthetic' ),
				'category'      => __( 'SA Modules', 'simplyaesthetic'),               
				'params'        => array( 
	
					array(
					  "type" => "attach_image",
					  "class" => "",
					  "heading" => __( "Icon", "simplyaesthetic" ),
					  "param_name" => "le_icone",
					  "value" => '',
					  "description" => __( "150x150", "simplyaesthetic" )
					),

					array(
						'type'          => 'textfield',
						'heading'       => __( 'Above Title', 'simplyaesthetic' ),
						'param_name'    => 'above_title',
						'value'         => __( '', 'simplyaesthetic' ),
						'description'   => __( '', 'simplyaesthetic' ),
					),
					
					array(
						'type'          => 'textfield',
						'heading'       => __( 'Title', 'simplyaesthetic' ),
						'param_name'    => 'the_title',
						'value'         => __( '', 'simplyaesthetic' ),
						'description'   => __( '', 'simplyaesthetic' ),
					),
					
					array(
						'type'          => 'textfield',
						'heading'       => __( 'Subtitle', 'simplyaesthetic' ),
						'param_name'    => 'subtitle',
						'value'         => __( '', 'simplyaesthetic' ),
						'description'   => __( '', 'simplyaesthetic' ),
					),
					
					array(
						'type'          => 'textfield',
						'heading'       => __( 'Price', 'simplyaesthetic' ),
						'param_name'    => 'price',
						'value'         => __( '', 'simplyaesthetic' ),
						'description'   => __( '', 'simplyaesthetic' ),
					),
         
				),
			));            

		}
 
        //Render Component
        public function render_shortcode( $atts, $content, $tag ) {
			$atts = (shortcode_atts(array(
				'above_title'    => '',
				'the_title'      => '',
				'subtitle'       => '',
				'price'          => '',
				'le_icone'          => '',
			), $atts));
			
			$img_url = wp_get_attachment_image_src( $atts['le_icone'], 'full', false );

			$output = '';
			$output .= '<div class="cta-block">';
			
			$output .= '<div class="cta-block-image">';
			$output .= '<div class="le-imagen"><img src="'. $img_url[0] .'" /></div>';
			$output .= '</div>';
			
			$output .= '<div class="cta-block-content">';
			$output .= '<div class="above-title">'.esc_html($atts["above_title"]).'</div>';
			$output .= '<div class="the-title">'.esc_html($atts["the_title"]).'</div>';
			$output .= '<div class="le-subtitle">'.esc_html($atts["subtitle"]).'</div>';
			$output .= '</div>';
			
			$output .= '<div class="cta-block-price">';
			$output .= '<div class="starting">From</div>';
			$output .= '<div class="price-big">&pound;'.esc_html($atts["price"]).'</div>';
			$output .= '</div>';
			
			$output .= '</div>';
			return $output;                 
		}
    }
 
    new VcCtaBlock();
 
}