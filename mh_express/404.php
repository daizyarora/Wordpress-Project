<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<?php include get_template_directory(). '/common/copyright.php';?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
		<div class="wrapper">
		<div class="header-wrapper">
						<?php include get_template_directory() . "/common/header-1.php"; ?>  			<?php include get_template_directory() . "/common/nav-1.php"; ?> 		</div>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php if (has_post_thumbnail()) { ?>
						<aside class="float-right hidden-xs">
							<?php the_post_thumbnail('features-image-service', array('class' => 'img-responsive')); ?>
						</aside>
						<?php }; ?>
						<main id="main">
							<h1>The page you&#8217;re looking for isn&#8217;t here. </h1>
							<p>We&#8217;re sorry, the page you are looking for may have moved or does not exist.</p>
							<p>We suggest starting back at our <a href="/">home page.</a> </p>
						</main>
					</div>
				</div>
			</div>
		</div>
		
	</div>
		<?php include get_template_directory() . "/common/footer-1.php"; ?> 	<?php wp_footer();?>
</body>

</html>