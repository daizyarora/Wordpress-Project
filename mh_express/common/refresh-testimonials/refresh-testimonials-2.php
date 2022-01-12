<div class="refresh-testimonials-2-wrapper">
  <div class="refresh-testimonials-outer">
    <div class="refresh-testimonials">
      <?php
      /* Just keep adding 5 => '', 6 => '' */
      $refreshTestimonialBackgrounds = array(
      1 => '<div class="refresh-testimonials-background-1"></div>'
      );
      $refreshTestimonialBackgroundsCount = count($refreshTestimonialBackgrounds);
      echo $refreshTestimonialBackgrounds[rand(1, $refreshTestimonialBackgroundsCount)];
      ?>
      <div class="refresh-testimonials-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2">
              <div class="refresh-testimonial-border">
                
                       <?php
                /* Just keep adding 5 => '', 6 => '' */
                $refreshTestimonial = array();

                for ( $i=0; $i < sizeof($testimonialItems) ; $i++) { 

                    $refreshTestimonial[$i] =  '<div class="refresh-testimonial"><span class="refresh-testimonial-testimony">'.$testimonialItems[$i]['testimony'].'</span><span class="refresh-testimonial-testifier">'.$testimonialItems[$i]['testifier'].'</span></div>';
                };               

                $refreshTestimonialCount = (count($refreshTestimonial)) - 1;
                $randomNumber = rand(0, $refreshTestimonialCount);                
                echo $refreshTestimonial[$randomNumber];
                ?>
                <span class="refresh-review-social-button"><a href="<?php echo $link; ?>"><?php echo $button; ?></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="refresh-reviews-social">
    <div class="container">
      <div class="refresh-review-text">
        <div class="col-sm-12 col-md-8 col-md-offset-2">
          <span class="refresh-review-social-text">The reviews listed are from actual patients of <?php echo do_shortcode('[mh_site_settings type="company_name"]') ?>. Individual results may vary. Reviews are not claimed to represent results for everyone.</span>
          
        </div>
      </div>
    </div>
  </div>
</div>