<?php

	$professional_portfolio_custom_css= "";

	$professional_portfolio_first_color = get_theme_mod('professional_portfolio_first_color');

	if($professional_portfolio_first_color != false){
		$professional_portfolio_custom_css .='#sidebar .wp-block-tag-cloud a:hover, #footer, .custom-about-us a.custom_read_more, #footer .wp-block-tag-cloud a:hover, table.compare-list .add-to-cart td a:not(.unstyled_button), .serach_outer i, .top-header, #sidebar .wp-block-search .wp-block-search__button:hover, #case-studies .section-title, #case-studies .feature-box:hover, #case-studies .feature-box .post-list p:before, #case-studies .feature-box .wp-block-list li:before, .more-btn a , #comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, .page-template-custom-home-page .topbar i.fas.fa-phone.me-2:hover, .topbar i.fas.fa-phone.me-2:hover,.post-nav-links span:hover, .post-nav-links a:hover, #comments input[type="submit"]:hover, #comments a.comment-reply-link:hover, .more-btn a:hover, #comments a.comment-reply-link:hover,.pagination a:hover,#footer .tagcloud a:hover, .pro-button a:hover, #preloader, #footer-2, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .copyright .custom-social-icons i:hover, .bradcrumbs a, .post-categories li a, .bradcrumbs a:hover, .post-categories li a:hover, .bradcrumbs span, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, #sidebar .custom-social-icons a, #sidebar .custom-social-icons a:hover, #footer .custom-social-icons a:hover, #sidebar h3:before,#sidebar .widget_block h3:before, #sidebar h2:before, #sidebar label.wp-block-search__label:before, #sidebar .tagcloud a:hover, .pagination span, .pagination a, .post-nav-links span, .post-nav-links a, .pagination a:hover, .pagination .current, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li, nav.woocommerce-MyAccount-navigation ul li:hover, .woocommerce ul.products li.product .button, .woocommerce a.added_to_cart.wc-forward,a.added_to_cart.wc-forward, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart:hover, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart, header.woocommerce-Address-title.title a, #tag-cloud-sec .tag-cloud-link, .wp-block-button__link{';
			$professional_portfolio_custom_css .='background: '.esc_attr($professional_portfolio_first_color).';';
		$professional_portfolio_custom_css .='}';
	}

	if($professional_portfolio_first_color != false){
		$professional_portfolio_custom_css .='a.added_to_cart.wc-forward:hover,header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover, #sidebar ul li::before, .wc-block-grid__product-onsale, .wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button, .wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover, .wc-block-components-totals-coupon__button:hover, .wp-block-woocommerce-cart .wc-block-components-product-badge, .wc-block-components-order-summary-item__quantity, header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover, .toggle-nav i, .toggle-nav i{';
			$professional_portfolio_custom_css .='background: '.esc_attr($professional_portfolio_first_color).'!important;';
		$professional_portfolio_custom_css .='}';
	}

	if($professional_portfolio_first_color != false){
		$professional_portfolio_custom_css .='a, a:hover, .sticky .post-main-box h2:before, .menu-bar-sec i, .page-template-custom-home-page .home-page-header .main-navigation a:hover, .main-navigation .current_page_item a, .main-navigation a:hover, #banner .banner-content .banner-text, .page-template-custom-home-page .home-page-header .main-navigation .current_page_item a, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .grid-post-main-box:hover h2 a, .grid-post-main-box:hover .post-info span a, #footer .custom-social-icons a:hover, #sidebar ul li:hover, .woocommerce-error::before, .post-navigation span.meta-nav:hover, .woocommerce-message::before,.woocommerce-info::before, .wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote{';
			$professional_portfolio_custom_css .='color: '.esc_attr($professional_portfolio_first_color).';';
		$professional_portfolio_custom_css .='}';
	}

	if($professional_portfolio_first_color != false){
		$professional_portfolio_custom_css .='.tags-bg a:hover, .main-navigation a:hover{';
			$professional_portfolio_custom_css .='color: '.esc_attr($professional_portfolio_first_color).'!important;';
		$professional_portfolio_custom_css .='}';
	}

	if($professional_portfolio_first_color != false){
		$professional_portfolio_custom_css .='#case-studies .feature-box .post-btn a, .post-main-box, .grid-post-main-box, #sidebar .widget{';
			$professional_portfolio_custom_css .='border-color: '.esc_attr($professional_portfolio_first_color).';';
		$professional_portfolio_custom_css .='}';
	}

	if($professional_portfolio_first_color != false){
		$professional_portfolio_custom_css .='#footer .custom-social-icons a:hover{';
			$professional_portfolio_custom_css .='outline: 6px double  '.esc_attr($professional_portfolio_first_color).';';
		$professional_portfolio_custom_css .='}';
	}

	if($professional_portfolio_first_color != false){
		$professional_portfolio_custom_css .='.header-fixed, .home-page-header, .main-navigation ul ul, .header-fixed, #sidebar .widget, .page-template-custom-home-page.admin-bar .home-page-header, .page-template-custom-home-page .home-page-header{';
			$professional_portfolio_custom_css .='border-bottom-color: '.esc_attr($professional_portfolio_first_color).';';
		$professional_portfolio_custom_css .='}';
	}

	if($professional_portfolio_first_color != false){
		$professional_portfolio_custom_css .='#case-studies .feature-box, .main-navigation ul ul, #sidebar .widget, .woocommerce-error, .woocommerce-message,.woocommerce-info{';
			$professional_portfolio_custom_css .='border-top-color: '.esc_attr($professional_portfolio_first_color).';';
		$professional_portfolio_custom_css .='}';
	}

	if($professional_portfolio_first_color != false){
		$professional_portfolio_custom_css .='#sidebar .widget, .wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote{';
			$professional_portfolio_custom_css .='border-left-color: '.esc_attr($professional_portfolio_first_color).';';
		$professional_portfolio_custom_css .='}';
	}

	if($professional_portfolio_first_color != false){
		$professional_portfolio_custom_css .='#sidebar .widget{';
			$professional_portfolio_custom_css .='border-right-color: '.esc_attr($professional_portfolio_first_color).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_custom_css .='}';

	/*---------------------------Width Layout -------------------*/

	$professional_portfolio_theme_lay = get_theme_mod( 'professional_portfolio_width_option','Full Width');
    if($professional_portfolio_theme_lay == 'Boxed'){
		$professional_portfolio_custom_css .='body{';
			$professional_portfolio_custom_css .='max-width: 1140px; width: 100%; margin-right: auto; margin-left: auto;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='.scrollup i{';
			$professional_portfolio_custom_css .='right: 100px;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='.row.outer-logo{';
			$professional_portfolio_custom_css .='margin-left: 0px;';
		$professional_portfolio_custom_css .='}';
	}else if($professional_portfolio_theme_lay == 'Wide Width'){
		$professional_portfolio_custom_css .='body{';
			$professional_portfolio_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='.scrollup i{';
			$professional_portfolio_custom_css .='right: 30px;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='.row.outer-logo{';
			$professional_portfolio_custom_css .='margin-left: 0px;';
		$professional_portfolio_custom_css .='}';
	}else if($professional_portfolio_theme_lay == 'Full Width'){
		$professional_portfolio_custom_css .='body{';
			$professional_portfolio_custom_css .='max-width: 100%;';
		$professional_portfolio_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$professional_portfolio_sticky_header_padding = get_theme_mod('professional_portfolio_sticky_header_padding');
	if($professional_portfolio_sticky_header_padding != false){
		$professional_portfolio_custom_css .='.header-fixed{';
			$professional_portfolio_custom_css .='padding: '.esc_attr($professional_portfolio_sticky_header_padding).';';
		$professional_portfolio_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$professional_portfolio_resp_stickyheader = get_theme_mod( 'professional_portfolio_stickyheader_hide_show',false);
	if($professional_portfolio_resp_stickyheader == true && get_theme_mod( 'professional_portfolio_sticky_header',false) != true){
    	$professional_portfolio_custom_css .='.header-fixed{';
			$professional_portfolio_custom_css .='position:static;';
		$professional_portfolio_custom_css .='} ';
	}
    if($professional_portfolio_resp_stickyheader == true){
    	$professional_portfolio_custom_css .='@media screen and (max-width:575px) {';
		$professional_portfolio_custom_css .='.header-fixed{';
			$professional_portfolio_custom_css .='position:fixed;';
		$professional_portfolio_custom_css .='} }';
	}else if($professional_portfolio_resp_stickyheader == false){
		$professional_portfolio_custom_css .='@media screen and (max-width:575px){';
		$professional_portfolio_custom_css .='.header-fixed{';
			$professional_portfolio_custom_css .='position:static;';
		$professional_portfolio_custom_css .='} }';
	}

	$professional_portfolio_resp_slider = get_theme_mod( 'professional_portfolio_resp_slider_hide_show',true);
	if($professional_portfolio_resp_slider == true && get_theme_mod( 'professional_portfolio_show_hide_banner', true) == false){
    	$professional_portfolio_custom_css .='#banner{';
			$professional_portfolio_custom_css .='display:none;';
		$professional_portfolio_custom_css .='} ';
	}
    if($professional_portfolio_resp_slider == true){
    	$professional_portfolio_custom_css .='@media screen and (max-width:575px) {';
		$professional_portfolio_custom_css .='#banner{';
			$professional_portfolio_custom_css .='display:block;';
		$professional_portfolio_custom_css .='} }';
	}else if($professional_portfolio_resp_slider == false){
		$professional_portfolio_custom_css .='@media screen and (max-width:575px) {';
		$professional_portfolio_custom_css .='#banner{';
			$professional_portfolio_custom_css .='display:none;';
		$professional_portfolio_custom_css .='} }';
		$professional_portfolio_custom_css .='@media screen and (max-width:575px){';
		$professional_portfolio_custom_css .='.page-template-custom-home-page .topbar-section{';
			$professional_portfolio_custom_css .='margin-top: 45px;';
		$professional_portfolio_custom_css .='} }';
	}

	$professional_portfolio_resp_sidebar = get_theme_mod( 'professional_portfolio_sidebar_hide_show',true);
    if($professional_portfolio_resp_sidebar == true){
    	$professional_portfolio_custom_css .='@media screen and (max-width:575px) {';
		$professional_portfolio_custom_css .='#sidebar{';
			$professional_portfolio_custom_css .='display:block;';
		$professional_portfolio_custom_css .='} }';
	}else if($professional_portfolio_resp_sidebar == false){
		$professional_portfolio_custom_css .='@media screen and (max-width:575px) {';
		$professional_portfolio_custom_css .='#sidebar{';
			$professional_portfolio_custom_css .='display:none;';
		$professional_portfolio_custom_css .='} }';
	}

	$professional_portfolio_responsive_preloader_hide = get_theme_mod('professional_portfolio_responsive_preloader_hide',false);
	if($professional_portfolio_responsive_preloader_hide == true && get_theme_mod('professional_portfolio_loader_enable',false) == false){
		$professional_portfolio_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$professional_portfolio_custom_css .='display:none !important;';
		$professional_portfolio_custom_css .='} }';
	}

	if($professional_portfolio_responsive_preloader_hide == false){
		$professional_portfolio_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$professional_portfolio_custom_css .='display:none !important;';
		$professional_portfolio_custom_css .='} }';
	}


	$professional_portfolio_resp_scroll_top = get_theme_mod( 'professional_portfolio_resp_scroll_top_hide_show',true);
	if($professional_portfolio_resp_scroll_top == true && get_theme_mod( 'professional_portfolio_hide_show_scroll',true) == false){
    	$professional_portfolio_custom_css .='.scrollup i{';
			$professional_portfolio_custom_css .='visibility:hidden !important;';
		$professional_portfolio_custom_css .='} ';
	}
    if($professional_portfolio_resp_scroll_top == true){
    	$professional_portfolio_custom_css .='@media screen and (max-width:575px) {';
		$professional_portfolio_custom_css .='.scrollup i{';
			$professional_portfolio_custom_css .='visibility:visible !important;';
		$professional_portfolio_custom_css .='} }';
	}else if($professional_portfolio_resp_scroll_top == false){
		$professional_portfolio_custom_css .='@media screen and (max-width:575px){';
		$professional_portfolio_custom_css .='.scrollup i{';
			$professional_portfolio_custom_css .='visibility:hidden !important;';
		$professional_portfolio_custom_css .='} }';
	}

	
	/*---------------------------Slider Height ------------*/

	$professional_portfolio_slider_height = get_theme_mod('professional_portfolio_slider_height');
	if($professional_portfolio_slider_height != false){
		$professional_portfolio_custom_css .='#slider img{';
			$professional_portfolio_custom_css .='height: '.esc_attr($professional_portfolio_slider_height).';';
		$professional_portfolio_custom_css .='}';
	}
	
	/*------------- Slider Content Padding Settings ------------------*/

	$professional_portfolio_slider_content_padding_top_bottom = get_theme_mod('professional_portfolio_slider_content_padding_top_bottom');
	$professional_portfolio_slider_content_padding_left_right = get_theme_mod('professional_portfolio_slider_content_padding_left_right');
	if($professional_portfolio_slider_content_padding_top_bottom != false || $professional_portfolio_slider_content_padding_left_right != false){
		$professional_portfolio_custom_css .='#slider .carousel-caption{';
			$professional_portfolio_custom_css .='top: '.esc_attr($professional_portfolio_slider_content_padding_top_bottom).'; bottom: '.esc_attr($professional_portfolio_slider_content_padding_top_bottom).';left: '.esc_attr($professional_portfolio_slider_content_padding_left_right).';right: '.esc_attr($professional_portfolio_slider_content_padding_left_right).';';
		$professional_portfolio_custom_css .='}';
	}

	// banner background img

	$professional_portfolio_banner_image = get_theme_mod('professional_portfolio_banner_image');
	if($professional_portfolio_banner_image != false){
		$professional_portfolio_custom_css .='#banner{';
			$professional_portfolio_custom_css .='background: url('.esc_attr($professional_portfolio_banner_image).')no-repeat; background-size: cover; height: 500px; background-position: 100% 100%; margin: 0 60px; border-radius:20px;';
		$professional_portfolio_custom_css .='}';
	}
	
	/*-------------- Copyright Alignment ----------------*/

	$professional_portfolio_align_footer_social_icon = get_theme_mod('professional_portfolio_align_footer_social_icon');
	if($professional_portfolio_align_footer_social_icon != false){
		$professional_portfolio_custom_css .='.copyright .widget{';
			$professional_portfolio_custom_css .='text-align: '.esc_attr($professional_portfolio_align_footer_social_icon).';';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='
		@media screen and (max-width:720px) {
			.copyright .widget{';
			$professional_portfolio_custom_css .='text-align: center;} }';
	}

	$professional_portfolio_copyright_alingment = get_theme_mod('professional_portfolio_copyright_alingment');
	if($professional_portfolio_copyright_alingment != false){
		$professional_portfolio_custom_css .='.copyright p{';
			$professional_portfolio_custom_css .='text-align: '.esc_attr($professional_portfolio_copyright_alingment).';';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='
		@media screen and (max-width:720px) {
			.copyright p{';
			$professional_portfolio_custom_css .='text-align: center;} }';
	}

	$professional_portfolio_footer_background_color = get_theme_mod('professional_portfolio_footer_background_color');
	if($professional_portfolio_footer_background_color != false){
		$professional_portfolio_custom_css .='#footer{';
			$professional_portfolio_custom_css .='background-color: '.esc_attr($professional_portfolio_footer_background_color).';';
		$professional_portfolio_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$professional_portfolio_preloader_bg_color = get_theme_mod('professional_portfolio_preloader_bg_color');
	if($professional_portfolio_preloader_bg_color != false){
		$professional_portfolio_custom_css .='#preloader{';
			$professional_portfolio_custom_css .='background-color: '.esc_attr($professional_portfolio_preloader_bg_color).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_preloader_border_color = get_theme_mod('professional_portfolio_preloader_border_color');
	if($professional_portfolio_preloader_border_color != false){
		$professional_portfolio_custom_css .='.loader-line{';
			$professional_portfolio_custom_css .='border-color: '.esc_attr($professional_portfolio_preloader_border_color).'!important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_preloader_bg_img = get_theme_mod('professional_portfolio_preloader_bg_img');
	if($professional_portfolio_preloader_bg_img != false){
		$professional_portfolio_custom_css .='#preloader{';
			$professional_portfolio_custom_css .='background: url('.esc_attr($professional_portfolio_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$professional_portfolio_custom_css .='}';
	}

	/*---------------------- Slider Image Overlay ------------------------*/

	$professional_portfolio_slider_image_overlay = get_theme_mod('professional_portfolio_slider_image_overlay', true);
	if($professional_portfolio_slider_image_overlay == false){
		$professional_portfolio_custom_css .='#slider img{';
			$professional_portfolio_custom_css .='opacity:1;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_slider_image_overlay_color = get_theme_mod('professional_portfolio_slider_image_overlay_color', true);
	if($professional_portfolio_slider_image_overlay_color != false){
		$professional_portfolio_custom_css .='#slider{';
			$professional_portfolio_custom_css .='background-color: '.esc_attr($professional_portfolio_slider_image_overlay_color).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_copyright_background_color = get_theme_mod('professional_portfolio_copyright_background_color');
	if($professional_portfolio_copyright_background_color != false){
		$professional_portfolio_custom_css .='#footer-2{';
			$professional_portfolio_custom_css .='background-color: '.esc_attr($professional_portfolio_copyright_background_color).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_footer_background_image = get_theme_mod('professional_portfolio_footer_background_image');
	if($professional_portfolio_footer_background_image != false){
		$professional_portfolio_custom_css .='#footer{';
			$professional_portfolio_custom_css .='background: url('.esc_attr($professional_portfolio_footer_background_image).')no-repeat;background-size:cover';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_theme_lay = get_theme_mod( 'professional_portfolio_img_footer','scroll');
	if($professional_portfolio_theme_lay == 'fixed'){
		$professional_portfolio_custom_css .='#footer{';
			$professional_portfolio_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$professional_portfolio_custom_css .='}';
	}elseif ($professional_portfolio_theme_lay == 'scroll'){
		$professional_portfolio_custom_css .='#footer{';
			$professional_portfolio_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_footer_img_position = get_theme_mod('professional_portfolio_footer_img_position','center center');
	if($professional_portfolio_footer_img_position != false){
		$professional_portfolio_custom_css .='#footer{';
			$professional_portfolio_custom_css .='background-position: '.esc_attr($professional_portfolio_footer_img_position).'!important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_footer_widgets_heading = get_theme_mod( 'professional_portfolio_footer_widgets_heading','Left');
    if($professional_portfolio_footer_widgets_heading == 'Left'){
		$professional_portfolio_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$professional_portfolio_custom_css .='text-align: left;';
		$professional_portfolio_custom_css .='}';
	}else if($professional_portfolio_footer_widgets_heading == 'Center'){
		$professional_portfolio_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$professional_portfolio_custom_css .='text-align: center;';
		$professional_portfolio_custom_css .='}';
	}else if($professional_portfolio_footer_widgets_heading == 'Right'){
		$professional_portfolio_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$professional_portfolio_custom_css .='text-align: right;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_footer_widgets_content = get_theme_mod( 'professional_portfolio_footer_widgets_content','Left');
    if($professional_portfolio_footer_widgets_content == 'Left'){
		$professional_portfolio_custom_css .='#footer .widget{';
		$professional_portfolio_custom_css .='text-align: left;';
		$professional_portfolio_custom_css .='}';
	}else if($professional_portfolio_footer_widgets_content == 'Center'){
		$professional_portfolio_custom_css .='#footer .widget{';
			$professional_portfolio_custom_css .='text-align: center;';
		$professional_portfolio_custom_css .='}';
	}else if($professional_portfolio_footer_widgets_content == 'Right'){
		$professional_portfolio_custom_css .='#footer .widget{';
			$professional_portfolio_custom_css .='text-align: right;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_copyright_font_size = get_theme_mod('professional_portfolio_copyright_font_size');
	if($professional_portfolio_copyright_font_size != false){
		$professional_portfolio_custom_css .='#footer-2 a, #footer-2 p{';
			$professional_portfolio_custom_css .='font-size: '.esc_attr($professional_portfolio_copyright_font_size).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_copyright_padding_top_bottom = get_theme_mod('professional_portfolio_copyright_padding_top_bottom');
	if($professional_portfolio_copyright_padding_top_bottom != false){
		$professional_portfolio_custom_css .='#footer-2{';
			$professional_portfolio_custom_css .='padding-top: '.esc_attr($professional_portfolio_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($professional_portfolio_copyright_padding_top_bottom).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_footer_padding = get_theme_mod('professional_portfolio_footer_padding');
	if($professional_portfolio_footer_padding != false){
		$professional_portfolio_custom_css .='#footer{';
			$professional_portfolio_custom_css .='padding: '.esc_attr($professional_portfolio_footer_padding).' 0;';
		$professional_portfolio_custom_css .='}';
	}

	/*----------------Scroll to top Settings ------------------*/

	$professional_portfolio_scroll_to_top_font_size = get_theme_mod('professional_portfolio_scroll_to_top_font_size');
	if($professional_portfolio_scroll_to_top_font_size != false){
		$professional_portfolio_custom_css .='.scrollup i{';
			$professional_portfolio_custom_css .='font-size: '.esc_attr($professional_portfolio_scroll_to_top_font_size).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_scroll_to_top_padding = get_theme_mod('professional_portfolio_scroll_to_top_padding');
	$professional_portfolio_scroll_to_top_padding = get_theme_mod('professional_portfolio_scroll_to_top_padding');
	if($professional_portfolio_scroll_to_top_padding != false){
		$professional_portfolio_custom_css .='.scrollup i{';
			$professional_portfolio_custom_css .='padding-top: '.esc_attr($professional_portfolio_scroll_to_top_padding).';padding-bottom: '.esc_attr($professional_portfolio_scroll_to_top_padding).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_scroll_to_top_width = get_theme_mod('professional_portfolio_scroll_to_top_width');
	if($professional_portfolio_scroll_to_top_width != false){
		$professional_portfolio_custom_css .='.scrollup i{';
			$professional_portfolio_custom_css .='width: '.esc_attr($professional_portfolio_scroll_to_top_width).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_scroll_to_top_height = get_theme_mod('professional_portfolio_scroll_to_top_height');
	if($professional_portfolio_scroll_to_top_height != false){
		$professional_portfolio_custom_css .='.scrollup i{';
			$professional_portfolio_custom_css .='height: '.esc_attr($professional_portfolio_scroll_to_top_height).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_scroll_to_top_border_radius = get_theme_mod('professional_portfolio_scroll_to_top_border_radius');
	if($professional_portfolio_scroll_to_top_border_radius != false){
		$professional_portfolio_custom_css .='.scrollup i{';
			$professional_portfolio_custom_css .='border-radius: '.esc_attr($professional_portfolio_scroll_to_top_border_radius).'px;';
		$professional_portfolio_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$professional_portfolio_logo_padding = get_theme_mod('professional_portfolio_logo_padding');
	if($professional_portfolio_logo_padding != false){
		$professional_portfolio_custom_css .='.logo{';
			$professional_portfolio_custom_css .='padding: '.esc_attr($professional_portfolio_logo_padding).' !important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_logo_margin = get_theme_mod('professional_portfolio_logo_margin');
	if($professional_portfolio_logo_margin != false){
		$professional_portfolio_custom_css .='.logo{';
			$professional_portfolio_custom_css .='margin: '.esc_attr($professional_portfolio_logo_margin).';';
		$professional_portfolio_custom_css .='}';
	}

	// Site title Font Size
	$professional_portfolio_site_title_font_size = get_theme_mod('professional_portfolio_site_title_font_size');
	if($professional_portfolio_site_title_font_size != false){
		$professional_portfolio_custom_css .='.logo p.site-title, .logo h1{';
			$professional_portfolio_custom_css .='font-size: '.esc_attr($professional_portfolio_site_title_font_size).';';
		$professional_portfolio_custom_css .='}';
	}

	// Site tagline Font Size
	$professional_portfolio_site_tagline_font_size = get_theme_mod('professional_portfolio_site_tagline_font_size');
	if($professional_portfolio_site_tagline_font_size != false){
		$professional_portfolio_custom_css .='.logo p.site-description{';
			$professional_portfolio_custom_css .='font-size: '.esc_attr($professional_portfolio_site_tagline_font_size).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_site_title_color = get_theme_mod('professional_portfolio_site_title_color');
	if($professional_portfolio_site_title_color != false){
		$professional_portfolio_custom_css .='p.site-title a, .logo h1 a{';
			$professional_portfolio_custom_css .='color: '.esc_attr($professional_portfolio_site_title_color).'!important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_site_tagline_color = get_theme_mod('professional_portfolio_site_tagline_color');
	if($professional_portfolio_site_tagline_color != false){
		$professional_portfolio_custom_css .='.logo p.site-description{';
			$professional_portfolio_custom_css .='color: '.esc_attr($professional_portfolio_site_tagline_color).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_logo_width = get_theme_mod('professional_portfolio_logo_width');
	if($professional_portfolio_logo_width != false){
		$professional_portfolio_custom_css .='.logo img{';
			$professional_portfolio_custom_css .='width: '.esc_attr($professional_portfolio_logo_width).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_logo_height = get_theme_mod('professional_portfolio_logo_height');
	if($professional_portfolio_logo_height != false){
		$professional_portfolio_custom_css .='.logo img{';
			$professional_portfolio_custom_css .='height: '.esc_attr($professional_portfolio_logo_height).';object-fit:cover;';
		$professional_portfolio_custom_css .='}';
	}

	// Header Background Color
	$professional_portfolio_header_background_color = get_theme_mod('professional_portfolio_header_background_color');
	if($professional_portfolio_header_background_color != false){
		$professional_portfolio_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$professional_portfolio_custom_css .='background-color: '.esc_attr($professional_portfolio_header_background_color).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_header_img_position = get_theme_mod('professional_portfolio_header_img_position','center top');
	if($professional_portfolio_header_img_position != false){
		$professional_portfolio_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$professional_portfolio_custom_css .='background-position: '.esc_attr($professional_portfolio_header_img_position).'!important;';
		$professional_portfolio_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$professional_portfolio_theme_lay = get_theme_mod( 'professional_portfolio_blog_layout_option','Default');
    if($professional_portfolio_theme_lay == 'Default'){
		$professional_portfolio_custom_css .='.post-main-box{';
			$professional_portfolio_custom_css .='';
		$professional_portfolio_custom_css .='}';
	}else if($professional_portfolio_theme_lay == 'Center'){
		$professional_portfolio_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$professional_portfolio_custom_css .='text-align:center;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='.post-info{';
			$professional_portfolio_custom_css .='margin-top:10px;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='.post-info hr{';
			$professional_portfolio_custom_css .='margin:15px auto;';
		$professional_portfolio_custom_css .='}';
	}else if($professional_portfolio_theme_lay == 'Left'){
		$professional_portfolio_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$professional_portfolio_custom_css .='text-align:Left;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='.post-info hr{';
			$professional_portfolio_custom_css .='margin-bottom:10px;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='.post-main-box h2{';
			$professional_portfolio_custom_css .='margin-top:10px;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='.service-text .more-btn{';
			$professional_portfolio_custom_css .='display:inline-block;';
		$professional_portfolio_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$professional_portfolio_blog_page_posts_settings = get_theme_mod( 'professional_portfolio_blog_page_posts_settings','Into Blocks');
    if($professional_portfolio_blog_page_posts_settings == 'Without Blocks'){
		$professional_portfolio_custom_css .='.post-main-box{';
			$professional_portfolio_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$professional_portfolio_custom_css .='}';
	}

	// featured image dimention
	$professional_portfolio_blog_post_featured_image_dimension = get_theme_mod('professional_portfolio_blog_post_featured_image_dimension', 'default');
	$professional_portfolio_blog_post_featured_image_custom_width = get_theme_mod('professional_portfolio_blog_post_featured_image_custom_width',250);
	$professional_portfolio_blog_post_featured_image_custom_height = get_theme_mod('professional_portfolio_blog_post_featured_image_custom_height',250);
	if($professional_portfolio_blog_post_featured_image_dimension == 'custom'){
		$professional_portfolio_custom_css .='.post-main-box img{';
			$professional_portfolio_custom_css .='width: '.esc_attr($professional_portfolio_blog_post_featured_image_custom_width).'!important; height: '.esc_attr($professional_portfolio_blog_post_featured_image_custom_height).';';
		$professional_portfolio_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$professional_portfolio_featured_image_border_radius = get_theme_mod('professional_portfolio_featured_image_border_radius', 0);
	if($professional_portfolio_featured_image_border_radius != false){
		$professional_portfolio_custom_css .='.box-image img, .feature-box img{';
			$professional_portfolio_custom_css .='border-radius: '.esc_attr($professional_portfolio_featured_image_border_radius).'px;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_featured_image_box_shadow = get_theme_mod('professional_portfolio_featured_image_box_shadow',0);
	if($professional_portfolio_featured_image_box_shadow != false){
		$professional_portfolio_custom_css .='.box-image img, #content-vw img{';
			$professional_portfolio_custom_css .='box-shadow: '.esc_attr($professional_portfolio_featured_image_box_shadow).'px '.esc_attr($professional_portfolio_featured_image_box_shadow).'px '.esc_attr($professional_portfolio_featured_image_box_shadow).'px #cccccc;';
		$professional_portfolio_custom_css .='}';
	}


	$professional_portfolio_singlepost_image_box_shadow = get_theme_mod('professional_portfolio_singlepost_image_box_shadow',0);
	if($professional_portfolio_singlepost_image_box_shadow != false){
		$professional_portfolio_custom_css .='.feature-box img{';
			$professional_portfolio_custom_css .='box-shadow: '.esc_attr($professional_portfolio_singlepost_image_box_shadow).'px '.esc_attr($professional_portfolio_singlepost_image_box_shadow).'px '.esc_attr($professional_portfolio_singlepost_image_box_shadow).'px #cccccc;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_related_image_box_shadow = get_theme_mod('professional_portfolio_related_image_box_shadow',0);
	if($professional_portfolio_related_image_box_shadow != false){
		$professional_portfolio_custom_css .='.related-post .box-image img{';
			$professional_portfolio_custom_css .='box-shadow: '.esc_attr($professional_portfolio_related_image_box_shadow).'px '.esc_attr($professional_portfolio_related_image_box_shadow).'px '.esc_attr($professional_portfolio_related_image_box_shadow).'px #cccccc;';
		$professional_portfolio_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$professional_portfolio_button_letter_spacing = get_theme_mod('professional_portfolio_button_letter_spacing');
	$professional_portfolio_custom_css .='.post-main-box .more-btn{';
		$professional_portfolio_custom_css .='letter-spacing: '.esc_attr($professional_portfolio_button_letter_spacing).';';
	$professional_portfolio_custom_css .='}';

	$professional_portfolio_button_border_radius = get_theme_mod('professional_portfolio_button_border_radius');
	if($professional_portfolio_button_border_radius != false){
		$professional_portfolio_custom_css .='.post-main-box .more-btn a{';
			$professional_portfolio_custom_css .='border-radius: '.esc_attr($professional_portfolio_button_border_radius).'px !important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_button_top_bottom_padding = get_theme_mod('professional_portfolio_button_top_bottom_padding');
	$professional_portfolio_button_left_right_padding = get_theme_mod('professional_portfolio_button_left_right_padding');
	if($professional_portfolio_button_top_bottom_padding != false || $professional_portfolio_button_left_right_padding != false){
		$professional_portfolio_custom_css .='.post-main-box .more-btn{';
			$professional_portfolio_custom_css .='padding-top: '.esc_attr($professional_portfolio_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($professional_portfolio_button_top_bottom_padding).'!important;padding-left: '.esc_attr($professional_portfolio_button_left_right_padding).'!important;padding-right: '.esc_attr($professional_portfolio_button_left_right_padding).'!important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_button_font_size = get_theme_mod('professional_portfolio_button_font_size',14);
	$professional_portfolio_custom_css .='.post-main-box .more-btn a{';
		$professional_portfolio_custom_css .='font-size: '.esc_attr($professional_portfolio_button_font_size).';';
	$professional_portfolio_custom_css .='}';

	$professional_portfolio_theme_lay = get_theme_mod( 'professional_portfolio_button_text_transform','Capitalize');
	if($professional_portfolio_theme_lay == 'Capitalize'){
		$professional_portfolio_custom_css .='.post-main-box .more-btn a{';
			$professional_portfolio_custom_css .='text-transform:Capitalize;';
		$professional_portfolio_custom_css .='}';
	}
	if($professional_portfolio_theme_lay == 'Lowercase'){
		$professional_portfolio_custom_css .='.post-main-box .more-btn a{';
			$professional_portfolio_custom_css .='text-transform:Lowercase;';
		$professional_portfolio_custom_css .='}';
	}
	if($professional_portfolio_theme_lay == 'Uppercase'){
		$professional_portfolio_custom_css .='.post-main-box .more-btn a{';
			$professional_portfolio_custom_css .='text-transform:Uppercase;';
		$professional_portfolio_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$professional_portfolio_single_blog_comment_button_text = get_theme_mod('professional_portfolio_single_blog_comment_button_text', 'Post Comment');
	if($professional_portfolio_single_blog_comment_button_text == ''){
		$professional_portfolio_custom_css .='#comments p.form-submit {';
			$professional_portfolio_custom_css .='display: none;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_comment_width = get_theme_mod('professional_portfolio_single_blog_comment_width');
	if($professional_portfolio_comment_width != false){
		$professional_portfolio_custom_css .='#comments textarea{';
			$professional_portfolio_custom_css .='width: '.esc_attr($professional_portfolio_comment_width).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_single_blog_post_navigation_show_hide = get_theme_mod('professional_portfolio_single_blog_post_navigation_show_hide',true);
	if($professional_portfolio_single_blog_post_navigation_show_hide != true){
		$professional_portfolio_custom_css .='.post-navigation{';
			$professional_portfolio_custom_css .='display: none;';
		$professional_portfolio_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$professional_portfolio_display_grid_posts_settings = get_theme_mod( 'professional_portfolio_display_grid_posts_settings','Into Blocks');
    if($professional_portfolio_display_grid_posts_settings == 'Without Blocks'){
		$professional_portfolio_custom_css .='.grid-post-main-box{';
			$professional_portfolio_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_grid_featured_image_border_radius = get_theme_mod('professional_portfolio_grid_featured_image_border_radius', 0);
	if($professional_portfolio_grid_featured_image_border_radius != false){
		$professional_portfolio_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$professional_portfolio_custom_css .='border-radius: '.esc_attr($professional_portfolio_grid_featured_image_border_radius).'px;';
		$professional_portfolio_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$professional_portfolio_related_product_show_hide = get_theme_mod('professional_portfolio_related_product_show_hide',true);
	if($professional_portfolio_related_product_show_hide != true){
		$professional_portfolio_custom_css .='.related.products{';
			$professional_portfolio_custom_css .='display: none;';
		$professional_portfolio_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$professional_portfolio_products_padding_top_bottom = get_theme_mod('professional_portfolio_products_padding_top_bottom');
	if($professional_portfolio_products_padding_top_bottom != false){
		$professional_portfolio_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$professional_portfolio_custom_css .='padding-top: '.esc_attr($professional_portfolio_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($professional_portfolio_products_padding_top_bottom).'!important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_products_padding_left_right = get_theme_mod('professional_portfolio_products_padding_left_right');
	if($professional_portfolio_products_padding_left_right != false){
		$professional_portfolio_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$professional_portfolio_custom_css .='padding-left: '.esc_attr($professional_portfolio_products_padding_left_right).'!important; padding-right: '.esc_attr($professional_portfolio_products_padding_left_right).'!important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_products_box_shadow = get_theme_mod('professional_portfolio_products_box_shadow');
	if($professional_portfolio_products_box_shadow != false){
		$professional_portfolio_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$professional_portfolio_custom_css .='box-shadow: '.esc_attr($professional_portfolio_products_box_shadow).'px '.esc_attr($professional_portfolio_products_box_shadow).'px '.esc_attr($professional_portfolio_products_box_shadow).'px #ddd;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_products_border_radius = get_theme_mod('professional_portfolio_products_border_radius');
	if($professional_portfolio_products_border_radius != false){
		$professional_portfolio_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$professional_portfolio_custom_css .='border-radius: '.esc_attr($professional_portfolio_products_border_radius).'px;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_products_btn_padding_top_bottom = get_theme_mod('professional_portfolio_products_btn_padding_top_bottom');
	if($professional_portfolio_products_btn_padding_top_bottom != false){
		$professional_portfolio_custom_css .='.woocommerce a.button{';
			$professional_portfolio_custom_css .='padding-top: '.esc_attr($professional_portfolio_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($professional_portfolio_products_btn_padding_top_bottom).' !important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_products_btn_padding_left_right = get_theme_mod('professional_portfolio_products_btn_padding_left_right');
	if($professional_portfolio_products_btn_padding_left_right != false){
		$professional_portfolio_custom_css .='.woocommerce a.button{';
			$professional_portfolio_custom_css .='padding-left: '.esc_attr($professional_portfolio_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($professional_portfolio_products_btn_padding_left_right).' !important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_products_button_border_radius = get_theme_mod('professional_portfolio_products_button_border_radius', 0);
	if($professional_portfolio_products_button_border_radius != false){
		$professional_portfolio_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce a.button{';
			$professional_portfolio_custom_css .='border-radius: '.esc_attr($professional_portfolio_products_button_border_radius).'px !important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_woocommerce_sale_position = get_theme_mod( 'professional_portfolio_woocommerce_sale_position','right');
    if($professional_portfolio_woocommerce_sale_position == 'left'){
		$professional_portfolio_custom_css .='.woocommerce ul.products li.product .onsale{';
			$professional_portfolio_custom_css .='left: 14px !important; right: auto !important;';
		$professional_portfolio_custom_css .='}';
	}else if($professional_portfolio_woocommerce_sale_position == 'right'){
		$professional_portfolio_custom_css .='.woocommerce ul.products li.product .onsale{';
			$professional_portfolio_custom_css .='left: auto!important; right: 14px !important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_slider_height = get_theme_mod('professional_portfolio_slider_height');
	if($professional_portfolio_slider_height != false){
		$professional_portfolio_custom_css .='#slider img{';
			$professional_portfolio_custom_css .='height: '.esc_attr($professional_portfolio_slider_height).'px;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_woocommerce_sale_font_size = get_theme_mod('professional_portfolio_woocommerce_sale_font_size');
	if($professional_portfolio_woocommerce_sale_font_size != false){
		$professional_portfolio_custom_css .='.woocommerce span.onsale{';
			$professional_portfolio_custom_css .='font-size: '.esc_attr($professional_portfolio_woocommerce_sale_font_size).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_woocommerce_sale_padding_top_bottom = get_theme_mod('professional_portfolio_woocommerce_sale_padding_top_bottom');
	if($professional_portfolio_woocommerce_sale_padding_top_bottom != false){
		$professional_portfolio_custom_css .='.woocommerce span.onsale{';
			$professional_portfolio_custom_css .='padding-top: '.esc_attr($professional_portfolio_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($professional_portfolio_woocommerce_sale_padding_top_bottom).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_woocommerce_sale_padding_left_right = get_theme_mod('professional_portfolio_woocommerce_sale_padding_left_right');
	if($professional_portfolio_woocommerce_sale_padding_left_right != false){
		$professional_portfolio_custom_css .='.woocommerce span.onsale{';
			$professional_portfolio_custom_css .='padding-left: '.esc_attr($professional_portfolio_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($professional_portfolio_woocommerce_sale_padding_left_right).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_woocommerce_sale_border_radius = get_theme_mod('professional_portfolio_woocommerce_sale_border_radius', 0);
	if($professional_portfolio_woocommerce_sale_border_radius != false){
		$professional_portfolio_custom_css .='.woocommerce span.onsale{';
			$professional_portfolio_custom_css .='border-radius: '.esc_attr($professional_portfolio_woocommerce_sale_border_radius).'px;';
		$professional_portfolio_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$professional_portfolio_sticky_header_padding = get_theme_mod('professional_portfolio_sticky_header_padding');
	if($professional_portfolio_sticky_header_padding != false){
		$professional_portfolio_custom_css .='.header-fixed{';
			$professional_portfolio_custom_css .='padding: '.esc_attr($professional_portfolio_sticky_header_padding).';';
		$professional_portfolio_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$professional_portfolio_social_icon_font_size = get_theme_mod('professional_portfolio_social_icon_font_size');
	if($professional_portfolio_social_icon_font_size != false){
		$professional_portfolio_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$professional_portfolio_custom_css .='font-size: '.esc_attr($professional_portfolio_social_icon_font_size).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_social_icon_padding = get_theme_mod('professional_portfolio_social_icon_padding');
	if($professional_portfolio_social_icon_padding != false){
		$professional_portfolio_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$professional_portfolio_custom_css .='padding: '.esc_attr($professional_portfolio_social_icon_padding).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_social_icon_width = get_theme_mod('professional_portfolio_social_icon_width');
	if($professional_portfolio_social_icon_width != false){
		$professional_portfolio_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$professional_portfolio_custom_css .='width: '.esc_attr($professional_portfolio_social_icon_width).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_social_icon_height = get_theme_mod('professional_portfolio_social_icon_height');
	if($professional_portfolio_social_icon_height != false){
		$professional_portfolio_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$professional_portfolio_custom_css .='height: '.esc_attr($professional_portfolio_social_icon_height).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_social_icon_border_radius = get_theme_mod('professional_portfolio_social_icon_border_radius');
	if($professional_portfolio_social_icon_border_radius != false){
		$professional_portfolio_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$professional_portfolio_custom_css .='border-radius: '.esc_attr($professional_portfolio_social_icon_border_radius).'px;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_resp_menu_toggle_btn_bg_color = get_theme_mod('professional_portfolio_resp_menu_toggle_btn_bg_color');
	if($professional_portfolio_resp_menu_toggle_btn_bg_color != false){
		$professional_portfolio_custom_css .='.toggle-nav i,#mySidenav .closebtn{';
			$professional_portfolio_custom_css .='background: '.esc_attr($professional_portfolio_resp_menu_toggle_btn_bg_color).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_grid_featured_image_box_shadow = get_theme_mod('professional_portfolio_grid_featured_image_box_shadow',0);
	if($professional_portfolio_grid_featured_image_box_shadow != false){
		$professional_portfolio_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$professional_portfolio_custom_css .='box-shadow: '.esc_attr($professional_portfolio_grid_featured_image_box_shadow).'px '.esc_attr($professional_portfolio_grid_featured_image_box_shadow).'px '.esc_attr($professional_portfolio_grid_featured_image_box_shadow).'px #cccccc;';
		$professional_portfolio_custom_css .='}';
	}

	/*-------------- Menus Setings ----------------*/

	$professional_portfolio_navigation_menu_font_size = get_theme_mod('professional_portfolio_navigation_menu_font_size');
	if($professional_portfolio_navigation_menu_font_size != false){
		$professional_portfolio_custom_css .='.main-navigation ul a{';
			$professional_portfolio_custom_css .='font-size: '.esc_attr($professional_portfolio_navigation_menu_font_size).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_navigation_menu_font_weight = get_theme_mod('professional_portfolio_navigation_menu_font_weight','400');
	if($professional_portfolio_navigation_menu_font_weight != false){
		$professional_portfolio_custom_css .='.main-navigation ul a{';
			$professional_portfolio_custom_css .='font-weight: '.esc_attr($professional_portfolio_navigation_menu_font_weight).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_theme_lay = get_theme_mod( 'professional_portfolio_menu_text_transform','Capitalize');
	if($professional_portfolio_theme_lay == 'Capitalize'){
		$professional_portfolio_custom_css .='.main-navigation ul a{';
			$professional_portfolio_custom_css .='text-transform:Capitalize;';
		$professional_portfolio_custom_css .='}';
	}
	if($professional_portfolio_theme_lay == 'Lowercase'){
		$professional_portfolio_custom_css .='.main-navigation ul a{';
			$professional_portfolio_custom_css .='text-transform:Lowercase;';
		$professional_portfolio_custom_css .='}';
	}
	if($professional_portfolio_theme_lay == 'Uppercase'){
		$professional_portfolio_custom_css .='.main-navigation ul a{';
			$professional_portfolio_custom_css .='text-transform:Uppercase;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_header_menus_color = get_theme_mod('professional_portfolio_header_menus_color');
	if($professional_portfolio_header_menus_color != false){
		$professional_portfolio_custom_css .='.main-navigation ul a{';
			$professional_portfolio_custom_css .='color: '.esc_attr($professional_portfolio_header_menus_color).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_header_menus_hover_color = get_theme_mod('professional_portfolio_header_menus_hover_color');
	if($professional_portfolio_header_menus_hover_color != false){
		$professional_portfolio_custom_css .='.main-navigation ul a:hover{';
			$professional_portfolio_custom_css .='color: '.esc_attr($professional_portfolio_header_menus_hover_color).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_header_submenus_color = get_theme_mod('professional_portfolio_header_submenus_color');
	if($professional_portfolio_header_submenus_color != false){
		$professional_portfolio_custom_css .='.main-navigation ul ul a{';
			$professional_portfolio_custom_css .='color: '.esc_attr($professional_portfolio_header_submenus_color).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_header_submenus_hover_color = get_theme_mod('professional_portfolio_header_submenus_hover_color');
	if($professional_portfolio_header_submenus_hover_color != false){
		$professional_portfolio_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$professional_portfolio_custom_css .='color: '.esc_attr($professional_portfolio_header_submenus_hover_color).'!important;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_menus_item = get_theme_mod( 'professional_portfolio_menus_item_style','None');
    if($professional_portfolio_menus_item == 'None'){
		$professional_portfolio_custom_css .='.main-navigation ul a{';
			$professional_portfolio_custom_css .='';
		$professional_portfolio_custom_css .='}';
	}else if($professional_portfolio_menus_item == 'Zoom In'){
		$professional_portfolio_custom_css .='.main-navigation ul a:hover{';
			$professional_portfolio_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$professional_portfolio_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$professional_portfolio_theme_lay = get_theme_mod( 'professional_portfolio_footer_template','professional_portfolio-footer-one');
    if($professional_portfolio_theme_lay == 'professional_portfolio-footer-one'){
		$professional_portfolio_custom_css .='#footer{';
			$professional_portfolio_custom_css .='';
		$professional_portfolio_custom_css .='}';

	}else if($professional_portfolio_theme_lay == 'professional_portfolio-footer-two'){
		$professional_portfolio_custom_css .='#footer{';
			$professional_portfolio_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$professional_portfolio_custom_css .='color:#000;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='#footer ul li::before{';
			$professional_portfolio_custom_css .='background:#000;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$professional_portfolio_custom_css .='border: 1px solid #000;';
		$professional_portfolio_custom_css .='}';

	}else if($professional_portfolio_theme_lay == 'professional_portfolio-footer-three'){
		$professional_portfolio_custom_css .='#footer{';
			$professional_portfolio_custom_css .='background: #232524;';
		$professional_portfolio_custom_css .='}';
	}
	else if($professional_portfolio_theme_lay == 'professional_portfolio-footer-four'){
		$professional_portfolio_custom_css .='#footer{';
			$professional_portfolio_custom_css .='background: #F4F000;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$professional_portfolio_custom_css .='color:#fff;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='#footer ul li::before{';
			$professional_portfolio_custom_css .='background:#fff;';
		$professional_portfolio_custom_css .='}';
		$professional_portfolio_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$professional_portfolio_custom_css .='border: 1px solid #fff;';
		$professional_portfolio_custom_css .='}';
	}
	else if($professional_portfolio_theme_lay == 'professional_portfolio-footer-five'){
		$professional_portfolio_custom_css .='#footer{';
			$professional_portfolio_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$professional_portfolio_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$professional_portfolio_button_footer_heading_letter_spacing = get_theme_mod('professional_portfolio_button_footer_heading_letter_spacing',1);
	$professional_portfolio_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$professional_portfolio_custom_css .='letter-spacing: '.esc_attr($professional_portfolio_button_footer_heading_letter_spacing).'px;';
	$professional_portfolio_custom_css .='}';

	$professional_portfolio_button_footer_font_size = get_theme_mod('professional_portfolio_button_footer_font_size','30');
	$professional_portfolio_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$professional_portfolio_custom_css .='font-size: '.esc_attr($professional_portfolio_button_footer_font_size).'px;';
	$professional_portfolio_custom_css .='}';

	$professional_portfolio_theme_lay = get_theme_mod( 'professional_portfolio_button_footer_text_transform','Capitalize');
	if($professional_portfolio_theme_lay == 'Capitalize'){
		$professional_portfolio_custom_css .='#footer h3{';
			$professional_portfolio_custom_css .='text-transform:Capitalize;';
		$professional_portfolio_custom_css .='}';
	}
	if($professional_portfolio_theme_lay == 'Lowercase'){
		$professional_portfolio_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$professional_portfolio_custom_css .='text-transform:Lowercase;';
		$professional_portfolio_custom_css .='}';
	}
	if($professional_portfolio_theme_lay == 'Uppercase'){
		$professional_portfolio_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$professional_portfolio_custom_css .='text-transform:Uppercase;';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_footer_heading_weight = get_theme_mod('professional_portfolio_footer_heading_weight','600');
	if($professional_portfolio_footer_heading_weight != false){
		$professional_portfolio_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$professional_portfolio_custom_css .='font-weight: '.esc_attr($professional_portfolio_footer_heading_weight).';';
		$professional_portfolio_custom_css .='}';
	}
	
	$professional_portfolio_slider_first_color = get_theme_mod('professional_portfolio_slider_first_color');

	$professional_portfolio_slider_second_color = get_theme_mod('professional_portfolio_slider_second_color');

	if($professional_portfolio_slider_first_color != false || $professional_portfolio_slider_second_color != false){
		$professional_portfolio_custom_css .='.box{
		background: linear-gradient(to top, '.esc_attr($professional_portfolio_slider_first_color).', '.esc_attr($professional_portfolio_slider_second_color).');
		}';
	}

	$professional_portfolio_services_icon_color = get_theme_mod('professional_portfolio_services_icon_color');
	if($professional_portfolio_services_icon_color != false){
		$professional_portfolio_custom_css .='#about-sec i{';
			$professional_portfolio_custom_css .='color: '.esc_attr($professional_portfolio_services_icon_color).';';
		$professional_portfolio_custom_css .='}';
	}

	$professional_portfolio_bradcrumbs_alignment = get_theme_mod( 'professional_portfolio_bradcrumbs_alignment','Left');
    if($professional_portfolio_bradcrumbs_alignment == 'Left'){
    	$professional_portfolio_custom_css .='@media screen and (min-width:768px) {';
		$professional_portfolio_custom_css .='.bradcrumbs{';
			$professional_portfolio_custom_css .='text-align:start;';
		$professional_portfolio_custom_css .='}}';
	}else if($professional_portfolio_bradcrumbs_alignment == 'Center'){
		$professional_portfolio_custom_css .='@media screen and (min-width:768px) {';
		$professional_portfolio_custom_css .='.bradcrumbs{';
			$professional_portfolio_custom_css .='text-align:center;';
		$professional_portfolio_custom_css .='}}';
	}else if($professional_portfolio_bradcrumbs_alignment == 'Right'){
		$professional_portfolio_custom_css .='@media screen and (min-width:768px) {';
		$professional_portfolio_custom_css .='.bradcrumbs{';
			$professional_portfolio_custom_css .='text-align:end;';
		$professional_portfolio_custom_css .='}}';
	}