<div class="footer footer-1">
  <div class="footer-content">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <p class="footer-legal footer-legal-a11y">If you are having trouble accessing information on this website or need materials in an alternate format, please contact us for assistance.</p>
          <p class="footer-legal">Base Content Copyright © <?php echo date( "Y");?> Market Hardware, Inc. Additional text content Copyright © <?php echo date( "Y");?>, <?php echo do_shortcode('[mh_site_settings type="company_name"]')?>.<br class="br-a11y">
            <span><a href="<?php echo do_shortcode('[mh_site_settings type="vertical_url"]')?>"><?php echo do_shortcode('[mh_site_settings type="vertical_name"]')?></a> by <a href="//markethardware.com/">Market Hardware</a><br class="br-a11y">
            <a class="sitemap-link" href="/sitemap/">Sitemap</a></span>
            <?php
            if ( do_shortcode( '[mh_site_settings type="userway"]' ) ) {
              ?>
            <span class="accessibility-statement-link"><a href="/accessibility-statement/">Accessibility Statement</a></span>
            <?php } ?>
          </p>
          <p class="footer-credit-cards-disclaimer">All Major Credit Cards Accepted</p>
        </div>
      </div>
    </div>
  </div>
</div>
