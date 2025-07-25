<?php
/**
 * Custom Contact us Widget
 */

class Professional_Portfolio_Contact_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Professional_Portfolio_Contact_Widget', 
			__('VW Contact us', 'professional-portfolio'),
			array( 'description' => __( 'Widget for contact us section in sidebar', 'professional-portfolio' ), ) 
		);
	}
	
	public function widget( $professional_portfolio_args, $professional_portfolio_instance ) {
		?>
		<aside class="widget">
			<?php
			$professional_portfolio_title = isset( $professional_portfolio_instance['title'] ) ? $professional_portfolio_instance['title'] : '';
			$professional_portfolio_phone = isset( $professional_portfolio_instance['phone'] ) ? $professional_portfolio_instance['phone'] : '';
			$professional_portfolio_email = isset( $professional_portfolio_instance['email'] ) ? $professional_portfolio_instance['email'] : '';
			$professional_portfolio_address = isset( $professional_portfolio_instance['address'] ) ? $professional_portfolio_instance['address'] : '';
			$professional_portfolio_timing = isset( $professional_portfolio_instance['timing'] ) ? $professional_portfolio_instance['timing'] : '';
			$professional_portfolio_longitude = isset( $professional_portfolio_instance['longitude'] ) ? $professional_portfolio_instance['longitude'] : '';
			$professional_portfolio_latitude = isset( $professional_portfolio_instance['latitude'] ) ? $professional_portfolio_instance['latitude'] : '';
			$professional_portfolio_contact_form = isset( $professional_portfolio_instance['contact_form'] ) ? $professional_portfolio_instance['contact_form'] : '';

	        echo '<div class="custom-contact-us">';
	        if(!empty($professional_portfolio_title) ){ ?><h3 class="custom_title1"><?php echo esc_html($professional_portfolio_title); ?></h3><?php } ?>
		        <?php if(!empty($professional_portfolio_phone) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-phone-volume me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Contact', 'professional-portfolio'); ?></span><span class="custom_desc"><?php echo esc_html($professional_portfolio_phone); ?></span>
		        		</div>		        		
		        	</div>
		        <?php } ?>
		        <?php if(!empty($professional_portfolio_email) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-regular fa-envelope me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Mail Address', 'professional-portfolio'); ?></span><span class="custom_desc"><?php echo esc_html($professional_portfolio_email); ?></span>
		        		</div>
		        	</div>
		        <?php } ?>
		        <?php if(!empty($professional_portfolio_address) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-location-dot me-2"></i></span>
		        		</div>
			        	<div class="col-lg-10 col-md-10 align-self-center">
			        		<span class="contact-title"><?php echo esc_html('Location', 'professional-portfolio'); ?></span><span class="custom_desc"><?php echo esc_html($professional_portfolio_address); ?></span>
			        	</div>
			        </div>
			    <?php } ?> 
		        <?php if(!empty($professional_portfolio_timing) ){ ?><p><span class="custom_details"><?php esc_html_e('Opening Time: ','professional-portfolio'); ?></span><span class="custom_desc"><?php echo esc_html($professional_portfolio_timing); ?></span></p><?php } ?>
		        <?php if(!empty($professional_portfolio_longitude) ){ ?><embed width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_html($professional_portfolio_longitude); ?>,<?php echo esc_html($professional_portfolio_latitude); ?>&hl=es;z=14&amp;output=embed"></embed><?php } ?>
		        <?php if(!empty($professional_portfolio_contact_form) ){ ?><?php echo do_shortcode($professional_portfolio_contact_form); ?><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $professional_portfolio_instance ) {

		$professional_portfolio_title= ''; $professional_portfolio_phone= ''; $professional_portfolio_email = ''; $professional_portfolio_address = ''; $professional_portfolio_timing = ''; $professional_portfolio_longitude = ''; $professional_portfolio_latitude = ''; $professional_portfolio_contact_form = ''; 
		
		$professional_portfolio_title = isset( $professional_portfolio_instance['title'] ) ? $professional_portfolio_instance['title'] : '';
		$professional_portfolio_phone = isset( $professional_portfolio_instance['phone'] ) ? $professional_portfolio_instance['phone'] : '';
		$professional_portfolio_email = isset( $professional_portfolio_instance['email'] ) ? $professional_portfolio_instance['email'] : '';
		$professional_portfolio_address = isset( $professional_portfolio_instance['address'] ) ? $professional_portfolio_instance['address'] : '';
		$professional_portfolio_timing = isset( $professional_portfolio_instance['timing'] ) ? $professional_portfolio_instance['timing'] : '';
		$professional_portfolio_longitude = isset( $professional_portfolio_instance['longitude'] ) ? $professional_portfolio_instance['longitude'] : '';
		$professional_portfolio_latitude = isset( $professional_portfolio_instance['latitude'] ) ? $professional_portfolio_instance['latitude'] : '';
		$professional_portfolio_contact_form = isset( $professional_portfolio_instance['contact_form'] ) ? $professional_portfolio_instance['contact_form'] : '';
		
		?>

		<p>
        	<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','professional-portfolio'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_title); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone Number:','professional-portfolio'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_phone); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email id:','professional-portfolio'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_email); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address:','professional-portfolio'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_address); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('timing')); ?>"><?php esc_html_e('Opening Time:','professional-portfolio'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('timing')); ?>" name="<?php echo esc_attr($this->get_field_name('timing')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_timing); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('longitude')); ?>"><?php esc_html_e('Longitude:','professional-portfolio'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('longitude')); ?>" name="<?php echo esc_attr($this->get_field_name('longitude')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_longitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('latitude')); ?>"><?php esc_html_e('Latitude:','professional-portfolio'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('latitude')); ?>" name="<?php echo esc_attr($this->get_field_name('latitude')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_latitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('contact_form')); ?>"><?php esc_html_e('Contact Form Shortcode:','professional-portfolio'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_form')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_form')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_contact_form); ?>">
    	</p>
		
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $professional_portfolio_new_instance, $professional_portfolio_old_instance ) {
		$professional_portfolio_instance = array();	
		$professional_portfolio_instance['title'] = (!empty($professional_portfolio_new_instance['title']) ) ? strip_tags($professional_portfolio_new_instance['title']) : '';
		$professional_portfolio_instance['phone'] = (!empty($professional_portfolio_new_instance['phone']) ) ? professional_portfolio_sanitize_phone_number($professional_portfolio_new_instance['phone']) : '';
		$professional_portfolio_instance['email'] = (!empty($professional_portfolio_new_instance['email']) ) ? sanitize_email($professional_portfolio_new_instance['email']) : '';
		$professional_portfolio_instance['address'] = (!empty($professional_portfolio_new_instance['address']) ) ? strip_tags($professional_portfolio_new_instance['address']) : '';
		$professional_portfolio_instance['timing'] = (!empty($professional_portfolio_new_instance['timing']) ) ? strip_tags($professional_portfolio_new_instance['timing']) : '';
		$professional_portfolio_instance['longitude'] = (!empty($professional_portfolio_new_instance['longitude']) ) ? strip_tags($professional_portfolio_new_instance['longitude']) : '';
		$professional_portfolio_instance['latitude'] = (!empty($professional_portfolio_new_instance['latitude']) ) ? strip_tags($professional_portfolio_new_instance['latitude']) : '';
		$professional_portfolio_instance['contact_form'] = (!empty($professional_portfolio_new_instance['contact_form']) ) ? strip_tags($professional_portfolio_new_instance['contact_form']) : '';
        
		return $professional_portfolio_instance;
	}
}
// Register and load the widget
function professional_portfolio_contact_custom_load_widget() {
	register_widget( 'Professional_Portfolio_Contact_Widget' );
}
add_action( 'widgets_init', 'professional_portfolio_contact_custom_load_widget' );