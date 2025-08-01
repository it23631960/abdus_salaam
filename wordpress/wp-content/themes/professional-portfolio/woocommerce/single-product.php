<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<?php
 $professional_portfolio_woocommerce_single_product_page_sidebar = get_theme_mod( 'professional_portfolio_woocommerce_single_product_page_sidebar' );
 if ( false == $professional_portfolio_woocommerce_single_product_page_sidebar ) {
   $professional_portfolio_colmd = 'col-lg-12 col-md-12';
 } else { 
   $professional_portfolio_colmd = 'col-lg-8 col-md-8';
 } 
?>

<div class="container">
	<main id="maincontent" class="middle-align pt-5" role="main">
		<div class="row m-0 single-product">
			<?php if(get_theme_mod('professional_portfolio_single_product_layout', 'Right Sidebar') == 'Right Sidebar'){ ?>
				<div class="<?php echo esc_attr( $professional_portfolio_colmd ); ?>">
					<?php
						/**
						 * woocommerce_before_main_content hook.
						 *
						 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
						 * @hooked woocommerce_breadcrumb - 20
						 */
						do_action( 'woocommerce_before_main_content' );
					?>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php wc_get_template_part( 'content', 'single-product' ); ?>

						<?php endwhile; // end of the loop. ?>

					<?php
						/**
						 * woocommerce_after_main_content hook.
						 *
						 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
						 */
						do_action( 'woocommerce_after_main_content' );
					?>
				</div>
			<?php if ( false != $professional_portfolio_woocommerce_single_product_page_sidebar ) {?>
				<div id="sidebar" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('woocommerce-single-sidebar'); ?>
				</div>
			<?php }?>
			<?php } elseif(get_theme_mod('professional_portfolio_single_product_layout', 'Right Sidebar') == 'Left Sidebar') {?>
			<?php if ( false != $professional_portfolio_woocommerce_single_product_page_sidebar ) {?>
				<div id="sidebar" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('woocommerce-single-sidebar'); ?>
				</div>
			<?php }?>
			<div class="<?php echo esc_attr( $professional_portfolio_colmd ); ?>">
					<?php
						/**
						 * woocommerce_before_main_content hook.
						 *
						 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
						 * @hooked woocommerce_breadcrumb - 20
						 */
						do_action( 'woocommerce_before_main_content' );
					?>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php wc_get_template_part( 'content', 'single-product' ); ?>

						<?php endwhile; // end of the loop. ?>

					<?php
						/**
						 * woocommerce_after_main_content hook.
						 *
						 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
						 */
						do_action( 'woocommerce_after_main_content' );
					?>
				</div>
			<?php }?>
		</div>
	</main>
</div>

<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */