<div class="theme-offer">
	<?php 
    // Check if the demo import has been completed
    $professional_portfolio_demo_import_completed = get_option('professional_portfolio_demo_import_completed', false);

    // If the demo import is completed, display the "View Site" button
    if ($professional_portfolio_demo_import_completed) {
      echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'professional-portfolio') . '</p>';
      echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'professional-portfolio') . '</a></span>';
    }

    if (isset($_POST['submit'])) {

    // Check if ibtana visual editor is installed and activated
    if (!is_plugin_active('ibtana-visual-editor/plugin.php')) {
      // Install the plugin if it doesn't exist
      $professional_portfolio_plugin_slug = 'ibtana-visual-editor';
      $professional_portfolio_plugin_file = 'ibtana-visual-editor/plugin.php';

      // Check if plugin is installed
      $professional_portfolio_installed_plugins = get_plugins();
      if (!isset($professional_portfolio_installed_plugins[$professional_portfolio_plugin_file])) {
          include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
          include_once(ABSPATH . 'wp-admin/includes/file.php');
          include_once(ABSPATH . 'wp-admin/includes/misc.php');
          include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

          // Install the plugin
          $professional_portfolio_upgrader = new Plugin_Upgrader();
          $professional_portfolio_upgrader->install('https://downloads.wordpress.org/plugin/ibtana-visual-editor.latest-stable.zip');
      }
      // Activate the plugin
      activate_plugin($professional_portfolio_plugin_file);
    }    

        // Create a front page and assign the template
        $professional_portfolio_home_page = null;
        // Using WP_Query instead of get_page_by_title()
        $professional_portfolio_home_query = new WP_Query(array(
           'post_type' => 'page',
           'title' => 'Home',
           'post_status' => 'publish',
           'posts_per_page' => 1
        ));
        if (!$professional_portfolio_home_query->have_posts()) {
           $professional_portfolio_home_title = 'Home';           
           // Create the page
           $professional_portfolio_home = array(
               'post_type' => 'page',
               'post_title' => $professional_portfolio_home_title,
               'post_status' => 'publish',
               'post_author' => 1,
               'post_slug' => 'home'
           );
           $professional_portfolio_home_id = wp_insert_post($professional_portfolio_home);
        } else {
           $professional_portfolio_home_page = $professional_portfolio_home_query->posts[0];
           $professional_portfolio_home_id = $professional_portfolio_home_page->ID;
        }

        // Set the home page template
        add_post_meta($professional_portfolio_home_id, '_wp_page_template', 'page-template/custom-home-page.php');

        // Set the static front page
        update_option('page_on_front', $professional_portfolio_home_id);
        update_option('show_on_front', 'page');

        // Create another page if needed
        $professional_portfolio_page_query = new WP_Query(array(
           'post_type' => 'page',
           'title' => 'Page',
           'post_status' => 'publish',
           'posts_per_page' => 1
        ));

        if (!$professional_portfolio_page_query->have_posts()) {
           $professional_portfolio_page_title = 'Page';
           $professional_portfolio_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
           
            $professional_portfolio_page = array(
               'post_type' => 'page',
               'post_title' => $professional_portfolio_page_title,
               'post_content' => $professional_portfolio_content,
               'post_status' => 'publish',
               'post_author' => 1,
               'post_slug' => 'page'
            );
            $professional_portfolio_page_id = wp_insert_post($professional_portfolio_page);
        }       

        // Set the demo import completion flag
    		update_option('professional_portfolio_demo_import_completed', true);

    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'professional-portfolio') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'professional-portfolio') . '</a></span>';

        //end 

        // Header Sidebar
        set_theme_mod( 'professional_portfolio_openclose_text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.' );
        set_theme_mod( 'professional_portfolio_phone_text', 'Phone no.' );
        set_theme_mod( 'professional_portfolio_phone_number', '+00 1234 567 890' );
        set_theme_mod( 'professional_portfolio_email_text', 'Email' );
        set_theme_mod( 'professional_portfolio_email_address', 'xyz123@gmail.com' );

        // slider section start //         
        set_theme_mod( 'professional_portfolio_banner_image', get_template_directory_uri().'/assets/images/banner-bg'.'.png' );
        set_theme_mod( 'professional_portfolio_service_banner_left_image', get_template_directory_uri().'/assets/images/left-boy'.'.png' );
        set_theme_mod( 'professional_portfolio_slider_main_title', 'CraftedCanvas' );
        set_theme_mod( 'professional_portfolio_banner_top_text', 'Crafted Everything' );
        

        // service section start //
        set_theme_mod( 'professional_portfolio_section_title', 'Case Studies' ); 

        // select Post Box
        $professional_portfolio_title_array = array("Enhancing User Experience", "Fashion Photography Lookbook", "Brand Identity Refresh");
        $professional_portfolio_content_array = array("Develop a visually stunning and professional portfolio website.\n\nCreate an intuitive navigation structure for easy access to portfolio items.\n\nOptimize the website for responsiveness across various devices and screen sizes.\n\nImplement interactive elements to engage users and showcase design skills.",
        "Capture high-quality images showcasing collections and engage target customers.\n\nHighlight product details, styling to create visually appealing and informative.\n\nEnhance credibility through professional photography with brand aesthetics.\n\nCreate a visually cohesive and inspiring lookbook that drives interest.",
        "Revitalize brand identity elements such as logo, and typography for relevant look.\n\nCreate brand guidelines for consistent brand presentation across all.\n\nStrengthen brand recognition among target audiences through refreshed.\n\nAlign brand visuals with customer preferences for increased brand appeal."
        );
        for ($professional_portfolio_i = 1; $professional_portfolio_i <= 3; $professional_portfolio_i++) {
            // Create post
            $professional_portfolio_title = $professional_portfolio_title_array[$professional_portfolio_i - 1];
            $professional_portfolio_content = $professional_portfolio_content_array[$professional_portfolio_i - 1];       
            $professional_portfolio_my_post = array(
                 'post_title'   => wp_strip_all_tags($professional_portfolio_title),
                 'post_content' => wp_strip_all_tags($professional_portfolio_content),
                 'post_status'  => 'publish',
                 'post_type'    => 'post',
            );
            $professional_portfolio_post_id = wp_insert_post($professional_portfolio_my_post);
            set_theme_mod('professional_portfolio_select_posts' . $professional_portfolio_i, $professional_portfolio_post_id);
          }        
          //Copyright Text
          set_theme_mod( 'professional_portfolio_footer_text', 'By VWThemes' );             
    }
  ?>
  
	<p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for Professional Portfolio', 'professional-portfolio'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=professional_portfolio_guide" method="POST" onsubmit="return validate(this);">
        <?php if (!get_option('professional_portfolio_demo_import_completed')) : ?>
            <input class="run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer', 'professional-portfolio'); ?>" class="button button-primary button-large">
        <?php endif; ?>
        <div id="spinner" style="display:none;">         
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/spinner.png" alt="" />
        </div>
    </form>
    <script type="text/javascript">
        function validate(form) {
            if (confirm("Do you really want to import the theme demo content?")) {
                // Show the spinner
                document.getElementById('spinner').style.display = 'block';
                // Allow the form to be submitted
                return true;
            } 
            else {
                return false;
            }
        }
    </script>
</div>