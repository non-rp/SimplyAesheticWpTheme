<?php

if ( ! class_exists( 'VcAuthorBlock' ) ) {
 
    class VcAuthorBlock extends WPBakeryShortCode {
 
        //Initialize Component
        function __construct() {
            add_action( 'init', array( $this, 'create_shortcode' ), 999 );           
            add_shortcode( 'vc_author_block', array( $this, 'render_shortcode' ) );
        }       
 
        //Map Component
        public function create_shortcode() {
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
				return;
			}       

			// Map blockquote with vc_map()
			vc_map( array(
				'name'          => __('Author Block', 'simplyaesthetic'),
				'base'          => 'vc_author_block',
				'description'   => __( '', 'simplyaesthetic' ),
				'category'      => __( 'SA Modules', 'simplyaesthetic'),               
				'params'        => array( 
	
					array(
					  "type" => "attach_image",
					  "class" => "",
					  "heading" => __( "Author Photo", "simplyaesthetic" ),
					  "param_name" => "author_img",
					  "value" => '',
					  "description" => __( "Min. 190x190", "simplyaesthetic" )
					),

					array(
						'type'          => 'textfield',
						'heading'       => __( 'Author Name', 'simplyaesthetic' ),
						'param_name'    => 'author_name',
						'value'         => __( '', 'simplyaesthetic' ),
						'description'   => __( '', 'simplyaesthetic' ),
					),
					
					array(
					  "type" => "textarea_html",
					  "class" => "",
					  "heading" => __( "Author Bio", "simplyaesthetic" ),
					  "param_name" => "authors_bio",
					  "value" => '', 
					  "description" => __( "Enter description.", "simplyaesthetic" )
					)
					
				),
			));            

		}
 
        //Render Component
        public function render_shortcode( $atts, $content, $tag ) {
			$atts = (shortcode_atts(array(
				'author_img'    => '',
				'author_name'      => '',
				'authors_bio'       => '',
			), $atts));
			
			$img_url = wp_get_attachment_image_src( $atts['author_img'], 'thumbnail', false );

			$output = '';
			$output .= '<div class="author-block">';
			
			$output .= '<div class="author-block-image">';
			$output .= '<div class="author-imagen"><img src="'. $img_url[0] .'" /></div>';
			$output .= '</div>';
			
			$output .= '<div class="author-block-content">';
			$output .= '<div class="author-title">Author</div>';
			$output .= '<div class="author-name">'.esc_html($atts["author_name"]).'</div>';
			$output .= '<div class="author-bio">'.esc_html($atts["authors_bio"]).'</div>';
			$output .= '</div>';
			
			$output .= '</div>';
			return $output;                 
		}
    }
 
    new VcAuthorBlock();
 
}