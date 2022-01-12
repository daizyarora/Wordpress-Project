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
        <div class="col-sm-8">
          <?php if (has_post_thumbnail()) { ?>
          <aside class="float-right hidden-xs">
            <?php the_post_thumbnail('features-image-service', array('class' => 'img-responsive')); ?>
          </aside>
          <?php }; ?>
          <div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix'); ?>> <span class="hidden">
              <?php the_modified_date('Y-m-d h:i:s a'); ?>
              </span>
              <header>
                <div class="page-header">
                  <h1 class="single-title">
                    <?php the_title(); ?>
                  </h1>
                </div>
                <p class="meta">
                  <?php _e("Posted"); ?>
                  <time datetime="<?php echo the_time('Y-m-d H:i:s'); ?>">
                    <?php the_date(); ?>
                    at
                    <?php the_time(); ?>
                  </time>
                  <?php _e("by"); ?>
                  <?php the_author_posts_link(); ?>
                  <span class="amp">&amp;</span>
                  <?php _e("filed under"); ?>
                  <?php the_category(', '); ?>
                </p>
                <?php the_post_thumbnail( 'wpbs-featured', array('class' => 'center-block img-responsive featured-margin')); ?>
              </header>
              <!-- end article header -->
              
              <section class="post_content clearfix">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
              </section>
              <!-- end article section -->
              
              <footer>
                <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>
              </footer>
              <!-- end article footer --> 
              
            </article>
            <!-- end article -->
            <hr>
            <?php comments_template('/comments.php', true);?>
            <?php endwhile; ?>
            <?php else : ?>
            <article id="post-not-found">
              <header>
                <h1>
                  <?php _e("Not Found"); ?>
                </h1>
              </header>
              <section class="post_content">
                <p>
                  <?php _e("Sorry, but the requested resource was not found on this site."); ?>
                </p>
              </section>
            </article>
            <?php endif; ?>
          </div>
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