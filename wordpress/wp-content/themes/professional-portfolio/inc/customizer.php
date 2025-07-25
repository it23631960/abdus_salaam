<?php
/**
 * Professional Portfolio   Theme Customizer
 *
 * @package Professional Portfolio  
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function professional_portfolio_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'professional_portfolio_custom_controls' );

function professional_portfolio_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'professional_portfolio_Customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'professional_portfolio_Customize_partial_blogdescription',
	));

	// add home page setting pannel
	$wp_customize->add_panel( 'professional_portfolio_panel_id', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Homepage Settings', 'professional-portfolio' ),
		'priority' => 10,
	));

	//Menus Settings
	$wp_customize->add_section( 'professional_portfolio_menu_section' , array(
    	'title' => __( 'Menus Settings', 'professional-portfolio' ),
		'panel' => 'professional_portfolio_panel_id'
	) );

	$wp_customize->add_setting('professional_portfolio_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_navigation_menu_font_weight',array(
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','professional-portfolio'),
        'section' => 'professional_portfolio_menu_section',
        'choices' => array(
        	'100' => __('100','professional-portfolio'),
            '200' => __('200','professional-portfolio'),
            '300' => __('300','professional-portfolio'),
            '400' => __('400','professional-portfolio'),
            '500' => __('500','professional-portfolio'),
            '600' => __('600','professional-portfolio'),
            '700' => __('700','professional-portfolio'),
            '800' => __('800','professional-portfolio'),
            '900' => __('900','professional-portfolio'),
        ),
	) );

	// text trasform
	$wp_customize->add_setting('professional_portfolio_menu_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_menu_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Menus Text Transform','professional-portfolio'),
		'choices' => array(
            'Uppercase' => __('Uppercase','professional-portfolio'),
            'Capitalize' => __('Capitalize','professional-portfolio'),
            'Lowercase' => __('Lowercase','professional-portfolio'),
        ),
		'section'=> 'professional_portfolio_menu_section',
	));

	$wp_customize->add_setting('professional_portfolio_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_menus_item_style',array(
        'type' => 'select',
        'section' => 'professional_portfolio_menu_section',
		'label' => __('Menu Item Hover Style','professional-portfolio'),
		'choices' => array(
            'None' => __('None','professional-portfolio'),
            'Zoom In' => __('Zoom In','professional-portfolio'),
        ),
	) );

	$wp_customize->add_setting('professional_portfolio_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'professional_portfolio_header_menus_color', array(
		'label'    => __('Menus Color', 'professional-portfolio'),
		'section'  => 'professional_portfolio_menu_section',
	)));

	$wp_customize->add_setting('professional_portfolio_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'professional_portfolio_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'professional-portfolio'),
		'section'  => 'professional_portfolio_menu_section',
	)));

	$wp_customize->add_setting('professional_portfolio_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'professional_portfolio_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'professional-portfolio'),
		'section'  => 'professional_portfolio_menu_section',
	)));

	$wp_customize->add_setting('professional_portfolio_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'professional_portfolio_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'professional-portfolio'),
		'section'  => 'professional_portfolio_menu_section',
	)));

	// Top Bar
	$wp_customize->add_section( 'professional_portfolio_top_bar' , array(
    	'title' => esc_html__( 'Header Sidebar', 'professional-portfolio' ),
		'panel' => 'professional_portfolio_panel_id'
	) );

	//Sticky Header
	$wp_customize->add_setting( 'professional_portfolio_sticky_header',array(
	    'default' => 0,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_sticky_header',array(
	    'label' => esc_html__( 'Sticky Header','professional-portfolio' ),
	    'section' => 'professional_portfolio_top_bar'
  	)));

	$wp_customize->add_setting('professional_portfolio_openclose_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('professional_portfolio_openclose_text',array(
		'label'	=> esc_html__('Side Menu Content Text','professional-portfolio'),
		'section'=> 'professional_portfolio_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_baropen_icon',array(
		'default'	=> 'fa-solid fa-bars-staggered',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
        $wp_customize,'professional_portfolio_baropen_icon',array(
		'label'	=> __('Add Open Bar Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_top_bar',
		'setting'	=> 'professional_portfolio_baropen_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('professional_portfolio_barclose_icon',array(
		'default'	=> 'fas fa-window-close',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
        $wp_customize,'professional_portfolio_barclose_icon',array(
		'label'	=> __('Add Close Bar Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_top_bar',
		'setting'	=> 'professional_portfolio_barclose_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('professional_portfolio_phone_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_phone_text',array(
		'label'	=> __('Add Header / Side Menu Phone Text','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( 'Phone no.', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'professional_portfolio_sanitize_phone_number'
	));
	$wp_customize->add_control('professional_portfolio_phone_number',array(
		'label'	=> __('Add Header / Side Menu Phone Number','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( '+00 1234 567 890', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_phone_no_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
        $wp_customize,'professional_portfolio_phone_no_icon',array(
		'label'	=> __('Add Header / Side Menu Phone Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_top_bar',
		'setting'	=> 'professional_portfolio_phone_no_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('professional_portfolio_email_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_email_text',array(
		'label'	=> __('Add Email text','professional-portfolio'),
		'input_attrs' => array(
    	'placeholder' => __( 'Email', 'professional-portfolio' ),
    ),
		'section'=> 'professional_portfolio_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_email_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('professional_portfolio_email_address',array(
		'label'	=> __('Add Email Address','professional-portfolio'),
		'input_attrs' => array(
      'placeholder' => __( 'xyz123@gmail.com', 'professional-portfolio' ),
    ),
		'section'=> 'professional_portfolio_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_email_address_icon',array(
		'default'	=> 'fas fa-envelope-open',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
        $wp_customize,'professional_portfolio_email_address_icon',array(
		'label'	=> __('Add Email Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_top_bar',
		'setting'	=> 'professional_portfolio_email_address_icon',
		'type'		=> 'icon'
	)));

	//Banner
	$wp_customize->add_section( 'professional_portfolio_bannersettings' , array(
  	'title'      => __( 'Banner Settings', 'professional-portfolio' ),
  	'description' => __('For more options of Banner section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/portfolio-wordpress-theme">GET PRO</a>','professional-portfolio'),
	'panel' => 'professional_portfolio_panel_id',
	) );

	$wp_customize->add_setting( 'professional_portfolio_banner_hide_show',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'professional_portfolio_switch_sanitization'
	));
	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_banner_hide_show',array(
		'label' => esc_html__( 'Show / Hide Banner','professional-portfolio' ),
		'section' => 'professional_portfolio_bannersettings'
	)));

	$wp_customize->add_setting('professional_portfolio_banner_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'professional_portfolio_banner_image',array(
	    'label' => __('Banner Background Image','professional-portfolio'),
	    'section' => 'professional_portfolio_bannersettings',
	    'description' => __('Image size (1200px x 500px)','professional-portfolio'),
	)));

	$wp_customize->add_setting('professional_portfolio_service_banner_left_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'professional_portfolio_service_banner_left_image',array(
		'label' => __('Add Left Image','professional-portfolio'),
		'description' => __('Image size (550px x 500px)','professional-portfolio'),
		'section' => 'professional_portfolio_bannersettings',
	)));

  $wp_customize->add_setting('professional_portfolio_slider_main_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_slider_main_title',array(
		'label'	=> __('Banner Title','professional-portfolio'),
		'section'	=> 'professional_portfolio_bannersettings',
		'input_attrs' => array(
            'placeholder' => __( 'CraftedCanvas', 'professional-portfolio' ),
        ),
		'type'		=> 'text'
	));

 	$wp_customize->add_setting('professional_portfolio_banner_top_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_banner_top_text',array(
		'label'	=> __('Banner Text','professional-portfolio'),
		'section'	=> 'professional_portfolio_bannersettings',
		'input_attrs' => array(
        'placeholder' => __( 'Crafted Everything', 'professional-portfolio' ),
        ),
		'type'		=> 'text'
	));

	//About Us Section
	$wp_customize->add_section('professional_portfolio_about', array(
		'title'       => __('About Us Section', 'professional-portfolio'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','professional-portfolio'),
		'priority'    => null,
		'panel'       => 'professional_portfolio_panel_id',
	));

	$wp_customize->add_setting('professional_portfolio_about_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_about_text',array(
		'description' => __('<p>1. More options for about us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for about us section.</p>','professional-portfolio'),
		'section'=> 'professional_portfolio_about',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('professional_portfolio_about_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_about_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/portfolio-wordpress-theme'>More Info</a>",
		'section'=> 'professional_portfolio_about',
		'type'=> 'hidden'
	));

	//Services Section
	$wp_customize->add_section('professional_portfolio_services', array(
		'title'       => __('Services Section', 'professional-portfolio'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','professional-portfolio'),
		'priority'    => null,
		'panel'       => 'professional_portfolio_panel_id',
	));

	$wp_customize->add_setting('professional_portfolio_services_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_services_text',array(
		'description' => __('<p>1. More options for services us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for services us section.</p>','professional-portfolio'),
		'section'=> 'professional_portfolio_services',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('professional_portfolio_services_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_services_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/portfolio-wordpress-theme'>More Info</a>",
		'section'=> 'professional_portfolio_services',
		'type'=> 'hidden'
	));

	//Projects Section
	$wp_customize->add_section('professional_portfolio_projects', array(
		'title'       => __('Projects Section', 'professional-portfolio'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','professional-portfolio'),
		'priority'    => null,
		'panel'       => 'professional_portfolio_panel_id',
	));

	$wp_customize->add_setting('professional_portfolio_projects_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_projects_text',array(
		'description' => __('<p>1. More options for projects us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for projects us section.</p>','professional-portfolio'),
		'section'=> 'professional_portfolio_projects',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('professional_portfolio_projects_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_projects_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/portfolio-wordpress-theme'>More Info</a>",
		'section'=> 'professional_portfolio_projects',
		'type'=> 'hidden'
	));

	// Case Studies Section
	$wp_customize->add_section('professional_portfolio_our_places_section', array(
	    'title' => __('Case Studies Section', 'professional-portfolio'),
	    'description' => __('For more options of Case Studies section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/portfolio-wordpress-theme">GET PRO</a>','professional-portfolio'),
	    'panel' => 'professional_portfolio_panel_id',
	));

	$wp_customize->add_setting('professional_portfolio_section_title', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('professional_portfolio_section_title', array(
	    'label' => esc_html__('Case Studies Heading', 'professional-portfolio'),
	    'section' => 'professional_portfolio_our_places_section',
	    'type' => 'text',
	    'input_attrs' => array(
	        'placeholder' => __('Case Studies', 'professional-portfolio'),
	    ),
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst[]='Select';
	foreach($post_list as $post){
		$pst[$post->ID] = $post->post_title;
	}

	for ( $professional_portfolio_i = 1; $professional_portfolio_i <= 3; $professional_portfolio_i++ ) {
		$wp_customize->add_setting('professional_portfolio_select_posts'.$professional_portfolio_i,array(
			'sanitize_callback' => 'professional_portfolio_sanitize_choices',
		));
		$wp_customize->add_control('professional_portfolio_select_posts'.$professional_portfolio_i,array(
			'type'    => 'select',
			'choices' => $pst,
			'label' => __('Select post','professional-portfolio'),
			'section' => 'professional_portfolio_our_places_section',
		));

	}

	//Partner Section
	$wp_customize->add_section('professional_portfolio_partner', array(
		'title'       => __('Partner Section', 'professional-portfolio'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','professional-portfolio'),
		'priority'    => null,
		'panel'       => 'professional_portfolio_panel_id',
	));

	$wp_customize->add_setting('professional_portfolio_partner_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_partner_text',array(
		'description' => __('<p>1. More options for partner section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for partner section.</p>','professional-portfolio'),
		'section'=> 'professional_portfolio_partner',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('professional_portfolio_partner_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_partner_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/portfolio-wordpress-theme'>More Info</a>",
		'section'=> 'professional_portfolio_partner',
		'type'=> 'hidden'
	));

	//awards sec Section
	$wp_customize->add_section('professional_portfolio_awards_sec', array(
		'title'       => __('Awards Section', 'professional-portfolio'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','professional-portfolio'),
		'priority'    => null,
		'panel'       => 'professional_portfolio_panel_id',
	));

	$wp_customize->add_setting('professional_portfolio_awards_sec_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_awards_sec_text',array(
		'description' => __('<p>1. More options for awards section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for awards section.</p>','professional-portfolio'),
		'section'=> 'professional_portfolio_awards_sec',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('professional_portfolio_awards_sec_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_awards_sec_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/portfolio-wordpress-theme'>More Info</a>",
		'section'=> 'professional_portfolio_awards_sec',
		'type'=> 'hidden'
	));

	//testimonial Section
	$wp_customize->add_section('professional_portfolio_testimonial', array(
		'title'       => __('Testimonial Section', 'professional-portfolio'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','professional-portfolio'),
		'priority'    => null,
		'panel'       => 'professional_portfolio_panel_id',
	));

	$wp_customize->add_setting('professional_portfolio_testimonial_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_testimonial_text',array(
		'description' => __('<p>1. More options for testimonial section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for awards section.</p>','professional-portfolio'),
		'section'=> 'professional_portfolio_testimonial',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('professional_portfolio_testimonial_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_testimonial_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/portfolio-wordpress-theme'>More Info</a>",
		'section'=> 'professional_portfolio_testimonial',
		'type'=> 'hidden'
	));

	//lets work Section
	$wp_customize->add_section('professional_portfolio_lets_work', array(
		'title'       => __('Lets Work Section', 'professional-portfolio'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','professional-portfolio'),
		'priority'    => null,
		'panel'       => 'professional_portfolio_panel_id',
	));

	$wp_customize->add_setting('professional_portfolio_lets_work_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_lets_work_text',array(
		'description' => __('<p>1. More options for lets work section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for lets work section.</p>','professional-portfolio'),
		'section'=> 'professional_portfolio_lets_work',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('professional_portfolio_lets_work_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_lets_work_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/portfolio-wordpress-theme'>More Info</a>",
		'section'=> 'professional_portfolio_lets_work',
		'type'=> 'hidden'
	));

	//brand Section
	$wp_customize->add_section('professional_portfolio_brand', array(
		'title'       => __('Brand Section', 'professional-portfolio'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','professional-portfolio'),
		'priority'    => null,
		'panel'       => 'professional_portfolio_panel_id',
	));

	$wp_customize->add_setting('professional_portfolio_brand_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_brand_text',array(
		'description' => __('<p>1. More options for brand section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for brand section.</p>','professional-portfolio'),
		'section'=> 'professional_portfolio_brand',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('professional_portfolio_brand_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_brand_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/portfolio-wordpress-theme'>More Info</a>",
		'section'=> 'professional_portfolio_brand',
		'type'=> 'hidden'
	));

	//blog-news Section
	$wp_customize->add_section('professional_portfolio_blog_news', array(
		'title'       => __('Blog News Section', 'professional-portfolio'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','professional-portfolio'),
		'priority'    => null,
		'panel'       => 'professional_portfolio_panel_id',
	));

	$wp_customize->add_setting('professional_portfolio_blog_news_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_blog_news_text',array(
		'description' => __('<p>1. More options for blog news section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for blog news section.</p>','professional-portfolio'),
		'section'=> 'professional_portfolio_blog_news',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('professional_portfolio_blog_news_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_blog_news_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/portfolio-wordpress-theme'>More Info</a>",
		'section'=> 'professional_portfolio_blog_news',
		'type'=> 'hidden'
	));

	//newsletter Section
	$wp_customize->add_section('professional_portfolio_newsletter', array(
		'title'       => __('Newsletter Section', 'professional-portfolio'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','professional-portfolio'),
		'priority'    => null,
		'panel'       => 'professional_portfolio_panel_id',
	));

	$wp_customize->add_setting('professional_portfolio_newsletter_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_newsletter_text',array(
		'description' => __('<p>1. More options for newsletter section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for newsletter section.</p>','professional-portfolio'),
		'section'=> 'professional_portfolio_newsletter',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('professional_portfolio_newsletter_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_newsletter_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/portfolio-wordpress-theme'>More Info</a>",
		'section'=> 'professional_portfolio_newsletter',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('professional_portfolio_footer',array(
		'title'	=> esc_html__('Footer Settings','professional-portfolio'),
		 'description' => __('For more options of Footer section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/portfolio-wordpress-theme">GET PRO</a>','professional-portfolio'),
		'panel' => 'professional_portfolio_panel_id',
	));

	$wp_customize->add_setting( 'professional_portfolio_footer_hide_show',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ));
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_footer_hide_show',array(
    'label' => esc_html__( 'Show / Hide Footer','professional-portfolio' ),
    'section' => 'professional_portfolio_footer'
  )));

 	// font size
	$wp_customize->add_setting('professional_portfolio_button_footer_font_size',array(
		'default'=> 25,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','professional-portfolio'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'professional_portfolio_footer',
	));

	$wp_customize->add_setting('professional_portfolio_button_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','professional-portfolio'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'professional_portfolio_footer',
	));

	// text trasform
	$wp_customize->add_setting('professional_portfolio_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','professional-portfolio'),
		'choices' => array(
			'Uppercase' => __('Uppercase','professional-portfolio'),
			'Capitalize' => __('Capitalize','professional-portfolio'),
			'Lowercase' => __('Lowercase','professional-portfolio'),
		),
		'section'=> 'professional_portfolio_footer',
	));

	$wp_customize->add_setting('professional_portfolio_footer_heading_weight',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_footer_heading_weight',array(
        'type' => 'select',
        'label' => __('Heading Font Weight','professional-portfolio'),
        'section' => 'professional_portfolio_footer',
        'choices' => array(
        	'100' => __('100','professional-portfolio'),
            '200' => __('200','professional-portfolio'),
            '300' => __('300','professional-portfolio'),
            '400' => __('400','professional-portfolio'),
            '500' => __('500','professional-portfolio'),
            '600' => __('600','professional-portfolio'),
            '700' => __('700','professional-portfolio'),
            '800' => __('800','professional-portfolio'),
            '900' => __('900','professional-portfolio'),
        ),
	) );

	$wp_customize->add_setting('professional_portfolio_footer_template',array(
		'default'	=> esc_html('professional_portfolio-footer-one'),
		'sanitize_callback'	=> 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_footer_template',array(
		'label'	=> esc_html__('Footer style','professional-portfolio'),
		'section'	=> 'professional_portfolio_footer',
		'setting'	=> 'professional_portfolio_footer_template',
		'type' => 'select',
		'choices' => array(
			'professional_portfolio-footer-one' => esc_html__('Style 1', 'professional-portfolio'),
			'professional_portfolio-footer-two' => esc_html__('Style 2', 'professional-portfolio'),
			'professional_portfolio-footer-three' => esc_html__('Style 3', 'professional-portfolio'),
			'professional_portfolio-footer-four' => esc_html__('Style 4', 'professional-portfolio'),
			'professional_portfolio-footer-five' => esc_html__('Style 5', 'professional-portfolio'),
		)
	));

	$wp_customize->add_setting('professional_portfolio_footer_background_color', array(
		'default'           => '#F4F000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'professional_portfolio_footer_background_color', array(
		'label'    => __('Footer Background Color', 'professional-portfolio'),
		'section'  => 'professional_portfolio_footer',
	)));

	$wp_customize->add_setting('professional_portfolio_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'professional_portfolio_footer_background_image',array(
        'label' => __('Footer Background Image','professional-portfolio'),
        'section' => 'professional_portfolio_footer'
	)));

	$wp_customize->add_setting('professional_portfolio_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','professional-portfolio'),
		'section' => 'professional_portfolio_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'professional-portfolio' ),
			'center top'   => esc_html__( 'Top', 'professional-portfolio' ),
			'right top'   => esc_html__( 'Top Right', 'professional-portfolio' ),
			'left center'   => esc_html__( 'Left', 'professional-portfolio' ),
			'center center'   => esc_html__( 'Center', 'professional-portfolio' ),
			'right center'   => esc_html__( 'Right', 'professional-portfolio' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'professional-portfolio' ),
			'center bottom'   => esc_html__( 'Bottom', 'professional-portfolio' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'professional-portfolio' ),
		),
	));

  // Footer
  $wp_customize->add_setting('professional_portfolio_img_footer',array(
    'default'=> 'scroll',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
  ));
  $wp_customize->add_control('professional_portfolio_img_footer',array(
    'type' => 'select',
    'label' => __('Footer Background Attatchment','professional-portfolio'),
    'choices' => array(
      'fixed' => __('fixed','professional-portfolio'),
      'scroll' => __('scroll','professional-portfolio'),
    ),
    'section'=> 'professional_portfolio_footer',
  ));

  // footer padding
  $wp_customize->add_setting('professional_portfolio_footer_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('professional_portfolio_footer_padding',array(
    'label' => __('Footer Top Bottom Padding','professional-portfolio'),
    'description' => __('Enter a value in pixels. Example:20px','professional-portfolio'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'professional-portfolio' ),
    ),
    'section'=> 'professional_portfolio_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('professional_portfolio_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
  ));
  $wp_customize->add_control('professional_portfolio_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','professional-portfolio'),
    'section' => 'professional_portfolio_footer',
    'choices' => array(
      'Left' => __('Left','professional-portfolio'),
      'Center' => __('Center','professional-portfolio'),
      'Right' => __('Right','professional-portfolio')
    ),
  ) );

  $wp_customize->add_setting('professional_portfolio_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
  ));
  $wp_customize->add_control('professional_portfolio_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','professional-portfolio'),
    'section' => 'professional_portfolio_footer',
    'choices' => array(
      'Left' => __('Left','professional-portfolio'),
      'Center' => __('Center','professional-portfolio'),
      'Right' => __('Right','professional-portfolio')
  	),
	) );
	
	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('professional_portfolio_footer_text', array(
		'selector' => '.copyright p',
		'render_callback' => 'professional_portfolio_Customize_partial_professional_portfolio_footer_text',
	));

	$wp_customize->add_setting('professional_portfolio_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_footer_text',array(
		'label'	=> esc_html__('Copyright Text','professional-portfolio'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Copyright 2024, .....', 'professional-portfolio' ),
      ),
		'section'=> 'professional_portfolio_footer',
		'type'=> 'text'
	));

	// footer social icon
	$wp_customize->add_setting( 'professional_portfolio_footer_icon',array(
		'default' => false,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  	) );
	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_footer_icon',array(
		'label' => esc_html__( 'Show / Hide Footer Social Icon','professional-portfolio' ),
		'section' => 'professional_portfolio_footer'
  	)));

	$wp_customize->add_setting( 'professional_portfolio_copyright_hide_show',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'professional_portfolio_switch_sanitization'
	));
	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_copyright_hide_show',array(
		'label' => esc_html__( 'Show / Hide Copyright','professional-portfolio' ),
		'section' => 'professional_portfolio_footer'
	)));

	$wp_customize->add_setting('professional_portfolio_copyright_alingment',array(
	    'default' => 'center',
	    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
		));
		$wp_customize->add_control(new Professional_Portfolio_Image_Radio_Control($wp_customize, 'professional_portfolio_copyright_alingment', array(
	    'type' => 'select',
	    'label' => esc_html__('Copyright Alignment','professional-portfolio'),
	    'section' => 'professional_portfolio_footer',
	    'settings' => 'professional_portfolio_copyright_alingment',
	    'choices' => array(
	        'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
	        'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
	        'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
	))));

	$wp_customize->add_setting('professional_portfolio_copyright_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'professional_portfolio_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'professional-portfolio'),
		'section'  => 'professional_portfolio_footer',
	)));

	$wp_customize->add_setting('professional_portfolio_copyright_font_size',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_copyright_font_size',array(
		'label' => __('Copyright Font Size','professional-portfolio'),
		'description' => __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'professional-portfolio' ),
	    ),
		'section'=> 'professional_portfolio_footer',
		'type'=> 'text'
	));

  $wp_customize->add_setting( 'professional_portfolio_hide_show_scroll',array(
  	'default' => 1,
  	'transport' => 'refresh',
  	'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ));
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_hide_show_scroll',array(
  	'label' => esc_html__( 'Show / Hide Scroll to Top','professional-portfolio' ),
  	'section' => 'professional_portfolio_footer'
  )));

  //Selective Refresh
	$wp_customize->selective_refresh->add_partial('professional_portfolio_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'professional_portfolio_Customize_partial_professional_portfolio_scroll_to_top_icon',
	));

  $wp_customize->add_setting('professional_portfolio_scroll_top_alignment',array(
    'default' => 'Right',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control(new Professional_Portfolio_Image_Radio_Control($wp_customize, 'professional_portfolio_scroll_top_alignment', array(
    'type' => 'select',
    'label' => esc_html__('Scroll To Top','professional-portfolio'),
    'section' => 'professional_portfolio_footer',
    'settings' => 'professional_portfolio_scroll_top_alignment',
    'choices' => array(
        'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
        'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
        'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
  ))));

 	$wp_customize->add_setting('professional_portfolio_scroll_top_icon',array(
    'default' => 'fas fa-long-arrow-alt-up',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser($wp_customize,'professional_portfolio_scroll_top_icon',array(
    'label' => __('Add Scroll to Top Icon','professional-portfolio'),
    'transport' => 'refresh',
    'section' => 'professional_portfolio_footer',
    'setting' => 'professional_portfolio_scroll_top_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting('professional_portfolio_scroll_to_top_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('professional_portfolio_scroll_to_top_font_size',array(
    'label' => __('Icon Font Size','professional-portfolio'),
    'description' => __('Enter a value in pixels. Example:20px','professional-portfolio'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'professional-portfolio' ),
    ),
    'section'=> 'professional_portfolio_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('professional_portfolio_scroll_to_top_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('professional_portfolio_scroll_to_top_padding',array(
    'label' => __('Icon Top Bottom Padding','professional-portfolio'),
    'description' => __('Enter a value in pixels. Example:20px','professional-portfolio'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'professional-portfolio' ),
    ),
    'section'=> 'professional_portfolio_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('professional_portfolio_scroll_to_top_width',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('professional_portfolio_scroll_to_top_width',array(
    'label' => __('Icon Width','professional-portfolio'),
    'description' => __('Enter a value in pixels Example:20px','professional-portfolio'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'professional-portfolio' ),
  ),
	  'section'=> 'professional_portfolio_footer',
	  'type'=> 'text'
  ));

  $wp_customize->add_setting('professional_portfolio_scroll_to_top_height',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('professional_portfolio_scroll_to_top_height',array(
    'label' => __('Icon Height','professional-portfolio'),
    'description' => __('Enter a value in pixels. Example:20px','professional-portfolio'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'professional-portfolio' ),
    ),
    'section'=> 'professional_portfolio_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting( 'professional_portfolio_scroll_to_top_border_radius', array(
    'default'              => '',
    'transport'        => 'refresh',
    'sanitize_callback'    => 'professional_portfolio_sanitize_number_range'
  ) );
  $wp_customize->add_control( 'professional_portfolio_scroll_to_top_border_radius', array(
    'label'       => esc_html__( 'Icon Border Radius','professional-portfolio' ),
    'section'     => 'professional_portfolio_footer',
    'type'        => 'range',
    'input_attrs' => array(
      'step'             => 1,
      'min'              => 1,
      'max'              => 50,
    ),
  ) );

    $wp_customize->add_setting('professional_portfolio_align_footer_social_icon',array(
        'default' => 'center',
        'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_align_footer_social_icon',array(
        'type' => 'select',
        'label' => __('Social Icon Alignment ','professional-portfolio'),
        'section' => 'professional_portfolio_footer',
        'choices' => array(
            'left' => __('Left','professional-portfolio'),
            'right' => __('Right','professional-portfolio'),
            'center' => __('Center','professional-portfolio'),
        ),
	) );

 	//Blog Post
	$wp_customize->add_panel( 'professional_portfolio_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'professional-portfolio' ),
		'panel' => 'professional_portfolio_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'professional_portfolio_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'professional-portfolio' ),
		'panel' => 'professional_portfolio_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('professional_portfolio_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'professional_portfolio_Customize_partial_professional_portfolio_toggle_postdate',
	));

	//Blog layout
  $wp_customize->add_setting('professional_portfolio_blog_layout_option',array(
    'default' => 'Default',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
  ));
  $wp_customize->add_control(new Professional_Portfolio_Image_Radio_Control($wp_customize, 'professional_portfolio_blog_layout_option', array(
    'type' => 'select',
    'label' => __('Blog Post Layouts','professional-portfolio'),
    'section' => 'professional_portfolio_post_settings',
    'choices' => array(
      'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
      'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
      'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
  ))));

	$wp_customize->add_setting('professional_portfolio_theme_options',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_theme_options',array(
    'type' => 'select',
    'label' => esc_html__('Post Sidebar Layout','professional-portfolio'),
    'description' => esc_html__('Here you can change the sidebar layout for posts. ','professional-portfolio'),
    'section' => 'professional_portfolio_post_settings',
    'choices' => array(
        'Left Sidebar' => esc_html__('Left Sidebar','professional-portfolio'),
        'Right Sidebar' => esc_html__('Right Sidebar','professional-portfolio'),
        'One Column' => esc_html__('One Column','professional-portfolio'),
        'Three Columns' => esc_html__('Three Columns','professional-portfolio'),
        'Four Columns' => esc_html__('Four Columns','professional-portfolio'),
        'Grid Layout' => esc_html__('Grid Layout','professional-portfolio')
    ),
	) );


	$wp_customize->add_setting('professional_portfolio_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
  $wp_customize,'professional_portfolio_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_post_settings',
		'setting'	=> 'professional_portfolio_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting( 'professional_portfolio_blog_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ));
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_blog_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','professional-portfolio' ),
    'section' => 'professional_portfolio_post_settings'
  )));

	$wp_customize->add_setting('professional_portfolio_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
  $wp_customize,'professional_portfolio_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_post_settings',
		'setting'	=> 'professional_portfolio_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'professional_portfolio_blog_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ));
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_blog_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','professional-portfolio' ),
		'section' => 'professional_portfolio_post_settings'
  )));

  $wp_customize->add_setting('professional_portfolio_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
  $wp_customize,'professional_portfolio_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_post_settings',
		'setting'	=> 'professional_portfolio_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'professional_portfolio_blog_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ) );
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_blog_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','professional-portfolio' ),
		'section' => 'professional_portfolio_post_settings'
  )));

  $wp_customize->add_setting('professional_portfolio_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
  $wp_customize,'professional_portfolio_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_post_settings',
		'setting'	=> 'professional_portfolio_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'professional_portfolio_blog_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ) );
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_blog_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','professional-portfolio' ),
		'section' => 'professional_portfolio_post_settings'
  )));

  $wp_customize->add_setting( 'professional_portfolio_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
	));
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_featured_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','professional-portfolio' ),
		'section' => 'professional_portfolio_post_settings'
  )));

  $wp_customize->add_setting( 'professional_portfolio_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'professional_portfolio_sanitize_number_range'
	) );
	$wp_customize->add_control( 'professional_portfolio_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','professional-portfolio' ),
		'section'     => 'professional_portfolio_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'professional_portfolio_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'professional_portfolio_sanitize_number_range'
	) );
	$wp_customize->add_control( 'professional_portfolio_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','professional-portfolio' ),
		'section'     => 'professional_portfolio_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('professional_portfolio_blog_post_featured_image_dimension',array(
   'default' => 'default',
   'sanitize_callback'	=> 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','professional-portfolio'),
		'section'	=> 'professional_portfolio_post_settings',
		'choices' => array(
		'default' => __('Default','professional-portfolio'),
		'custom' => __('Custom Image Size','professional-portfolio'),
      ),
	));

	$wp_customize->add_setting('professional_portfolio_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('professional_portfolio_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'professional-portfolio' ),),
		'section'=> 'professional_portfolio_post_settings',
		'type'=> 'text',
		'active_callback' => 'professional_portfolio_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('professional_portfolio_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'professional-portfolio' ),),
		'section'=> 'professional_portfolio_post_settings',
		'type'=> 'text',
		'active_callback' => 'professional_portfolio_blog_post_featured_image_dimension'
	));

  $wp_customize->add_setting( 'professional_portfolio_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'professional_portfolio_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'professional_portfolio_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','professional-portfolio' ),
		'section'     => 'professional_portfolio_post_settings',
		'type'        => 'range',
		'settings'    => 'professional_portfolio_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('professional_portfolio_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','professional-portfolio'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','professional-portfolio'),
		'section'=> 'professional_portfolio_post_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('professional_portfolio_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Post Content','professional-portfolio'),
    'section' => 'professional_portfolio_post_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','professional-portfolio'),
        'Excerpt' => esc_html__('Excerpt','professional-portfolio'),
        'No Content' => esc_html__('No Content','professional-portfolio')
        ),
	) );

  $wp_customize->add_setting('professional_portfolio_blog_page_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_blog_page_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Blog Posts','professional-portfolio'),
    'section' => 'professional_portfolio_post_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','professional-portfolio'),
        'Without Blocks' => __('Without Blocks','professional-portfolio')
        ),
	) );

	$wp_customize->add_setting( 'professional_portfolio_blog_pagination_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ));
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_blog_pagination_hide_show',array(
		'label' => esc_html__( 'Show / Hide Blog Pagination','professional-portfolio' ),
		'section' => 'professional_portfolio_post_settings'
  )));

	$wp_customize->add_setting('professional_portfolio_blog_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_blog_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','professional-portfolio'),
		'input_attrs' => array(
      'placeholder' => __( '[...]', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'professional_portfolio_blog_pagination_type', array(
    'default'			=> 'blog-page-numbers',
    'sanitize_callback'	=> 'professional_portfolio_sanitize_choices'
  ));
  $wp_customize->add_control( 'professional_portfolio_blog_pagination_type', array(
    'section' => 'professional_portfolio_post_settings',
    'type' => 'select',
    'label' => __( 'Blog Pagination', 'professional-portfolio' ),
    'choices'		=> array(
      'blog-page-numbers'  => __( 'Numeric', 'professional-portfolio' ),
      'next-prev' => __( 'Older Posts/Newer Posts', 'professional-portfolio' ),
  )));

  // Button Settings
	$wp_customize->add_section( 'professional_portfolio_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'professional-portfolio' ),
		'panel' => 'professional_portfolio_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('professional_portfolio_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'professional_portfolio_Customize_partial_professional_portfolio_button_text',
	));

  $wp_customize->add_setting('professional_portfolio_button_text',array(
		'default'=> esc_html__('Read More','professional-portfolio'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_button_text',array(
		'label'	=> esc_html__('Add Button Text','professional-portfolio'),
		'input_attrs' => array(
    'placeholder' => esc_html__( 'Read More', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('professional_portfolio_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_button_font_size',array(
		'label'	=> __('Button Font Size','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
  		'placeholder' => __( '10px', 'professional-portfolio' ),
    ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'professional_portfolio_button_settings',
	));


	$wp_customize->add_setting( 'professional_portfolio_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'professional_portfolio_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'professional_portfolio_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','professional-portfolio' ),
		'section'     => 'professional_portfolio_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// button padding
	$wp_customize->add_setting('professional_portfolio_button_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_button_top_bottom_padding',array(
		'label'	=> __('Button Top Bottom Padding','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'professional-portfolio' ),
    ),
		'section'=> 'professional_portfolio_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_button_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_button_left_right_padding',array(
		'label'	=> __('Button Left Right Padding','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'professional-portfolio' ),
    ),
		'section'=> 'professional_portfolio_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'professional-portfolio' ),
  ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'professional_portfolio_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('professional_portfolio_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','professional-portfolio'),
		'choices' => array(
      'Uppercase' => __('Uppercase','professional-portfolio'),
      'Capitalize' => __('Capitalize','professional-portfolio'),
      'Lowercase' => __('Lowercase','professional-portfolio'),
    ),
		'section'=> 'professional_portfolio_button_settings',
	));

	// Related Post Settings
	$wp_customize->add_section( 'professional_portfolio_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'professional-portfolio' ),
		'panel' => 'professional_portfolio_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('professional_portfolio_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'professional_portfolio_Customize_partial_professional_portfolio_related_post_title',
	));

  	$wp_customize->add_setting( 'professional_portfolio_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_related_post',array(
		'label' => esc_html__( 'Related Post','professional-portfolio' ),
		'section' => 'professional_portfolio_related_posts_settings'
  	)));

  	$wp_customize->add_setting('professional_portfolio_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','professional-portfolio'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Related Post', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_related_posts_settings',
		'type'=> 'text'
	));

 	$wp_customize->add_setting('professional_portfolio_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'professional_portfolio_sanitize_number_absint'
	));
	$wp_customize->add_control('professional_portfolio_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','professional-portfolio'),
		'input_attrs' => array(
      'placeholder' => esc_html__( '3', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'professional_portfolio_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'professional_portfolio_sanitize_number_range'
	) );
	$wp_customize->add_control( 'professional_portfolio_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','professional-portfolio' ),
		'section'     => 'professional_portfolio_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'professional_portfolio_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('professional_portfolio_related_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_related_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','professional-portfolio'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','professional-portfolio'),
		'section'=> 'professional_portfolio_related_posts_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'professional_portfolio_related_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
	));
  	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_related_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','professional-portfolio' ),
		'section' => 'professional_portfolio_related_posts_settings'
  	)));

  	$wp_customize->add_setting( 'professional_portfolio_related_toggle_postdate',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'professional_portfolio_switch_sanitization'
	));
	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_related_toggle_postdate',array(
	    'label' => esc_html__( 'Show / Hide Post Date','professional-portfolio' ),
	    'section' => 'professional_portfolio_related_posts_settings'
	)));

  	$wp_customize->add_setting('professional_portfolio_related_postdate_icon',array(
	    'default' => 'fas fa-calendar-alt',
	    'sanitize_callback' => 'sanitize_text_field'
  	));
  	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
  	$wp_customize,'professional_portfolio_related_postdate_icon',array(
	    'label' => __('Add Post Date Icon','professional-portfolio'),
	    'transport' => 'refresh',
	    'section' => 'professional_portfolio_related_posts_settings',
	    'setting' => 'professional_portfolio_related_postdate_icon',
	    'type'    => 'icon'
  	)));

	$wp_customize->add_setting( 'professional_portfolio_related_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  	));
  	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_related_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','professional-portfolio' ),
		'section' => 'professional_portfolio_related_posts_settings'
  	)));

  	$wp_customize->add_setting('professional_portfolio_related_author_icon',array(
	    'default' => 'fas fa-user',
	    'sanitize_callback' => 'sanitize_text_field'
  	));
  	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
  	$wp_customize,'professional_portfolio_related_author_icon',array(
	    'label' => __('Add Author Icon','professional-portfolio'),
	    'transport' => 'refresh',
	    'section' => 'professional_portfolio_related_posts_settings',
	    'setting' => 'professional_portfolio_related_author_icon',
	    'type'    => 'icon'
  	)));

	$wp_customize->add_setting( 'professional_portfolio_related_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_related_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','professional-portfolio' ),
		'section' => 'professional_portfolio_related_posts_settings'
  	)));

  	$wp_customize->add_setting('professional_portfolio_related_comments_icon',array(
	    'default' => 'fa fa-comments',
	    'sanitize_callback' => 'sanitize_text_field'
  	));
  	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
  	$wp_customize,'professional_portfolio_related_comments_icon',array(
	    'label' => __('Add Comments Icon','professional-portfolio'),
	    'transport' => 'refresh',
	    'section' => 'professional_portfolio_related_posts_settings',
	    'setting' => 'professional_portfolio_related_comments_icon',
	    'type'    => 'icon'
  	)));

	$wp_customize->add_setting( 'professional_portfolio_related_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_related_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','professional-portfolio' ),
		'section' => 'professional_portfolio_related_posts_settings'
  	)));

  	$wp_customize->add_setting('professional_portfolio_related_time_icon',array(
	    'default' => 'fas fa-clock',
	    'sanitize_callback' => 'sanitize_text_field'
  	));
  	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
  	$wp_customize,'professional_portfolio_related_time_icon',array(
	    'label' => __('Add Time Icon','professional-portfolio'),
	    'transport' => 'refresh',
	    'section' => 'professional_portfolio_related_posts_settings',
	    'setting' => 'professional_portfolio_related_time_icon',
	    'type'    => 'icon'
  	)));

  	$wp_customize->add_setting( 'professional_portfolio_related_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'professional_portfolio_sanitize_number_range'
	) );
	$wp_customize->add_control( 'professional_portfolio_related_image_box_shadow', array(
		'label'       => esc_html__( 'Related post Image Box Shadow','professional-portfolio' ),
		'section'     => 'professional_portfolio_related_posts_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

  	$wp_customize->add_setting('professional_portfolio_related_button_text',array(
		'default'=> esc_html__('Read More','professional-portfolio'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_related_button_text',array(
		'label'	=> esc_html__('Add Button Text','professional-portfolio'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_related_posts_settings',
		'type'=> 'text'
	));

	// Single Posts Settings
	$wp_customize->add_section( 'professional_portfolio_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'professional-portfolio' ),
		'panel' => 'professional_portfolio_blog_post_parent_panel',
	));

	$wp_customize->add_setting('professional_portfolio_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
  $wp_customize,'professional_portfolio_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_single_blog_settings',
		'setting'	=> 'professional_portfolio_single_postdate_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'professional_portfolio_single_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_switch_sanitization'
	) );
	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_single_postdate',array(
		'label' => esc_html__( 'Show / Hide Date','professional-portfolio' ),
		'section' => 'professional_portfolio_single_blog_settings'
	)));

	$wp_customize->add_setting('professional_portfolio_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
  $wp_customize,'professional_portfolio_single_author_icon',array(
		'label'	=> __('Add Author Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_single_blog_settings',
		'setting'	=> 'professional_portfolio_single_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'professional_portfolio_single_author',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_switch_sanitization'
	) );
	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_single_author',array(
    'label' => esc_html__( 'Show / Hide Author','professional-portfolio' ),
    'section' => 'professional_portfolio_single_blog_settings'
	)));

 	$wp_customize->add_setting('professional_portfolio_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
  $wp_customize,'professional_portfolio_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_single_blog_settings',
		'setting'	=> 'professional_portfolio_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'professional_portfolio_single_comments',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_switch_sanitization'
	) );
	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_single_comments',array(
    'label' => esc_html__( 'Show / Hide Comments','professional-portfolio' ),
    'section' => 'professional_portfolio_single_blog_settings'
	)));

	$wp_customize->add_setting('professional_portfolio_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
  $wp_customize,'professional_portfolio_single_time_icon',array(
		'label'	=> __('Add Time Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_single_blog_settings',
		'setting'	=> 'professional_portfolio_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'professional_portfolio_single_time',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_switch_sanitization'
	) );
	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_single_time',array(
    'label' => esc_html__( 'Show / Hide Time','professional-portfolio' ),
    'section' => 'professional_portfolio_single_blog_settings'
	)));

	$wp_customize->add_setting( 'professional_portfolio_toggle_tags',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
	));
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','professional-portfolio' ),
		'section' => 'professional_portfolio_single_blog_settings'
  )));

	$wp_customize->add_setting( 'professional_portfolio_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ) );
 	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','professional-portfolio' ),
		'section' => 'professional_portfolio_single_blog_settings'
  )));

	// Single Posts Category
 	 $wp_customize->add_setting( 'professional_portfolio_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ) );
	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_single_post_category',array(
		'label' => esc_html__( 'Show / Hide Category','professional-portfolio' ),
		'section' => 'professional_portfolio_single_blog_settings'
  )));


  $wp_customize->add_setting( 'professional_portfolio_singlepost_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'professional_portfolio_sanitize_number_range'
	) );
	$wp_customize->add_control( 'professional_portfolio_singlepost_image_box_shadow', array(
		'label'       => esc_html__( 'Single post Image Box Shadow','professional-portfolio' ),
		'section'     => 'professional_portfolio_single_blog_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('professional_portfolio_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','professional-portfolio'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','professional-portfolio'),
		'section'=> 'professional_portfolio_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'professional_portfolio_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
	));
	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_single_blog_post_navigation_show_hide', array(
	  'label' => esc_html__( 'Show / Hide Post Navigation','professional-portfolio' ),
	  'section' => 'professional_portfolio_single_blog_settings'
	)));

	$wp_customize->add_setting( 'professional_portfolio_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
    ) );
 	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','professional-portfolio' ),
		'section' => 'professional_portfolio_single_blog_settings'
  )));

	//navigation text
	$wp_customize->add_setting('professional_portfolio_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','professional-portfolio'),
		'input_attrs' => array(
      'placeholder' => __( 'PREVIOUS', 'professional-portfolio' ),
      ),
		'section'=> 'professional_portfolio_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','professional-portfolio'),
		'input_attrs' => array(
      'placeholder' => __( 'NEXT', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('professional_portfolio_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','professional-portfolio'),
		'input_attrs' => array(
      'placeholder' => __( 'Leave a Reply', 'professional-portfolio' ),
    	),
		'section'=> 'professional_portfolio_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('professional_portfolio_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','professional-portfolio'),
		'input_attrs' => array(
    'placeholder' => __( 'Post Comment', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','professional-portfolio'),
		'description'	=> __('Enter a value in %. Example:50%','professional-portfolio'),
		'input_attrs' => array(
      'placeholder' => __( '100%', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_single_blog_settings',
		'type'=> 'text'
	));

	 // Grid layout setting
	$wp_customize->add_section( 'professional_portfolio_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'professional-portfolio' ),
		'panel' => 'professional_portfolio_blog_post_parent_panel',
	));

	$wp_customize->add_setting('professional_portfolio_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
        $wp_customize,'professional_portfolio_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_grid_layout_settings',
		'setting'	=> 'professional_portfolio_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'professional_portfolio_grid_postdate',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ) );
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_grid_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','professional-portfolio' ),
    'section' => 'professional_portfolio_grid_layout_settings'
  )));

	$wp_customize->add_setting('professional_portfolio_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
        $wp_customize,'professional_portfolio_grid_author_icon',array(
		'label'	=> __('Add Author Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_grid_layout_settings',
		'setting'	=> 'professional_portfolio_grid_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'professional_portfolio_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ) );
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_grid_author',array(
		'label' => esc_html__( 'Show / Hide Author','professional-portfolio' ),
		'section' => 'professional_portfolio_grid_layout_settings'
  )));

  $wp_customize->add_setting('professional_portfolio_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
        $wp_customize,'professional_portfolio_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_grid_layout_settings',
		'setting'	=> 'professional_portfolio_grid_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'professional_portfolio_grid_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ) );
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_grid_time',array(
		'label' => esc_html__( 'Show / Hide Time','professional-portfolio' ),
		'section' => 'professional_portfolio_grid_layout_settings'
  )));

  $wp_customize->add_setting('professional_portfolio_grid_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
        $wp_customize,'professional_portfolio_grid_time_icon',array(
		'label'	=> __('Add Time Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_grid_layout_settings',
		'setting'	=> 'professional_portfolio_grid_time_icon',
		'type'		=> 'icon'
	)));

  	$wp_customize->add_setting( 'professional_portfolio_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_grid_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','professional-portfolio' ),
		'section' => 'professional_portfolio_grid_layout_settings'
  	)));

  	$wp_customize->add_setting( 'professional_portfolio_grid_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
	));
  	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_grid_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','professional-portfolio' ),
		'section' => 'professional_portfolio_grid_layout_settings'
  	)));

 	$wp_customize->add_setting('professional_portfolio_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','professional-portfolio'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','professional-portfolio'),
		'section'=> 'professional_portfolio_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('professional_portfolio_display_grid_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_display_grid_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Grid Posts','professional-portfolio'),
    'section' => 'professional_portfolio_grid_layout_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','professional-portfolio'),
      'Without Blocks' => __('Without Blocks','professional-portfolio')
      ),
	) );

	$wp_customize->add_setting('professional_portfolio_grid_button_text',array(
		'default'=> esc_html__('Read More','professional-portfolio'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','professional-portfolio'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','professional-portfolio'),
		'input_attrs' => array(
        'placeholder' => __( '[...]', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('professional_portfolio_grid_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_grid_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Grid Post Content','professional-portfolio'),
    'section' => 'professional_portfolio_grid_layout_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','professional-portfolio'),
      'Excerpt' => esc_html__('Excerpt','professional-portfolio'),
      'No Content' => esc_html__('No Content','professional-portfolio')
    ),
	) );

  $wp_customize->add_setting( 'professional_portfolio_grid_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'professional_portfolio_sanitize_number_range'
	) );
	$wp_customize->add_control( 'professional_portfolio_grid_featured_image_border_radius', array(
		'label'       => esc_html__( 'Grid Featured Image Border Radius','professional-portfolio' ),
		'section'     => 'professional_portfolio_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'professional_portfolio_grid_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'professional_portfolio_sanitize_number_range'
	) );
	$wp_customize->add_control( 'professional_portfolio_grid_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Grid Featured Image Box Shadow','professional-portfolio' ),
		'section'     => 'professional_portfolio_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Other
	$wp_customize->add_panel( 'professional_portfolio_other_parent_panel', array(
		'title' => esc_html__( 'Other Settings', 'professional-portfolio' ),
		'panel' => 'professional_portfolio_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'professional_portfolio_left_right', array(
  	'title' => esc_html__('General Settings', 'professional-portfolio'),
		'panel' => 'professional_portfolio_other_parent_panel'
	) );

	$wp_customize->add_setting('professional_portfolio_width_option',array(
    'default' => 'Full Width',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control(new Professional_Portfolio_Image_Radio_Control($wp_customize, 'professional_portfolio_width_option', array(
    'type' => 'select',
    'label' => esc_html__('Width Layouts','professional-portfolio'),
    'description' => esc_html__('Here you can change the width layout of Website.','professional-portfolio'),
    'section' => 'professional_portfolio_left_right',
    'choices' => array(
        'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
        'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
        'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
  ))));

	$wp_customize->add_setting('professional_portfolio_page_layout',array(
    'default' => 'One_Column',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_page_layout',array(
    'type' => 'select',
    'label' => esc_html__('Page Sidebar Layout','professional-portfolio'),
    'description' => esc_html__('Here you can change the sidebar layout for pages. ','professional-portfolio'),
    'section' => 'professional_portfolio_left_right',
    'choices' => array(
        'Left_Sidebar' => esc_html__('Left Sidebar','professional-portfolio'),
        'Right_Sidebar' => esc_html__('Right Sidebar','professional-portfolio'),
        'One_Column' => esc_html__('One Column','professional-portfolio')
    ),
	) );
	
    // Pre-Loader
	$wp_customize->add_setting( 'professional_portfolio_loader_enable',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ) );
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_loader_enable',array(
    'label' => esc_html__( 'Pre-Loader','professional-portfolio' ),
    'section' => 'professional_portfolio_left_right'
  )));

	$wp_customize->add_setting('professional_portfolio_preloader_bg_color', array(
		'default'           => '#F4F000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'professional_portfolio_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'professional-portfolio'),
		'section'  => 'professional_portfolio_left_right',
	)));

	$wp_customize->add_setting('professional_portfolio_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'professional_portfolio_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'professional-portfolio'),
		'section'  => 'professional_portfolio_left_right',
	)));

	$wp_customize->add_setting('professional_portfolio_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'professional_portfolio_preloader_bg_img',array(
    'label' => __('Preloader Background Image','professional-portfolio'),
    'section' => 'professional_portfolio_left_right'
	)));

	$wp_customize->add_setting( 'professional_portfolio_single_page_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
    ) );
    $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_single_page_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Page Breadcrumb','professional-portfolio' ),
		'section' => 'professional_portfolio_left_right'
    )));

   $wp_customize->add_setting('professional_portfolio_bradcrumbs_alignment',array(
        'default' => 'Left',
        'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_bradcrumbs_alignment',array(
        'type' => 'select',
        'label' => __('Bradcrumbs Alignment','professional-portfolio'),
        'section' => 'professional_portfolio_left_right',
        'choices' => array(
            'Left' => __('Left','professional-portfolio'),
            'Right' => __('Right','professional-portfolio'),
            'Center' => __('Center','professional-portfolio'),
        ),
	) );

    //404 Page Setting
	$wp_customize->add_section('professional_portfolio_404_page',array(
		'title'	=> __('404 Page Settings','professional-portfolio'),
		'panel' => 'professional_portfolio_other_parent_panel',
	));

	$wp_customize->add_setting('professional_portfolio_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('professional_portfolio_404_page_title',array(
		'label'	=> __('Add Title','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('professional_portfolio_404_page_content',array(
		'label'	=> __('Add Text','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_404_page_button_text',array(
		'label'	=> __('Add Button Text','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( 'Go Back', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('professional_portfolio_no_results_page',array(
		'title'	=> __('No Results Page Settings','professional-portfolio'),
		'panel' => 'professional_portfolio_other_parent_panel',
	));

	$wp_customize->add_setting('professional_portfolio_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('professional_portfolio_no_results_page_title',array(
		'label'	=> __('Add Title','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('professional_portfolio_no_results_page_content',array(
		'label'	=> __('Add Text','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('professional_portfolio_social_icon_settings',array(
		'title'	=> __('Sidebar Social Icons Settings','professional-portfolio'),
		'panel' => 'professional_portfolio_other_parent_panel',
	));

	$wp_customize->add_setting('professional_portfolio_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_social_icon_padding',array(
		'label'	=> __('Icon Padding','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_social_icon_width',array(
		'label'	=> __('Icon Width','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_social_icon_height',array(
		'label'	=> __('Icon Height','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_social_icon_settings',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('professional_portfolio_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','professional-portfolio'),
		'panel' => 'professional_portfolio_other_parent_panel',
	));

	$wp_customize->add_setting( 'professional_portfolio_stickyheader_hide_show',array(
	    'default' => 0,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  	));  
  	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_stickyheader_hide_show',array(
	    'label' => esc_html__( 'Show / Hide Sticky Header','professional-portfolio' ),
	    'section' => 'professional_portfolio_responsive_media'
  	)));

	$wp_customize->add_setting( 'professional_portfolio_resp_slider_hide_show',array(
      	'default' => 1,
     	'transport' => 'refresh',
      	'sanitize_callback' => 'professional_portfolio_switch_sanitization'
    ));
    $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_resp_slider_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Banner','professional-portfolio' ),
      	'section' => 'professional_portfolio_responsive_media'
    )));

    $wp_customize->add_setting( 'professional_portfolio_sidebar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
    ));
    $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_sidebar_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Sidebar','professional-portfolio' ),
      	'section' => 'professional_portfolio_responsive_media'
    )));

    $wp_customize->add_setting( 'professional_portfolio_responsive_preloader_hide',array(
        'default' => false,
        'transport' => 'refresh',
        'sanitize_callback' => 'professional_portfolio_switch_sanitization'
    ) );
    $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_responsive_preloader_hide',array(
        'label' => esc_html__( 'Show / Hide Preloader','professional-portfolio' ),
        'section' => 'professional_portfolio_responsive_media'
    )));

    $wp_customize->add_setting( 'professional_portfolio_resp_scroll_top_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
	));
	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_resp_scroll_top_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Scroll To Top','professional-portfolio' ),
    	'section' => 'professional_portfolio_responsive_media'
	)));

  	$wp_customize->add_setting('professional_portfolio_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
        $wp_customize,'professional_portfolio_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_responsive_media',
		'setting'	=> 'professional_portfolio_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('professional_portfolio_res_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Professional_Portfolio_Fontawesome_Icon_Chooser(
        $wp_customize,'professional_portfolio_res_close_menu_icon',array(
		'label'	=> __('Add Close Menu Icon','professional-portfolio'),
		'transport' => 'refresh',
		'section'	=> 'professional_portfolio_responsive_media',
		'setting'	=> 'professional_portfolio_res_close_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('professional_portfolio_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#F4F000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'professional_portfolio_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'professional-portfolio'),
		'section'  => 'professional_portfolio_responsive_media',
	)));

  //Woocommerce settings
	$wp_customize->add_section('professional_portfolio_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'professional-portfolio'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'professional_portfolio_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'professional_portfolio_customize_partial_professional_portfolio_woocommerce_shop_page_sidebar', ) );

    //Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'professional_portfolio_woocommerce_shop_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ) );
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Shop Page Sidebar','professional-portfolio' ),
		'section' => 'professional_portfolio_woocommerce_section'
  )));

   $wp_customize->add_setting('professional_portfolio_shop_page_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_shop_page_layout',array(
    'type' => 'select',
    'label' => __('Shop Page Sidebar Layout','professional-portfolio'),
    'section' => 'professional_portfolio_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','professional-portfolio'),
        'Right Sidebar' => __('Right Sidebar','professional-portfolio'),
    ),
	) );

   //Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'professional_portfolio_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'professional_portfolio_customize_partial_professional_portfolio_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'professional_portfolio_woocommerce_single_product_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'professional_portfolio_switch_sanitization'
   ) );
 	$wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Single Product Sidebar','professional-portfolio' ),
		'section' => 'professional_portfolio_woocommerce_section'
  )));

   $wp_customize->add_setting('professional_portfolio_single_product_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_single_product_layout',array(
    'type' => 'select',
    'label' => __('Single Product Sidebar Layout','professional-portfolio'),
    'section' => 'professional_portfolio_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','professional-portfolio'),
        'Right Sidebar' => __('Right Sidebar','professional-portfolio'),
    ),
	) );

	//Products per page
    $wp_customize->add_setting('professional_portfolio_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'professional_portfolio_sanitize_float'
	));
	$wp_customize->add_control('professional_portfolio_products_per_page',array(
		'label'	=> __('Products Per Page','professional-portfolio'),
		'description' => __('Display on shop page','professional-portfolio'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'professional_portfolio_woocommerce_section',
		'type'=> 'number',
	));

    //Products per row
    $wp_customize->add_setting('professional_portfolio_products_per_row',array(
		'default'=> '4',
		'sanitize_callback'	=> 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_products_per_row',array(
		'label'	=> __('Products Per Row','professional-portfolio'),
		'description' => __('Display on shop page','professional-portfolio'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'professional_portfolio_woocommerce_section',
		'type'=> 'select',
		));

	//Products padding
	$wp_customize->add_setting('professional_portfolio_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'professional_portfolio_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'professional_portfolio_sanitize_number_range'
	) );
	$wp_customize->add_control( 'professional_portfolio_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','professional-portfolio' ),
		'section'     => 'professional_portfolio_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'professional_portfolio_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'professional_portfolio_sanitize_number_range'
	) );
	$wp_customize->add_control( 'professional_portfolio_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','professional-portfolio' ),
		'section'     => 'professional_portfolio_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'professional_portfolio_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'professional_portfolio_sanitize_number_range'
	) );
	$wp_customize->add_control( 'professional_portfolio_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','professional-portfolio' ),
		'section'     => 'professional_portfolio_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('professional_portfolio_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_woocommerce_section',
		'type'=> 'text'
	));

	//Products Sale Badge
	$wp_customize->add_setting('professional_portfolio_woocommerce_sale_position',array(
    'default' => 'right',
    'sanitize_callback' => 'professional_portfolio_sanitize_choices'
	));
	$wp_customize->add_control('professional_portfolio_woocommerce_sale_position',array(
    'type' => 'select',
    'label' => __('Sale Badge Position','professional-portfolio'),
    'section' => 'professional_portfolio_woocommerce_section',
    'choices' => array(
        'left' => __('Left','professional-portfolio'),
        'right' => __('Right','professional-portfolio'),
    ),
	) );

	$wp_customize->add_setting('professional_portfolio_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('professional_portfolio_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_portfolio_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','professional-portfolio'),
		'description'	=> __('Enter a value in pixels. Example:20px','professional-portfolio'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'professional-portfolio' ),
        ),
		'section'=> 'professional_portfolio_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'professional_portfolio_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'professional_portfolio_sanitize_number_range'
	) );
	$wp_customize->add_control( 'professional_portfolio_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','professional-portfolio' ),
		'section'     => 'professional_portfolio_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Related Product
  $wp_customize->add_setting( 'professional_portfolio_related_product_show_hide',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'professional_portfolio_switch_sanitization'
  ) );
  $wp_customize->add_control( new Professional_Portfolio_Toggle_Switch_Custom_Control( $wp_customize, 'professional_portfolio_related_product_show_hide',array(
    'label' => esc_html__( 'Show / Hide Related product','professional-portfolio' ),
    'section' => 'professional_portfolio_woocommerce_section'
  )));

}

add_action( 'customize_register', 'professional_portfolio_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Professional_Portfolio_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Professional_Portfolio_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Professional_Portfolio_Customize_Section_Pro( $manager,'professional_portfolio_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'PORTFOLIO PRO', 'professional-portfolio' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'professional-portfolio' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/products/portfolio-wordpress-theme'),
		) )	);

		$manager->add_section(new Professional_Portfolio_Customize_Section_Pro($manager,'professional_portfolio_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'professional-portfolio' ),
			'pro_text' => esc_html__( 'DOCS', 'professional-portfolio' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-professional-portfolio/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'professional-portfolio-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'professional-portfolio-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Professional_Portfolio_Customize::get_instance();