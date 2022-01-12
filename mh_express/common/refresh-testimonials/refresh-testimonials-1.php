<div class="refresh-testimonials-1-wrapper" style="background:url('<?php echo $bg_image;?>') 50% 0 no-repeat; background-size: cover;background-color: black;display: block;">
  <div class="refresh-testimonials-outer"> 
    <div class="refresh-testimonials">
        
        <?php
        /* Just keep adding 5 => '', 6 => '' */
		$refreshTestimonialBackgrounds = array(            
            1 => '<div class="refresh-testimonials-background-1" ></div>'
        );

         $refreshTestimonialBackgroundsCount = count($refreshTestimonialBackgrounds);
      echo $refreshTestimonialBackgrounds[rand(1, $refreshTestimonialBackgroundsCount)]; 
        ?>
        <div class="refresh-testimonials-inner">
            <div class="container">
                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 text-center">
                        <span class="refresh-testimonials-1-title"><?php echo $title; ?></span>

                        

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

                        <div class="refresh-testimonials-1-btns">
                            <span class="refresh-testimonials-1-btn text-center"> <a href="<?php echo $link; ?>"><?php echo $button; ?></a> </span>
                        </div>
                    	</div>
                	</div>
                    <div class="refresh-review-text">
            <div class="col-sm-12 col-md-6 col-md-offset-3">
              <span class="refresh-review-social-text">The reviews listed are from actual patients of <?php echo do_shortcode('[mh_site_settings type="company_name"]') ?>. Individual results may vary. Reviews are not claimed to represent results for everyone.</span>
                 
            </div>
                   </div>
            	</div>
        	</div>
    	</div>
    </div>
    
</div>