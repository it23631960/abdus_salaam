<?php
/**
 * Custom Social Widget
 */

class Professional_Portfolio_Social_Widget extends WP_Widget {
	
	function __construct() {
		parent::__construct(
			'Professional_Portfolio_Social_Widget',
			__('VW Social Icon', 'professional-portfolio'),
			array( 'description' => __( 'Widget for Social icons section', 'professional-portfolio' ), ) 
		);
	}

	public function widget( $professional_portfolio_args, $professional_portfolio_instance ) { ?>
		<div class="widget">
			<?php
			$professional_portfolio_title = isset( $professional_portfolio_instance['title'] ) ? $professional_portfolio_instance['title'] : '';
			$professional_portfolio_facebook = isset( $professional_portfolio_instance['facebook'] ) ? $professional_portfolio_instance['facebook'] : '';
			$professional_portfolio_twitter = isset( $professional_portfolio_instance['twitter'] ) ? $professional_portfolio_instance['twitter'] : '';
			$professional_portfolio_instagram = isset( $professional_portfolio_instance['instagram'] ) ? $professional_portfolio_instance['instagram'] : '';
			$professional_portfolio_youtube = isset( $professional_portfolio_instance['youtube'] ) ? $professional_portfolio_instance['youtube'] : '';
			$professional_portfolio_dribbal = isset( $professional_portfolio_instance['dribbal'] ) ? $professional_portfolio_instance['dribbal'] : '';
			$professional_portfolio_linkedin = isset( $professional_portfolio_instance['linkedin'] ) ? $professional_portfolio_instance['linkedin'] : '';
			$professional_portfolio_pinterest = isset( $professional_portfolio_instance['pinterest'] ) ? $professional_portfolio_instance['pinterest'] : '';
			$professional_portfolio_tumblr = isset( $professional_portfolio_instance['tumblr'] ) ? $professional_portfolio_instance['tumblr'] : '';
			

	        echo '<div class="custom-social-icons">';

	        if(!empty($professional_portfolio_title) ){ ?><h3 class="custom_title"><?php echo esc_html($professional_portfolio_title); ?></h3><?php } ?>
	        <?php if(!empty($professional_portfolio_facebook) ){ ?><p class="mb-0"><a class="custom_facebook fff" target= "_blank" href="<?php echo esc_url($professional_portfolio_facebook); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','professional-portfolio' );?></span></a></p><?php } ?>

	        <?php if(!empty($professional_portfolio_twitter) ){ ?><p class="mb-0"><a class="custom_twitter" target= "_blank" href="<?php echo esc_url($professional_portfolio_twitter); ?>"><i class="fa-brands fa-x-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','professional-portfolio' );?></span></a></p><?php } ?>
	        
	        <?php if(!empty($professional_portfolio_instagram) ){ ?><p class="mb-0"><a class="custom_instagram" target= "_blank" href="<?php echo esc_url($professional_portfolio_instagram); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','professional-portfolio' );?></span></a></p><?php } ?>

	        <?php if(!empty($professional_portfolio_youtube) ){ ?><p class="mb-0"><a class="custom_youtube" target= "_blank" href="<?php echo esc_url($professional_portfolio_youtube); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','professional-portfolio' );?></span></a></p><?php } ?>

	        <?php if(!empty($professional_portfolio_dribbal) ){ ?><p class="mb-0"><a class="custom_dribbal" target= "_blank" href="<?php echo esc_url($professional_portfolio_dribbal); ?>"><i class="fa-solid fa-basketball"></i><span class="screen-reader-text"><?php esc_html_e( 'Dribbal','professional-portfolio' );?></span></a></p><?php } ?>

	        <?php if(!empty($professional_portfolio_linkedin) ){ ?><p class="mb-0"><a class="custom_linkedin" target= "_blank" href="<?php echo esc_url($professional_portfolio_linkedin); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','professional-portfolio' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($professional_portfolio_pinterest) ){ ?><p class="mb-0"><a class="custom_pinterest" target= "_blank" href="<?php echo esc_url($professional_portfolio_pinterest); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','professional-portfolio' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($professional_portfolio_tumblr) ){ ?><p class="mb-0"><a class="custom_tumblr" target= "_blank" href="<?php echo esc_url($professional_portfolio_tumblr); ?>"><i class="fab fa-tumblr"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','professional-portfolio' );?></span></a></p><?php } ?>

	        <?php echo '</div>';
			?>
		</div>
		<?php
	}
	
	// Widget Backend 
	public function form( $professional_portfolio_instance ) {

		$professional_portfolio_title= ''; $professional_portfolio_facebook = ''; $professional_portfolio_twitter = ''; $professional_portfolio_linkedin = '';  $professional_portfolio_pinterest = '';$professional_portfolio_tumblr = ''; $professional_portfolio_instagram = ''; $professional_portfolio_youtube = ''; 

		$professional_portfolio_title = isset( $professional_portfolio_instance['title'] ) ? $professional_portfolio_instance['title'] : '';
		$professional_portfolio_facebook = isset( $professional_portfolio_instance['facebook'] ) ? $professional_portfolio_instance['facebook'] : '';
		$professional_portfolio_instagram = isset( $professional_portfolio_instance['instagram'] ) ? $professional_portfolio_instance['instagram'] : '';
		$professional_portfolio_twitter = isset( $professional_portfolio_instance['twitter'] ) ? $professional_portfolio_instance['twitter'] : '';
		$professional_portfolio_youtube = isset( $professional_portfolio_instance['youtube'] ) ? $professional_portfolio_instance['youtube'] : '';
		$professional_portfolio_dribbal = isset( $professional_portfolio_instance['dribbal'] ) ? $professional_portfolio_instance['dribbal'] : '';
		$professional_portfolio_linkedin = isset( $professional_portfolio_instance['linkedin'] ) ? $professional_portfolio_instance['linkedin'] : '';
		$professional_portfolio_pinterest = isset( $professional_portfolio_instance['pinterest'] ) ? $professional_portfolio_instance['pinterest'] : '';
		$professional_portfolio_tumblr = isset( $professional_portfolio_instance['tumblr'] ) ? $professional_portfolio_instance['tumblr'] : '';
		
		?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','professional-portfolio'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_title); ?>">
    	</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php esc_html_e('Facebook:','professional-portfolio'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_facebook); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php esc_html_e('Twitter:','professional-portfolio'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_twitter); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php esc_html_e('Instagram:','professional-portfolio'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_instagram); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php esc_html_e('Youtube:','professional-portfolio'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_youtube); ?>">
		</p>
		<label for="<?php echo esc_attr($this->get_field_id('dribbal')); ?>"><?php esc_html_e('Dribbal:','professional-portfolio'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('dribbal')); ?>" name="<?php echo esc_attr($this->get_field_name('dribbal')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_dribbal); ?>">
		</p>

		<label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php esc_html_e('Linkedin:','professional-portfolio'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_linkedin); ?>">
		</p>
		<p>
		
		<label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php esc_html_e('Pinterest:','professional-portfolio'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_pinterest); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php esc_html_e('Tumblr:','professional-portfolio'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_tumblr); ?>">
		</p>
		<p>
		
		<?php 
	}
	
	public function update( $professional_portfolio_new_instance, $professional_portfolio_old_instance ) {
		$professional_portfolio_instance = array();
		$professional_portfolio_instance['title'] = (!empty($professional_portfolio_new_instance['title']) ) ? strip_tags($professional_portfolio_new_instance['title']) : '';	
        $professional_portfolio_instance['facebook'] = (!empty($professional_portfolio_new_instance['facebook']) ) ? esc_url_raw($professional_portfolio_new_instance['facebook']) : '';
        $professional_portfolio_instance['twitter'] = (!empty($professional_portfolio_new_instance['twitter']) ) ? esc_url_raw($professional_portfolio_new_instance['twitter']) : '';
        $professional_portfolio_instance['instagram'] = (!empty($professional_portfolio_new_instance['instagram']) ) ? esc_url_raw($professional_portfolio_new_instance['instagram']) : '';
        $professional_portfolio_instance['youtube'] = (!empty($professional_portfolio_new_instance['youtube']) ) ? esc_url_raw($professional_portfolio_new_instance['youtube']) : '';
        $professional_portfolio_instance['dribbal'] = (!empty($professional_portfolio_new_instance['dribbal']) ) ? esc_url_raw($professional_portfolio_new_instance['dribbal']) : '';
        $professional_portfolio_instance['linkedin'] = (!empty($professional_portfolio_new_instance['linkedin']) ) ? esc_url_raw($professional_portfolio_new_instance['linkedin']) : '';
        $professional_portfolio_instance['pinterest'] = (!empty($professional_portfolio_new_instance['pinterest']) ) ? esc_url_raw($professional_portfolio_new_instance['pinterest']) : '';
        $professional_portfolio_instance['tumblr'] = (!empty($professional_portfolio_new_instance['tumblr']) ) ? esc_url_raw($professional_portfolio_new_instance['tumblr']) : '';
     	
     	
		return $professional_portfolio_instance;
	}
}

function professional_portfolio_custom_load_widget() {
	register_widget( 'Professional_Portfolio_Social_Widget' );
}
add_action( 'widgets_init', 'professional_portfolio_custom_load_widget' );