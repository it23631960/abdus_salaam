<?php
/**
 * The template part for displaying post
 *
 * @package Professional Portfolio 
 * @subpackage professional-portfolio
 * @since professional-portfolio 1.0
 */
?>

<?php 
  $professional_portfolio_archive_year  = esc_html(get_the_time('Y')); 
  $professional_portfolio_archive_month = esc_html(get_the_time('m')); 
  $professional_portfolio_archive_day   = esc_html(get_the_time('d')); 
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box p-3 mb-5 wow zoomInUp delay-1000" data-wow-duration="2s">
    <?php $professional_portfolio_theme_lay = get_theme_mod( 'professional_portfolio_blog_layout_option','Default');
    if($professional_portfolio_theme_lay == 'Default'){ ?>
      <div class="row">
        <?php if(has_post_thumbnail() && get_theme_mod( 'professional_portfolio_featured_image_hide_show',true) == 1) {?>
          <div class="box-image col-lg-6 col-md-6">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <article class="new-text <?php if(has_post_thumbnail() && get_theme_mod( 'professional_portfolio_featured_image_hide_show',true) == 1) { ?>col-lg-6 col-md-6" <?php } else { ?>col-lg-12 col-md-12" <?php } ?>>
          <h2 class="section-title mt-0 pt-0"><a href="<?php the_permalink(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
          <?php if( get_theme_mod( 'professional_portfolio_blog_toggle_postdate',true) == 1 || get_theme_mod( 'professional_portfolio_blog_toggle_author',true) == 1 || get_theme_mod( 'professional_portfolio_blog_toggle_comments',true) == 1 || get_theme_mod( 'professional_portfolio_blog_toggle_time',true) == 1) { ?>
            <div class="post-info p-2 my-3">
              <?php if(get_theme_mod('professional_portfolio_blog_toggle_postdate',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_toggle_postdate_icon','fas fa-calendar-alt')); ?> me-2"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $professional_portfolio_archive_year, $professional_portfolio_archive_month, $professional_portfolio_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('professional_portfolio_meta_field_separator', '|'));?></span>
              <?php } ?>

              <?php if(get_theme_mod('professional_portfolio_blog_toggle_author',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_toggle_author_icon','fas fa-user')); ?> me-2"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('professional_portfolio_meta_field_separator', '|'));?></span>
              <?php } ?>

              <?php if(get_theme_mod('professional_portfolio_blog_toggle_comments',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_toggle_comments_icon','fa fa-comments')); ?> me-2" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'professional-portfolio'), __('0 Comments', 'professional-portfolio'), __('% Comments', 'professional-portfolio') ); ?></span><span><?php echo esc_html(get_theme_mod('professional_portfolio_meta_field_separator', '|'));?></span>
              <?php } ?>

              <?php if(get_theme_mod('professional_portfolio_blog_toggle_time',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_toggle_time_icon','fas fa-clock')); ?> me-2"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
              <?php } ?>
              <?php echo esc_html (professional_portfolio_edit_link()); ?>
            </div>
          <?php } ?>
          <p class="mb-0">
            <?php $professional_portfolio_theme_lay = get_theme_mod( 'professional_portfolio_excerpt_settings','Excerpt');
            if($professional_portfolio_theme_lay == 'Content'){ ?>
              <?php the_content(); ?>
            <?php }
            if($professional_portfolio_theme_lay == 'Excerpt'){ ?>
              <?php if(get_the_excerpt()) { ?>
                <?php $professional_portfolio_excerpt = get_the_excerpt(); echo esc_html( professional_portfolio_string_limit_words( $professional_portfolio_excerpt, esc_attr(get_theme_mod('professional_portfolio_excerpt_number','30')))); ?><?php echo esc_html(get_theme_mod('professional_portfolio_blog_excerpt_suffix',''));?>
              <?php }?>
            <?php }?>
          </p>
          <?php if( get_theme_mod('professional_portfolio_button_text','Read More') != ''){ ?>
            <div class="more-btn mt-4 mb-4">
              <a class="p-3" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('professional_portfolio_button_text',__('Read More','professional-portfolio')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('professional_portfolio_button_text',__('Read More','professional-portfolio')));?></span><span class="top-icon"></span></a>
            </div>
          <?php } ?>
        </article>
      </div>
    <?php }else if($professional_portfolio_theme_lay == 'Center'){ ?>
      <div class="service-text">
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if( get_theme_mod( 'professional_portfolio_featured_image_hide_show',true) == 1) { ?>
          <div class="box-image">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <?php if( get_theme_mod( 'professional_portfolio_blog_toggle_postdate',true) == 1 || get_theme_mod( 'professional_portfolio_blog_toggle_author',true) == 1 || get_theme_mod( 'professional_portfolio_blog_toggle_comments',true) == 1 || get_theme_mod( 'professional_portfolio_blog_toggle_time',true) == 1) { ?>
            <div class="post-info p-2 my-3">
              <?php if(get_theme_mod('professional_portfolio_blog_toggle_postdate',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_toggle_postdate_icon','fas fa-calendar-alt')); ?> me-2"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $professional_portfolio_archive_year, $professional_portfolio_archive_month, $professional_portfolio_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('professional_portfolio_meta_field_separator', '|'));?></span>
              <?php } ?>

              <?php if(get_theme_mod('professional_portfolio_blog_toggle_author',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_toggle_author_icon','fas fa-user')); ?> me-2"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('professional_portfolio_meta_field_separator', '|'));?></span>
              <?php } ?>

              <?php if(get_theme_mod('professional_portfolio_blog_toggle_comments',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_toggle_comments_icon','fa fa-comments')); ?> me-2" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'professional-portfolio'), __('0 Comments', 'professional-portfolio'), __('% Comments', 'professional-portfolio') ); ?></span><span><?php echo esc_html(get_theme_mod('professional_portfolio_meta_field_separator', '|'));?></span>
              <?php } ?>

              <?php if(get_theme_mod('professional_portfolio_blog_toggle_time',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_toggle_time_icon','fas fa-clock')); ?> me-2"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
              <?php } ?>
              <?php echo esc_html (professional_portfolio_edit_link()); ?>
            </div>
          <?php } ?>
        <div class="entry-content">
          <p class="mb-0">
            <?php $professional_portfolio_theme_lay = get_theme_mod( 'professional_portfolio_excerpt_settings','Excerpt');
            if($professional_portfolio_theme_lay == 'Content'){ ?>
              <?php the_content(); ?>
            <?php }
            if($professional_portfolio_theme_lay == 'Excerpt'){ ?>
              <?php if(get_the_excerpt()) { ?>
                <?php $professional_portfolio_excerpt = get_the_excerpt(); echo esc_html( professional_portfolio_string_limit_words( $professional_portfolio_excerpt, esc_attr(get_theme_mod('professional_portfolio_excerpt_number','30')))); ?><?php echo esc_html(get_theme_mod('professional_portfolio_blog_excerpt_suffix',''));?>
              <?php }?>
            <?php }?>
          </p>
        </div>
        <?php if( get_theme_mod('professional_portfolio_button_text','Read More') != ''){ ?>
          <div class="more-btn mt-4 mb-4">
            <a class="p-3" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('professional_portfolio_button_text',__('Read More','professional-portfolio')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('professional_portfolio_button_text',__('Read More','professional-portfolio')));?></span><span class="top-icon"></span></a>
          </div>
        <?php } ?>
      </div>
    <?php }else if($professional_portfolio_theme_lay == 'Left'){ ?>
      <div class="service-text">
        <?php if( get_theme_mod( 'professional_portfolio_featured_image_hide_show',true) == 1) { ?>
          <div class="box-image">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
       <?php if( get_theme_mod( 'professional_portfolio_blog_toggle_postdate',true) == 1 || get_theme_mod( 'professional_portfolio_blog_toggle_author',true) == 1 || get_theme_mod( 'professional_portfolio_blog_toggle_comments',true) == 1 || get_theme_mod( 'professional_portfolio_blog_toggle_time',true) == 1) { ?>
            <div class="post-info p-2 my-3">
              <?php if(get_theme_mod('professional_portfolio_blog_toggle_postdate',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_toggle_postdate_icon','fas fa-calendar-alt')); ?> me-2"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $professional_portfolio_archive_year, $professional_portfolio_archive_month, $professional_portfolio_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('professional_portfolio_meta_field_separator', '|'));?></span>
              <?php } ?>

              <?php if(get_theme_mod('professional_portfolio_blog_toggle_author',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_toggle_author_icon','fas fa-user')); ?> me-2"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('professional_portfolio_meta_field_separator', '|'));?></span>
              <?php } ?>

              <?php if(get_theme_mod('professional_portfolio_blog_toggle_comments',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_toggle_comments_icon','fa fa-comments')); ?> me-2" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'professional-portfolio'), __('0 Comments', 'professional-portfolio'), __('% Comments', 'professional-portfolio') ); ?></span><span><?php echo esc_html(get_theme_mod('professional_portfolio_meta_field_separator', '|'));?></span>
              <?php } ?>

              <?php if(get_theme_mod('professional_portfolio_blog_toggle_time',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_toggle_time_icon','fas fa-clock')); ?> me-2"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
              <?php } ?>
              <?php echo esc_html (professional_portfolio_edit_link()); ?>
            </div>
          <?php } ?>
        <div class="entry-content">
          <p class="mb-0">
            <?php $professional_portfolio_theme_lay = get_theme_mod( 'professional_portfolio_excerpt_settings','Excerpt');
            if($professional_portfolio_theme_lay == 'Content'){ ?>
              <?php the_content(); ?>
            <?php }
            if($professional_portfolio_theme_lay == 'Excerpt'){ ?>
              <?php if(get_the_excerpt()) { ?>
                <?php $professional_portfolio_excerpt = get_the_excerpt(); echo esc_html( professional_portfolio_string_limit_words( $professional_portfolio_excerpt, esc_attr(get_theme_mod('professional_portfolio_excerpt_number','30')))); ?><?php echo esc_html(get_theme_mod('professional_portfolio_blog_excerpt_suffix',''));?>
              <?php }?>
            <?php }?>
          </p>
        </div>
        <?php if( get_theme_mod('professional_portfolio_button_text','Read More') != ''){ ?>
          <div class="more-btn mt-4 mb-4">
            <a class="p-3" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('professional_portfolio_button_text',__('Read More','professional-portfolio')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('professional_portfolio_button_text',__('Read More','professional-portfolio')));?></span><span class="top-icon"></span></a>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</div>