<?php
/**
 * The template part for displaying single post content
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

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <h1><?php the_title(); ?></h1>
    <?php if( get_theme_mod( 'professional_portfolio_single_postdate',true) == 1 || get_theme_mod( 'professional_portfolio_single_author',true) == 1 || get_theme_mod( 'professional_portfolio_single_comments',true) == 1 || get_theme_mod( 'professional_portfolio_single_time',true) == 1) { ?>
        <div class="post-info p-2 mb-3">
            <?php if(get_theme_mod('professional_portfolio_single_postdate',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_single_postdate_icon','fas fa-calendar-alt')); ?> me-2"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $professional_portfolio_archive_year, $professional_portfolio_archive_month, $professional_portfolio_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('professional_portfolio_single_post_meta_field_separator', '|'));?></span>
            <?php } ?>

            <?php if(get_theme_mod('professional_portfolio_single_author',true)==1){ ?>
                 <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_single_author_icon','fas fa-user')); ?> me-2"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('professional_portfolio_single_post_meta_field_separator', '|'));?></span>
            <?php } ?>

            <?php if(get_theme_mod('professional_portfolio_single_comments',true)==1){ ?>
                 <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_single_comments_icon','fa fa-comments')); ?> me-2" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'professional-portfolio'), __('0 Comments', 'professional-portfolio'), __('% Comments', 'professional-portfolio') ); ?></span><span><?php echo esc_html(get_theme_mod('professional_portfolio_single_post_meta_field_separator', '|'));?></span>
            <?php } ?>

            <?php if(get_theme_mod('professional_portfolio_single_time',true)==1){ ?>
               <i class="<?php echo esc_attr(get_theme_mod('professional_portfolio_single_time_icon','fas fa-clock')); ?> me-2"></i> <span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
            <?php echo esc_html (professional_portfolio_edit_link()); ?>
        </div>
    <?php } ?>
    <?php if(has_post_thumbnail()) { ?>
        <div class="feature-box">
            <img class="page-image" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?> post thumbnail image">
            <hr>
        </div>
    <?php } ?>
    <?php if( get_theme_mod( 'professional_portfolio_single_post_category',true) == 1) { ?>
        <div class="single-post-category mt-3">
        <span class="category"><?php esc_html_e('Categories:','professional-portfolio'); ?></span>
          <?php the_category(); ?>
        </div>
    <?php }?>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <?php if(get_theme_mod('professional_portfolio_toggle_tags',false)==1){ ?>
        <div class="tags-bg p-2 mt-3 mb-3">
            <?php the_tags(); ?>
        </div>
    <?php } ?>
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
        comments_template();

        if ( is_singular( 'attachment' ) ) {
            // Parent post navigation.
            the_post_navigation( array(
                'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'professional-portfolio' ),
            ) );
        } elseif ( is_singular( 'post' ) ) {
            // Previous/next post navigation.
            the_post_navigation( array(
              'next_text' => '<span class="meta-nav" aria-hidden="true">' .esc_html(get_theme_mod('professional_portfolio_single_blog_next_navigation_text','NEXT')) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'professional-portfolio' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' .esc_html(get_theme_mod('professional_portfolio_single_blog_prev_navigation_text','PREVIOUS')) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'professional-portfolio' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
        }
    ?>
    <?php get_template_part('template-parts/related-posts'); ?>
</article>