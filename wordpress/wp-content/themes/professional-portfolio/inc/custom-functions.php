<?php

Class Professional_Portfolio_My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
  function widget($professional_portfolio_args, $professional_portfolio_instance) {
      if ( ! isset( $professional_portfolio_args['widget_id'] ) ) {
      $professional_portfolio_args['widget_id'] = $this->id;
    }
    $professional_portfolio_title = ( ! empty( $professional_portfolio_instance['title'] ) ) ? $professional_portfolio_instance['title'] : __( 'Recent Posts', 'professional-portfolio' );
    /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
    $professional_portfolio_title = apply_filters( 'widget_title', $professional_portfolio_title, $professional_portfolio_instance, $this->id_base );
    $professional_portfolio_number = ( ! empty( $professional_portfolio_instance['number'] ) ) ? absint( $professional_portfolio_instance['number'] ) : 5;
    if ( ! $professional_portfolio_number )
        $professional_portfolio_number = 5;
    $professional_portfolio_show_date = isset( $professional_portfolio_instance['show_date'] ) ? $professional_portfolio_instance['show_date'] : false;
    /**
     * Filter the arguments for the Recent Posts widget.
     *
     * @since 3.4.0
     *
     * @see WP_Query::get_posts()
     *
     * @param array $professional_portfolio_args An array of arguments used to retrieve the recent posts.
     */
    $professional_portfolio_r = new WP_Query( apply_filters( 'widget_posts_args', array(
        'posts_per_page'      => $professional_portfolio_number,
        'no_found_rows'       => true,
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true
    ) ) );
    if ($professional_portfolio_r->have_posts()) :
    ?>
    <?php echo $professional_portfolio_args['before_widget']; ?>
    <?php if ( $professional_portfolio_title ) {
        echo $professional_portfolio_args['before_title'] . esc_html($professional_portfolio_title) . $professional_portfolio_args['after_title'];
    } ?>
    <ul>
      <?php while ( $professional_portfolio_r->have_posts() ) : $professional_portfolio_r->the_post(); ?>
      <li>
        <div class="recent-post-box">
          <div class="media post-thumb">
            <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
            <div class="media-body post-content">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <div class="d-flex date-comment">
               <?php if ( $professional_portfolio_show_date ) : ?>
                <p class="post-date"><?php the_date(); ?></p>
               <?php endif; ?>
               <div class="date-comment1"><?php comments_number( __('0 Comment', 'professional-portfolio'), __('0 Comments', 'professional-portfolio'), __('% Comments', 'professional-portfolio') ); ?></div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </ul>

    <?php echo $professional_portfolio_args['after_widget'];

    endif;
  }
}
function professional_portfolio_my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('Professional_Portfolio_My_Recent_Posts_Widget');
}
add_action('widgets_init', 'professional_portfolio_my_recent_widget_registration');
