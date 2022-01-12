<div class="refresh-testimonials-3-wrapper">
    <div class="refresh-testimonials-outer">
        <div class="refresh-testimonials">
            <?php
            /* Just keep adding 5 => '', 6 => '' */
            $refreshTestimonialBackgrounds = array(
            1 => '<div class="refresh-testimonials-background-1"></div>',
            );
            $refreshTestimonialBackgroundsCount = count($refreshTestimonialBackgrounds);
            echo $refreshTestimonialBackgrounds[rand(1, $refreshTestimonialBackgroundsCount)];
            ?>
            <div class="refresh-testimonials-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="refresh-testimonials-image-container">
                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <span class="refresh-testimonials-icon"> <img src="<?php echo $icon; ?>" alt="" class="img-responsive"></span>
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

                            <div class="refresh-btn">
                                <a href="<?php echo $link; ?>"><?php echo $button; ?></a>
                            </div>

                            <div class="refresh-review-text text-left">                            
                              <span class="refresh-review-social-text">The reviews listed are from actual patients of <?php echo do_shortcode('[mh_site_settings type="company_name"]') ?>. Individual results may vary. Reviews are not claimed to represent results for everyone.</span>
                              
                            </div>
                        </div>

                       
                        


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>