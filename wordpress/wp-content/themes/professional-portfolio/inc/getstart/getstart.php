<?php
//about theme info
add_action( 'admin_menu', 'professional_portfolio_gettingstarted' );
function professional_portfolio_gettingstarted() {
	add_theme_page( esc_html__('About Professional Portfolio ', 'professional-portfolio'), esc_html__('Theme Demo Import', 'professional-portfolio'), 'edit_theme_options', 'professional_portfolio_guide', 'professional_portfolio_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function professional_portfolio_admin_theme_style() {
	wp_enqueue_style('professional-portfolio-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('professional-portfolio-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'professional_portfolio_admin_theme_style');

//guidline for about theme
function professional_portfolio_mostrar_guide() { 
	//custom function about theme customizer
	$professional_portfolio_return = add_query_arg( array()) ;
	$professional_portfolio_theme = wp_get_theme( 'professional-portfolio' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to Professional Portfolio ', 'professional-portfolio' ); ?> <span class="version"><?php esc_html_e( 'Version', 'professional-portfolio' ); ?>: <?php echo esc_html($professional_portfolio_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','professional-portfolio'); ?></p>
    </div>
    <div class="col-right coupen-section">
		<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<div class="theme-info">
					<div class="theme-info-left">
						<h2><?php esc_html_e('TRY PREMIUM','professional-portfolio'); ?></h2>
						<h4><?php esc_html_e('PROFESSIONAL PORTFOLIO THEME','professional-portfolio'); ?></h4>
					</div>	
					<div class="theme-info-right"></div>
				</div>	
				<div class="dicount-row">
					<div class="disc-sec">	
						<h5 class="disc-text"><?php esc_html_e('GET THE FLAT DISCOUNT OF','professional-portfolio'); ?></h5>
						<h1 class="disc-per"><?php esc_html_e('20%','professional-portfolio'); ?></h1>	
					</div>
					<div class="coupen-info">
						<h5 class="coupen-code"><?php esc_html_e('"VWPRO20"','professional-portfolio'); ?></h5>
						<h5 class="coupen-text"><?php esc_html_e('USE COUPON CODE','professional-portfolio'); ?></h5>
						<div class="info-link">						
							<a href="<?php echo esc_url( PROFESSIONAL_PORTFOLIO_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'UPGRADE TO PRO', 'professional-portfolio' ); ?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div>
		
    </div>

    <div class="tab-sec">
    	<div class="tab">
    		<button class="tablinks" onclick="professional_portfolio_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'professional-portfolio' ); ?></button>
			<button class="tablinks" onclick="professional_portfolio_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'professional-portfolio' ); ?></button>
			
			<button class="tablinks" onclick="professional_portfolio_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'professional-portfolio' ); ?></button>
  			<button class="tablinks" onclick="professional_portfolio_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free VS Premium', 'professional-portfolio' ); ?></button>
  			<button class="tablinks" onclick="professional_portfolio_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 350+ Themes Bundle at $99', 'professional-portfolio' ); ?></button>
		</div>

		<?php 
			$professional_portfolio_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$professional_portfolio_plugin_custom_css ='display: block';
			}
		?>

		<div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'professional-portfolio' ); ?></h3>
				<?php 
				/* Get Started. */ 
				require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );
				?>
			</div>

		</div>
		
		<div id="lite_theme" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Professional_Portfolio_Plugin_Activation_Settings::get_instance();
				$professional_portfolio_actions = $plugin_ins->recommended_actions;
				?>
				<div class="professional-portfolio-recommended-plugins">
				    <div class="professional-portfolio-action-list">
				        <?php if ($professional_portfolio_actions): foreach ($professional_portfolio_actions as $key => $professional_portfolio_actionValue): ?>
				                <div class="professional-portfolio-action" id="<?php echo esc_attr($professional_portfolio_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($professional_portfolio_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($professional_portfolio_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($professional_portfolio_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','professional-portfolio'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($professional_portfolio_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'professional-portfolio' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('The Professional Portfolio WordPress Theme is a sophisticated and versatile free theme designed to showcase your work in a striking, dark color contrast layout. Ideal for creative professionals, artists, designers, Business Portfolio, Corporate Portfolio, Freelance Showcase, Creative Resume, Personal Branding, Professional CV, Career Portfolio, Job Application, Executive Portfolio, Business Profile, Skill Showcase, Talent Presentation, Consultant Portfolio, Agency Portfolio, Project Display, Leadership Profile, Industry Portfolio, Portfolio Website, Professional Growth, Executive Resume, Creative Portfolio, Client Showcase, Online Resume, Creative Showcase, Digital Resume, Personal Showcase, Photography Showcase, Graphic Design Gallery, Web Developer Showcase, Resume Website, Professional Showcase, Art Collection, Design Display, Creative Work Examples, Personal Website, Visual Resume, Freelance Showcase, Art Display, Digital Artworks, Career Showcase, Creative Work Samples, Resume Template, Artist Showcase, Service Portfolio, Talent Profile, Experience Display, Photographers, and freelancers, and more. This theme offers a sleek and modern aesthetic that highlights your portfolio with elegance and impact. Whether youre a graphic designer looking to display your latest projects, a photographer seeking to create an eye-catching gallery, or a freelancer aiming to build a compelling online presence, this theme provides all the essential features you need. The theme features a dynamic Home Page Slider that draws visitors’ attention to your most impressive work, ensuring that your key projects are showcased front and center. The Portfolio Section is designed to present your work in an organized and visually appealing manner, allowing you to categorize and highlight different projects effortlessly. This section is particularly useful for professionals who need to demonstrate their skills and accomplishments to potential clients or employers. The Professional Portfolio theme also includes a dedicated About Me Section where you can introduce yourself or your business, share your story, and outline your expertise. The Blog Section allows you to post updates, industry insights, and articles, keeping your audience engaged and informed. Additionally, the Contact Form makes it easy for potential clients to reach out and inquire about your services. With its dark color contrast, the Professional Portfolio theme ensures that your content stands out with a modern and stylish flair, making it an excellent choice for any professional looking to make a strong impression online.','professional-portfolio'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'professional-portfolio' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'professional-portfolio' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( PROFESSIONAL_PORTFOLIO_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'professional-portfolio' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'professional-portfolio'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'professional-portfolio'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'professional-portfolio'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'professional-portfolio'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'professional-portfolio'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( PROFESSIONAL_PORTFOLIO_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'professional-portfolio'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'professional-portfolio'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'professional-portfolio'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( PROFESSIONAL_PORTFOLIO_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'professional-portfolio'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'professional-portfolio' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','professional-portfolio'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=professional_portfolio_top_bar') ); ?>" target="_blank"><?php esc_html_e('Header Sidebar','professional-portfolio'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=professional_portfolio_bannersettings') ); ?>" target="_blank"><?php esc_html_e('Banner Settings','professional-portfolio'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=professional_portfolio_our_places_section') ); ?>" target="_blank"><?php esc_html_e('Case Studies Section','professional-portfolio'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=professional_portfolio_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','professional-portfolio'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','professional-portfolio'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=professional_portfolio_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','professional-portfolio'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=professional_portfolio_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','professional-portfolio'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','professional-portfolio'); ?></a>
								</div>
							</div>

						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','professional-portfolio'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','professional-portfolio'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','professional-portfolio'); ?></span><?php esc_html_e(' Go to ','professional-portfolio'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','professional-portfolio'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','professional-portfolio'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','professional-portfolio'); ?></span><?php esc_html_e(' Go to ','professional-portfolio'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','professional-portfolio'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','professional-portfolio'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','professional-portfolio'); ?> <a class="doc-links" href="<?php echo esc_url( PROFESSIONAL_PORTFOLIO_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','professional-portfolio'); ?></a></p>
			  	</div>
			</div>
		</div>


		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'professional-portfolio' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('The Portfolio WordPress Theme is a versatile and elegant solution tailored for creative professionals, freelancers, designers, photographers, and agencies who want to showcase their work with style and sophistication. This theme offers a perfect blend of visual appeal and functionality, allowing you to create a portfolio that not only captivates but also converts potential clients. With engaging animations woven throughout the theme, your website will stand out and make a lasting impression. The "About Us" section is designed to introduce yourself or your team, complete with a convenient "Download CV" link, making it easier for potential clients to learn more about your qualifications. Highlight your expertise and services with the dedicated "Service Offering" section, while the "Personal Projects" and "Case Studies" sections allow you to display your work in detail, showcasing your skills and accomplishments. The Marque Bar keeps your visitors informed with the latest announcements, while the "Honors and Awards" section adds credibility by displaying your achievements. Build trust and encourage conversions with the "Testimonial" section, and proudly showcase the brands you have worked with. The theme also includes a well-structured blog section to share insights and updates, a "Hire Me" section complete with a contact form for easy inquiries, and a responsive footer to ensure a seamless browsing experience across all devices.','professional-portfolio'); ?></p>
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( PROFESSIONAL_PORTFOLIO_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'professional-portfolio'); ?></a>
					<a href="<?php echo esc_url( PROFESSIONAL_PORTFOLIO_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'professional-portfolio'); ?></a>
					<a href="<?php echo esc_url( PROFESSIONAL_PORTFOLIO_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'professional-portfolio'); ?></a>
					<a href="<?php echo esc_url( PROFESSIONAL_PORTFOLIO_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 350+ Themes Bundle at $99', 'professional-portfolio'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'professional-portfolio' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'professional-portfolio'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'professional-portfolio'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Banner Settings', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'professional-portfolio'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'professional-portfolio'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'professional-portfolio'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'professional-portfolio'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'professional-portfolio'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'professional-portfolio'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'professional-portfolio'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'professional-portfolio'); ?></td>
								<td class="table-img"><?php esc_html_e('13', 'professional-portfolio'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template / Support Templates', 'professional-portfolio'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'professional-portfolio'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'professional-portfolio'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'professional-portfolio'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'professional-portfolio'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Left/Right Sidebar)', 'professional-portfolio'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Video Gallery', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Professional Portfolio ', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Detail Services', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('About Business Page', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Team Member Page', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Project Description Page', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support Page', 'professional-portfolio'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( PROFESSIONAL_PORTFOLIO_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'professional-portfolio'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   <div class="col-left-pro">
		   	<h3><?php esc_html_e( 'WP Theme Bundle', 'professional-portfolio' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 350+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','professional-portfolio'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'professional-portfolio' ); ?></h4>
		    		<p><?php esc_html_e('350+ Premium Themes & 5+ Plugins.', 'professional-portfolio'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'professional-portfolio'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'professional-portfolio'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'professional-portfolio'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'professional-portfolio'); ?></p>
		    	</div>
		    	<p><?php esc_html_e('Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!', 'professional-portfolio'); ?></p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( PROFESSIONAL_PORTFOLIO_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'professional-portfolio'); ?></a>
					<a href="<?php echo esc_url( PROFESSIONAL_PORTFOLIO_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'professional-portfolio'); ?></a>
				</div>
		   </div>
		   <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   </div>		    
		</div>
	</div>
</div>

<?php } ?>