<?php
/*
  Template Name: MH Express Sitemap Page Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<?php include get_template_directory(). '/common/copyright.php';?>
<?php get_header(); ?>
<body <?php body_class('sitemap'); ?>>
<?php wp_body_open(); ?>
<?php include get_template_directory() . "/common/skip-to-main.php"; ?>
<div class="wrapper">
  <div class="header-wrapper">
    <?php include get_template_directory() . "/common/header-1.php"; ?>
    <?php include get_template_directory() . "/common/nav-1.php"; ?>
  </div>
  <main id="main" class="content">
    <div class="sitemap-nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <?php
            // Start the loop.
            while ( have_posts() ): the_post();
            echo "<h1>";
            echo the_title();
            echo "</h1>";
            // Include the page content template.
            the_content();
            //get_template_part('content', 'home');
            // End the loop.
            endwhile;
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php
    if ( do_shortcode( '[mh_site_settings type="site_index"]' ) ) {
      include get_template_directory() . "/common/site-index.php";
      ?>
    <script>
			var siteMapSiteIndex = document.querySelector('main .site-index-list-wrapper');
			siteMapSiteIndex.classList.remove("site-index-list-wrapper-collapse");
		</script>
    <?php } ?>
  </main>
  <?php include get_template_directory() . '/common/interior-includes.php'; ?>
</div>
<?php include get_template_directory() . "/common/footer-1.php"; ?>
<?php wp_footer();?>
</body>
</html>