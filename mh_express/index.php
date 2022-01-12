<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<?php include get_template_directory(). '/common/copyright.php';?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
<div class="wrapper">
  <div class="header-wrapper">
    <?php include get_template_directory() . "/common/header-1.php"; ?>
    <?php include get_template_directory() . "/common/nav-1.php"; ?>
  </div>
  <main id="main" class="content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php // Get title of page 
          if ( is_home() ) {
            ?>
          <h1>
            <?php _e("Blog"); ?>
          </h1>
          <?php } elseif(is_single()) { ?>
          <h1>
            <?php the_title(); ?>
          </h1>
          <?php } elseif(is_category()) { ?>
          <h1>
            <?php _e("Posts Categorized:"); single_cat_title(); ?>
          </h1>
          <?php } elseif (is_tag()) { ?>
          <h1>
            <?php _e("Posts Tagged:"); single_tag_title(); ?>
          </h1>
          <?php } elseif (is_author()) { ?>
          <h1>
            <?php _e("Posts By:"); the_author_meta('display_name'); ?>
          </h1>
          <?php } elseif (is_day()) { ?>
          <h1>
            <?php _e("Daily Archives:"); the_time('l, F j, Y'); ?>
          </h1>
          <?php } elseif (is_month()) { ?>
          <h1>
            <?php _e("Monthly Archives:"); the_time('F Y'); ?>
          </h1>
          <?php } elseif (is_year()) { ?>
          <h1>
            <?php _e("Yearly Archives:"); the_time('Y'); ?>
          </h1>
          <?php } elseif (is_search()) { ?>
          <h1>
            <?php _e("Search Results for:"); echo esc_attr(get_search_query()); ?>
          </h1>
          <?php } ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix'); ?>>
            <div class="post-header"> <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
              <?php // the_post_thumbnail( 'thumbnail' ); ?>
              </a>
              <div class="page-header">
                <?php
                // don't show when viewing specific post
                if ( !is_single() ) {
                  ?>
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                  <?php the_title(); ?>
                  </a></h2>
                <?php } ?>
                <p class="meta small">
                  <?php _e('Posted') ?>
                  <time datetime="<?php echo the_time('Y-m-d H:i:s'); ?>">
                    <?php
                    the_date();
                    _e( " at " );
                    the_time();
                    ?>
                  </time>
                  <?php _e("by"); ?>
                  <?php the_author_posts_link(); ?>
                  <span class="amp">&amp;</span>
                  <?php _e("filed under"); ?>
                  <?php the_category(', '); ?>
                </p>
              </div>
            </div>
            <!-- end article header -->
            <div class="post_content clearfix">
              <?php
              if ( is_home() || is_category() || is_archive() || is_search() ) {
                the_excerpt( "More" );
              }
              ?>
            </div>
            <!-- end article section -->
            <div class="post-footer">
              <p class="tags meta small">
                <?php the_tags('<span class="tags-title">' . __("Tags") . ':</span> ', ' ', ''); ?>
              </p>
            </div>
            <!-- end article footer --> 
          </div>
          <!-- end article -->
          
          <?php endwhile; ?>
          <?php // Page navigation for "Previous/Next Page" links ?>
          <div class="navigation">
            <p>
              <?php posts_nav_link(); ?>
            </p>
          </div>
          <?php else : ?>
          <div id="post-not-found">
            <p>
              <?php _e("Sorry, but the requested resource was not found on this site."); ?>
            </p>
          </div>
          <?php endif; ?>
          <?php
          if ( is_single() )
          // comment_form($comment_form);
            comments_template();
          ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </main>
  <?php include get_template_directory() . '/common/interior-includes.php'; ?>
</div>
<?php include get_template_directory() . "/common/footer-1.php"; ?>
<?php wp_footer(); ?>
</body>
</html>