<?php 

if(have_rows('header' , 'option')){
   while (have_rows('header' , 'option')) {
       the_row();
       if(get_row_layout() == 'header_content'){
        $logo_image_link = get_sub_field('header_logo');
        $logo_size = getimagesize($logo_image_link);
        $logo_width = $logo_size[0];
        $logo_height = $logo_size[1];
        $header_USP = get_sub_field('header_usp');
        $header_CTA = get_sub_field('header_cta');
        $header_CTA_Link = get_sub_field('header_cta_link');
        $header_callout_text = get_sub_field('header_callout_text');
        $header_callout_link = get_sub_field('header_callout_link');

       }
   }
} 

 ?>

<header class="header-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="header-company-logo">
                    <a href="/" title="<?php echo do_shortcode('[mh_site_settings type="company_name"]'); ?> Home Page" class="header-logo-link"><span class="logo" style="background-image:url('<?php echo $logo_image_link;  ?>'); background-size: <?php echo $logo_width."px". " ".$logo_height."px" ?>; height: <?php echo $logo_height."px"; ?> ; width: <?php echo $logo_width."px"; ?>;"><?php echo do_shortcode('[mh_site_settings type="company_name"]') ?></span></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-6 hidden-xs header-usp-container">
            <span class="header-request-btn"><a href="<?php echo htmlentities($header_CTA_Link); ?>"><?php echo htmlentities($header_CTA); ?></a></span>
            <span class="header-usp"><?php echo htmlentities($header_USP); ?></span>
            </div>
            <div class="header-contact hidden-xs hidden-sm col-md-3 col-lg-3 header-contact">
               <span class="header-phone"><a href="tel:+1<?php echo do_shortcode('[mh_site_settings type="company_phone_1_link"]') ?>"><?php echo do_shortcode('[mh_site_settings type="company_phone_1"]') ?></a></span><br class="br-a11y"><span class="header-link"><a href="<?php echo htmlentities($header_callout_link); ?>"><?php echo htmlentities($header_callout_text); ?></a></span>
            </div>
        </div>
    </div>
</header>