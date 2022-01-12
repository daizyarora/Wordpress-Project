<head>
	<meta charset="utf-8">
	<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "LocalBusiness",
		  "name": "<?php echo do_shortcode('[mh_site_settings type="company_name"]')?>",
		  "image" : "<?php echo get_template_directory_uri() ?>/design/logo.png",
		  "address": {
			"@type": "PostalAddress",
			"streetAddress": "<?php echo do_shortcode('[mh_site_settings type="company_street"]')?>",
			"addressLocality": "<?php echo do_shortcode('[mh_site_settings type="company_city"]')?>",
			"addressRegion": "<?php echo do_shortcode('[mh_site_settings type="company_state"]')?>",
			"postalCode": "<?php echo do_shortcode('[mh_site_settings type="company_zip"]')?>"
		  },
		  "telephone": "<?php echo do_shortcode('[mh_site_settings type="company_phone_1"]')?>",
		  "email": "mailto:<?php echo do_shortcode('[mh_site_settings type="company_email"]')?>",
			"openingHours": [
				"<?php echo do_shortcode('[mh_site_settings type="company_hours_1"]')?>",
				"<?php echo do_shortcode('[mh_site_settings type="company_hours_2"]')?>",
				"<?php echo do_shortcode('[mh_site_settings type="company_hours_3"]')?>"
			],
		  "url": "<?php echo get_site_url();?>"
		}
	</script>
	<?php if (null != do_shortcode('[mh_site_settings type="google_publisher"]') && do_shortcode('[mh_site_settings type="google_publisher"]') != "") { ?>
	<link rel="publisher" href="<?php echo do_shortcode('[mh_site_settings type="google_publisher"]') ?>"><?php } ?><?php if (null != do_shortcode('[mh_site_settings type="google_webmaster"]') && do_shortcode('[mh_site_settings type="google_webmaster"]')  != "") { ?>
	<meta name="google-site-verification" content="<?php echo do_shortcode('[mh_site_settings type="google_webmaster"]') ?>"><?php } ?>
	<meta name="author" content="Market Hardware">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
     
    <?php /* Favicons================================================== */ ?>
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri()?>/design/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri()?>/design/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri()?>/design/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri()?>/design/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-config" content="<?php echo get_template_directory_uri()?>/design/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
      
	<?php /* Google Analytics and Webmaster Tools ====================================== 
	Edit This Section Only Using Site Settings*/ ?>
	<?php if (null != do_shortcode('[mh_site_settings type="google_analytics"]') && do_shortcode('[mh_site_settings type="google_analytics"]') != "") { ?>
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo do_shortcode('[mh_site_settings type="google_analytics"]') ?>"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments)};
			gtag('js', new Date());
			gtag('config', '<?php echo do_shortcode('[mh_site_settings type="google_analytics"]') ?>');
		</script>
	<?php } ?>
	<?php wp_head(); ?>
</head>