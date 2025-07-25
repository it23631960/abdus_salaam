<?php
/**
 * The template part for Top Header
 *
 * @package Professional Portfolio 
 * @subpackage professional-portfolio
 * @since professional-portfolio 1.0
 */
?>

<div class="main-header <?php if( get_theme_mod( 'professional_portfolio_sticky_header', false) == 1 || get_theme_mod( 'professional_portfolio_stickyheader_hide_show', false) == 1) { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 align-self-center logo-img-sec p-0">
        <div class="logo text-center text-md-center pb-0 pb-md-0">
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
          <?php endif; ?>
          <?php $professional_portfolio_blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $professional_portfolio_blog_info ) ) : ?>
              <?php if ( is_front_page() && is_home() ) : ?>
                <?php if( get_theme_mod('professional_portfolio_logo_title_hide_show',true) == 1){ ?>
                  <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php } ?>
              <?php else : ?>
                <?php if( get_theme_mod('professional_portfolio_logo_title_hide_show',true) == 1){ ?>
                  <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php } ?>
              <?php endif; ?>
            <?php endif; ?>
            <?php
              $professional_portfolio_description = get_bloginfo( 'description', 'display' );
              if ( $professional_portfolio_description || is_customize_preview() ) :
            ?>
            <?php if( get_theme_mod('professional_portfolio_tagline_hide_show',false) == 1){ ?>
              <p class="site-description mb-0">
                <?php echo esc_html($professional_portfolio_description); ?>
              </p>
            <?php } ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-xl-9 col-lg-9 col-md-8 col-sm-6 col-6 align-self-center header-sec-top">
        <?php get_template_part('template-parts/header/navigation'); ?>
      </div>
      <div class="col-xl-1 col-lg-1 col-md-2 col-sm-6 col-6 align-self-center text-lg-start text-md-start text-center toggle-btn">
        <a href="#" id="sidebar-pop"><?php echo esc_html('Menu','professional-portfolio'); ?><i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_baropen_icon','fa-solid fa-bars-staggered')); ?>"></i></a>
      </div>
      <div class="header-sidebar">
        <div class="close-pop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_barclose_icon','fas fa-window-close')); ?>"></i></a>
        </div>
        <div class="menu-drawer">
          <div class="logo">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                <?php $professional_portfolio_blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $professional_portfolio_blog_info ) ) : ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                      <?php if( get_theme_mod('professional_portfolio_logo_title_hide_show',true) == 1){ ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php } ?>
                    <?php else : ?>
                      <?php if( get_theme_mod('professional_portfolio_logo_title_hide_show',true) == 1){ ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                      <?php } ?>
                    <?php endif; ?>
                  <?php endif; ?>
                  <?php
                    $professional_portfolio_description = get_bloginfo( 'description', 'display' );
                    if ( $professional_portfolio_description || is_customize_preview() ) :
                  ?>
                  <?php if( get_theme_mod('professional_portfolio_tagline_hide_show',false) == 1){ ?>
                    <p class="site-description mb-0">
                      <?php echo esc_html($professional_portfolio_description); ?>
                    </p>
                  <?php } ?>
              <?php endif; ?>
          </div>
          <?php if(get_theme_mod('professional_portfolio_openclose_text') != '') {?>
            <p class="mt-3"><?php echo esc_html(get_theme_mod('professional_portfolio_openclose_text')) ?></p>
          <?php }?>
          <div class="row info-ctr">
            <?php if( get_theme_mod( 'professional_portfolio_phone_text') != '' || get_theme_mod( 'professional_portfolio_phone_number') != '') { ?>
              <div class="col-xl-2 col-lg-2 col-md-2 col-12 icon-ctr align-self-center text-center">
                <div class="phone">
                  <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_phone_no_icon','fas fa-phone')); ?>"></i>
                </div>
              </div>
              <div class="col-xl-10 col-lg-10 col-md-10 col-12 align-self-center text-lg-start text-md-start text-center">
                <h6><?php echo esc_html(get_theme_mod('professional_portfolio_phone_text',''));?></h6>
                <p><a href="tel:<?php echo esc_attr( get_theme_mod('professional_portfolio_phone_number','') ); ?>"><?php echo esc_html(get_theme_mod('professional_portfolio_phone_number',''));?></a></p>
              </div>
            <?php }?>
          </div>
          <div class="row info-ctr">
            <?php if( get_theme_mod( 'professional_portfolio_email_text') != '' || get_theme_mod( 'professional_portfolio_email_address') != '') { ?>
                <div class="col-xl-2 col-lg-2 col-md-2 col-12 icon-ctr align-self-center text-center">
                  <div class="envelope">
                    <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_email_address_icon','fas fa-envelope-open')); ?>"></i>
                  </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-12 align-self-center text-lg-start text-md-start text-center">
                  <h6><?php echo esc_html(get_theme_mod('professional_portfolio_email_text',''));?></h6>
                  <p><a href="mailto:<?php echo esc_attr(get_theme_mod('professional_portfolio_email_address',''));?>"><?php echo esc_html(get_theme_mod('professional_portfolio_email_address',''));?><span class="screen-reader-text"><?php esc_html_e( 'support@example.com','professional-portfolio' );?></span></a></p>
                </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>