<?php
/**
 * @package Professional Portfolio 
 * Setup the WordPress core custom header feature.
 *
 * @uses professional_portfolio_header_style()
*/
function professional_portfolio_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'professional_portfolio_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 70,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'professional_portfolio_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'professional_portfolio_custom_header_setup' );

if ( ! function_exists( 'professional_portfolio_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see professional_portfolio_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'professional_portfolio_header_style' );

function professional_portfolio_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .home-page-header, .page-template .home-page-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		    background-size: cover;
		}";
	   	wp_add_inline_style( 'professional-portfolio-basic-style', $custom_css );
	endif;
}
endif;