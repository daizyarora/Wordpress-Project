<?php
/*
  Template Name: MH Express Interior Form Page Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<?php include get_template_directory(). '/common/copyright.php';?>
<?php get_header(); ?>
<body <?php body_class('interior-form'); ?>>
<?php wp_body_open(); ?>
<?php include get_template_directory() . "/common/skip-to-main.php"; ?>
<div class="wrapper">
  <div class="header-wrapper">
    <?php include get_template_directory() . "/common/header-1.php"; ?>
    <?php include get_template_directory() . "/common/nav-1.php"; ?>
  </div>
  <main id="main" class="content">
    <div class="container">
      <?php
      // Start the loop.
      while ( have_posts() ): the_post();
      // Include the page content template.
      the_content();
      endwhile;
      ?>
    </div>
  </main>
  <?php include get_template_directory() . '/common/interior-includes.php'; ?>
</div>
<?php include get_template_directory() . "/common/footer-1.php"; ?>
<?php wp_footer();?>
</body>
</html>