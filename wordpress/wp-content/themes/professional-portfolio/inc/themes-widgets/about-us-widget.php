<?php
/**
 * Custom About us Widget
 */

class Professional_Portfolio_About_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Professional_Portfolio_About_Widget',
			__('VW About us', 'professional-portfolio'),
			array( 'description' => __( 'Widget for about us section in sidebar', 'professional-portfolio' ), ) 
		);
	}
	
	public function widget( $professional_portfolio_args, $professional_portfolio_instance ) {
		?>
		<aside class="widget">
			<?php
			$professional_portfolio_title = isset( $professional_portfolio_instance['title'] ) ? $professional_portfolio_instance['title'] : '';
			$professional_portfolio_author = isset( $professional_portfolio_instance['author'] ) ? $professional_portfolio_instance['author'] : '';
			$professional_portfolio_designation = isset( $professional_portfolio_instance['designation'] ) ? $professional_portfolio_instance['designation'] : '';
			$professional_portfolio_description = isset( $professional_portfolio_instance['description'] ) ? $professional_portfolio_instance['description'] : '';
			$professional_portfolio_read_more_url = isset( $professional_portfolio_instance['read_more_url'] ) ? $professional_portfolio_instance['read_more_url'] : '';
			$professional_portfolio_read_more_text = isset( $professional_portfolio_instance['read_more_text'] ) ? $professional_portfolio_instance['read_more_text'] : '';
			$professional_portfolio_upload_image = isset( $professional_portfolio_instance['upload_image'] ) ? $professional_portfolio_instance['upload_image'] : '';

	        echo '<div class="custom-about-us">';
	        if(!empty($professional_portfolio_title) ){ ?><h3 class="custom_title"><?php echo esc_html($professional_portfolio_title); ?></h3><?php } ?>
		        <?php if($professional_portfolio_upload_image): ?>
	      			<img src="<?php echo esc_url($professional_portfolio_upload_image); ?>" alt="">
				<?php endif; ?>
				<?php if(!empty($professional_portfolio_author) ){ ?><p class="custom_author"><?php echo esc_html($professional_portfolio_author); ?></p><?php } ?>
				<?php if(!empty($professional_portfolio_designation) ){ ?><p class="custom_designation"><?php echo esc_html($professional_portfolio_designation); ?></p><?php } ?>
		        <?php if(!empty($professional_portfolio_description) ){ ?><p class="custom_desc"><?php echo esc_html($professional_portfolio_description); ?></p><?php } ?>
		        <?php if(!empty($professional_portfolio_read_more_url) ){ ?><div class="more-button"><a class="custom_read_more" href="<?php echo esc_url($professional_portfolio_read_more_url); ?>"><?php if(!empty($professional_portfolio_read_more_text) ){ ?><?php echo esc_html($professional_portfolio_read_more_text); ?><?php } ?></a></div><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $professional_portfolio_instance ) {	

		$professional_portfolio_title= ''; $professional_portfolio_author = ''; $professional_portfolio_designation = ''; $professional_portfolio_description= ''; $professional_portfolio_read_more_text = ''; $professional_portfolio_read_more_url = ''; $professional_portfolio_upload_image = '';

		$professional_portfolio_title = isset( $professional_portfolio_instance['title'] ) ? $professional_portfolio_instance['title'] : '';
		$professional_portfolio_author = isset( $professional_portfolio_instance['author'] ) ? $professional_portfolio_instance['author'] : '';
		$professional_portfolio_designation = isset( $professional_portfolio_instance['designation'] ) ? $professional_portfolio_instance['designation'] : '';
		$professional_portfolio_description = isset( $professional_portfolio_instance['description'] ) ? $professional_portfolio_instance['description'] : '';
		$professional_portfolio_read_more_url = isset( $professional_portfolio_instance['read_more_url'] ) ? $professional_portfolio_instance['read_more_url'] : '';
		$professional_portfolio_read_more_text = isset( $professional_portfolio_instance['read_more_text'] ) ? $professional_portfolio_instance['read_more_text'] : '';
		$professional_portfolio_upload_image = isset( $professional_portfolio_instance['upload_image'] ) ? $professional_portfolio_instance['upload_image'] : '';
	?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','professional-portfolio'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_title); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('author')); ?>"><?php esc_html_e('Author Name:','professional-portfolio'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author')); ?>" name="<?php echo esc_attr($this->get_field_name('author')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_author); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('designation')); ?>"><?php esc_html_e('Designation:','professional-portfolio'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('designation')); ?>" name="<?php echo esc_attr($this->get_field_name('designation')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_designation); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description:','professional-portfolio'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_description); ?>">
    	</p>
    	<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>"><?php esc_html_e('Button Text:','professional-portfolio'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_text')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_read_more_text); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>"><?php esc_html_e('Button Url:','professional-portfolio'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_url')); ?>" type="text" value="<?php echo esc_attr($professional_portfolio_read_more_url); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'upload_image' )); ?>"><?php esc_html_e( 'Image Url:','professional-portfolio'); ?></label>
		<?php
			if ( $professional_portfolio_upload_image != '' ) :
			echo '<img class="custom_media_image" src="' . esc_url($professional_portfolio_upload_image) . '" style="margin:10px 0;padding:0;max-width:100%;float:left;display:inline-block" /><br />';
			endif;
		?>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'upload_image' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'upload_image' )); ?>" type="text" value="<?php echo esc_url( $professional_portfolio_upload_image ); ?>" />
	   	</p>
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $professional_portfolio_new_instance, $professional_portfolio_old_instance ) {
		$professional_portfolio_instance = array();	
		$professional_portfolio_instance['title'] = (!empty($professional_portfolio_new_instance['title']) ) ? strip_tags($professional_portfolio_new_instance['title']) : '';
		$professional_portfolio_instance['author'] = ( ! empty( $professional_portfolio_new_instance['author'] ) ) ? strip_tags($professional_portfolio_new_instance['author']) : '';
		$professional_portfolio_instance['designation'] = ( ! empty( $professional_portfolio_new_instance['designation'] ) ) ? strip_tags($professional_portfolio_new_instance['designation']) : '';
		$professional_portfolio_instance['description'] = (!empty($professional_portfolio_new_instance['description']) ) ? strip_tags($professional_portfolio_new_instance['description']) : '';
        $professional_portfolio_instance['read_more_text'] = (!empty($professional_portfolio_new_instance['read_more_text']) ) ? strip_tags($professional_portfolio_new_instance['read_more_text']) : '';
        $professional_portfolio_instance['read_more_url'] = (!empty($professional_portfolio_new_instance['read_more_url']) ) ? esc_url_raw($professional_portfolio_new_instance['read_more_url']) : '';
        $professional_portfolio_instance['upload_image'] = ( ! empty( $professional_portfolio_new_instance['upload_image'] ) ) ? strip_tags($professional_portfolio_new_instance['upload_image']) : '';

		return $professional_portfolio_instance;
	}
}
// Register and load the widget
function professional_portfolio_about_custom_load_widget() {
	register_widget( 'Professional_Portfolio_About_Widget' );
}
add_action( 'widgets_init', 'professional_portfolio_about_custom_load_widget' );