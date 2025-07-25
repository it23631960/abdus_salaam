<?php
/**
 * Template Name: Custom Home Page
 */
get_header();

?>
<!-- banner section -->
<main id="maincontent" role="main">

  <?php do_action('professional_portfolio_before_slider'); ?>
    <?php if( get_theme_mod( 'professional_portfolio_banner_hide_show', true) == 1 || get_theme_mod( 'professional_portfolio_resp_slider_hide_show', true)) { ?>
      <section id="banner" class="position-relative wow fadeInDown" data-wow-delay=".25s">
          <div class="container-fluid">
            <?php if(get_theme_mod('professional_portfolio_service_banner_left_image') != '') {?>
              <div class="left-img">
                <img src="<?php echo esc_url(get_theme_mod('professional_portfolio_service_banner_left_image')); ?>" alt="" />
              </div>
            <?php }?>
            <div class="banner-content">
              <?php if(get_theme_mod('professional_portfolio_slider_main_title') != '') {?>
                <h1 class="banner-title text-center mb-0"><?php echo esc_html(get_theme_mod('professional_portfolio_slider_main_title')) ?></h1>
              <?php }?>
              <?php if(get_theme_mod('professional_portfolio_banner_top_text') != '') {?>
                <p class="banner-text text-center mb-0"><?php echo esc_html(get_theme_mod('professional_portfolio_banner_top_text')) ?></p>
              <?php }?>
            </div>   
          </div>  
        </div>  
        <div class="clearfix"></div>
      </section>
    <?php }?>
  <?php do_action('professional_portfolio_after_slider'); ?>

  <!-- Case Studies Section -->
  <?php if( get_theme_mod('professional_portfolio_section_title') != '' || get_theme_mod('professional_portfolio_feature_palces_section_text') != '' ){ ?>
    <section id="case-studies" class="py-5 wow fadeInLeftBig" data-wow-delay=".25s">
      <?php if(get_theme_mod('professional_portfolio_section_title') != '') {?>
        <h2 class="section-title text-left mb-0 py-2"><?php echo esc_html(get_theme_mod('professional_portfolio_section_title')) ?></h2>
      <?php }?>
      <div class="row">
        <?php
          for ($professional_portfolio_i=1; $professional_portfolio_i <= 3; $professional_portfolio_i++) {
          $professional_portfolio_postData=  get_theme_mod('professional_portfolio_select_posts'.$professional_portfolio_i);
          if($professional_portfolio_postData){ ?>
          <div class="col-xl-4 col-lg-4 col-md-4 col-12 pt-5 main-features">
            <div class="feature-box pb-3 px-4 pt-3">
              <?php
              $args = array(
                'p' => esc_html($professional_portfolio_postData ,'professional-portfolio'),
                'posts_per_page' => 1,
                'post_type' => 'post'
              );
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                <div class="post-list pt-4"><?php the_content(); ?></div>
                <div class="post-btn mt-4 mb-2">
                  <a href="<?php the_permalink(); ?>">
                    <?php echo esc_html(__('Read More', 'professional-portfolio')); ?>
                    <span class="screen-reader-text"><?php echo esc_html(__('Read More', 'professional-portfolio')); ?></span>
                  </a>
                </div>
              <?php endwhile;
                wp_reset_postdata();
              endif; ?>
            </div>
          </div>
        <?php }} ?>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'professional_portfolio_after_service' ); ?>

  <div id="content-vw" class="entry-content pt-5">
    <div class="container">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. 
      ?>
    </div>
  </div>
  
</main>

<?php get_footer(); ?> 