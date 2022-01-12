<?php
/*
  Template Name: MH Express Home Page Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<?php include get_template_directory(). '/common/copyright.php';?>
<?php get_header(); ?>
<body class="home">
<?php wp_body_open(); ?>
<?php include get_template_directory() . "/common/skip-to-main.php"; ?>
<div class="wrapper">
   <?php 
      if(have_rows('header' , 'option')){
        while (have_rows('header' , 'option')) {
          the_row();
       if(get_row_layout() == 'banner_content'){
               $bg_image = get_sub_field('banner_background_image');   

           }
           }
        }  
      ?>


 <!-- CYCLE -->

      <div class="cycle-1-wrapper">
    <div class="banner">
        <div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-tile-vertical="true" data-cycle-speed="2500" data-cycle-timeout="2500" data-cycle-slides="> div.banner-slideshow" data-cycle-tile-count="20">
            <div class="banner-slideshow banner-slide-1" style="background:url('<?php echo $bg_image;?>') 50% 0 no-repeat; background-size: cover;" ></div>            
        </div>
        <div class="banner-content-container hidden-xs">
           
           <!-- BANNER CAROUSLE -->
           <?php 

if(have_rows('header' , 'option')){
   while (have_rows('header' , 'option')) {
       the_row();
       if(get_row_layout() == 'banner_content'){
        $slides = get_sub_field('slides');

        }
   }
} 

 ?>

<!-- carousel content  -->
<div class="banner-content-wrapper">
  <div class="banner-content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="carousel-wrapper">
            
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <!-- ITEM -->

                <?php


                for ($i=0; $i < sizeof($slides) ; $i++) { 

                  if($i == 0){ $class =  "active";} else {$class="";};

                  ?>


                  <div class="item <?php echo $class; ?>">
                  <div class="carousel-slide-1">
                    <div class="carousel-content-wrapper hidden-xs">
                      <div class="banner-copy">
                        <div class="banner-copy-inner-container"> 
                        <span class="banner-copy-text"><?php echo $slides[$i]['title'] ?></span>
                        <span class="banner-sub-copy-text"><?php echo $slides[$i]['sub_copy'] ?></span>
                        <span class="banner-copy-button"><a href="<?php echo $slides[$i]['button_link'] ?>"><?php echo $slides[$i]['button_text'] ?></a>
                        </span>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>


                  <?php
                  
                }

                 ?>
                
         
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
           <!-- BANNER CAROUSLE -->
            
        </div>

        <!-- CARSOULE CONTROLES -->
        <div class="carousel-controls-wrapper hidden-xs">
  <div class="carousel-controls carousel-controls-dark">
    <div class="carousel-controls-background">
      <div class="carousel-controls-outer">
        <div class="carousel-controls-inner"> <a class="carousel-control left carousel-previous" href="#carousel-example-generic" data-slide="prev" title="previous"> <i class="fa fa-chevron-left"></i><span class="carousel-control-text">Carousel Previous</span></a>
          <button class="carousel-control center carousel-pause"> <i class="glyphicon glyphicon-pause" title="pause"></i><span class="carousel-control-text">Carousel Pause</span></button>
          <button class="carousel-control center carousel-resume"> <i class="glyphicon glyphicon-play" title="play"></i><span class="carousel-control-text">Carousel Play</span></button>
          <a class="carousel-control right carousel-next" href="#carousel-example-generic" data-slide="next" title="next"> <i class="fa fa-chevron-right"></i><span class="carousel-control-text">Carousel Next</span></a> </div>
      </div>
    </div>
  </div>
</div>
        <!-- CARSOULE CONTROLES -->
    </div>
</div>
 <!-- CYCLE -->
 
  <div class="header-wrapper">
    <?php include get_template_directory() . "/common/header-1.php"; ?>
    <?php include get_template_directory() . "/common/nav-1.php"; ?>
  </div>
  <div class="xs-wrapper">
    <div class="banner-content-container-xs">
      <?php include get_template_directory() . "/common/banner-content.php"; ?>
    </div>
        <?php include get_template_directory() . "/common/callouts/callouts-xs.php"; ?>
        <!-- Dynamic Modules Starts Here  -->
        <?php
      
        if(have_rows('modules' , 'option')){
          while (have_rows('modules' , 'option')) {
            the_row();
            if(get_row_layout() == 'callouts_1'){
              $content = get_sub_field('content');
              include get_template_directory() . "/common/callouts/callouts-1.php";
            } elseif (get_row_layout() == 'seo_layer_1') {
              $h1_title = get_sub_field('h1_title');
              $copy = get_sub_field('copy');
              include get_template_directory() . "/common/seo-layer/seo-layer-1.php";
            } elseif (get_row_layout() == 'callouts_2') {
              $content = get_sub_field('content');
              include get_template_directory() . "/common/callouts/callouts-2.php";
            } elseif (get_row_layout() == 'callouts_3') {
              $intro = get_sub_field('intro');
              $leftRow = get_sub_field('left_row');
              $rightRow = get_sub_field('right_row');
              $bgImage = get_sub_field('background_image');
              include get_template_directory() . "/common/callouts/callouts-3.php";
            } elseif (get_row_layout() == 'callouts_4') {
              $intro = get_sub_field('intro');
              $callouts = get_sub_field('callouts');
              include get_template_directory() . "/common/callouts/callouts-4.php";
            }  elseif (get_row_layout() == 'callouts_5') {
              $callouts = get_sub_field('callouts');
              $taglines = get_sub_field('taglines');
              include get_template_directory() . "/common/callouts/callouts-5.php";
            } elseif (get_row_layout() == 'callouts_6') {
              $taglines = get_sub_field('taglines');
              $buttons = get_sub_field('buttons');
               $bgImage = get_sub_field('background_image');
              include get_template_directory() . "/common/callouts/callouts-6.php";
            } elseif (get_row_layout() == 'callouts_7') {
              $title = get_sub_field('title');
              $copy = get_sub_field('copy');
              $copy2 = get_sub_field('copy_2');
              $background_image7 = get_sub_field('background_image');
              include get_template_directory() . "/common/callouts/callouts-7.php";
            } elseif (get_row_layout() == 'callouts_8') {
              $title = get_sub_field('title');
              $copy = get_sub_field('copy');
              $copy2 = get_sub_field('copy_2');
              include get_template_directory() . "/common/callouts/callouts-8.php";
            } elseif (get_row_layout() == 'callouts_9') {
              $content = get_sub_field('content');
              include get_template_directory() . "/common/callouts/callouts-9.php";
            } elseif (get_row_layout() == 'meet_the_doctor') {
              $image = get_sub_field('image');
              $title = get_sub_field('title');
              $copy = get_sub_field('copy');
              $copy2 = get_sub_field('copy_2');
              $button_text= get_sub_field('button_text');
              $button_link = get_sub_field('button_link'); 
              include get_template_directory() . "/common/meet-the-doctor/meet-the-doctor.php";
            } elseif (get_row_layout() == 'meet_the_doctor_2') {
              $image = get_sub_field('image');
              $title = get_sub_field('title');
              $copy = get_sub_field('copy');
              $copy2 = get_sub_field('copy2');
              $year = get_sub_field('year');
              $yearText = get_sub_field('year_text');
              include get_template_directory() . "/common/meet-the-doctor/meet-the-doctor-2.php";
            } elseif (get_row_layout() == 'meet_the_doctor_3') {
              $image = get_sub_field('image');
              $image2 = get_sub_field('image2');
              $title = get_sub_field('title');
              $copy = get_sub_field('copy');
              $doctor_title = get_sub_field('doctor_title'); 
              $doctor_title2 = get_sub_field('doctor_title2');
              $copy = get_sub_field('copy');
              include get_template_directory() . "/common/meet-the-doctor/meet-the-doctor-3.php";
            }elseif (get_row_layout() == 'callouts_10') {  
              $image = get_sub_field('image');
              $background_image = get_sub_field('background_image');
              $title = get_sub_field('title');
              $copy = get_sub_field('copy');
              $link = get_sub_field('link');
              $button = get_sub_field('button');
              include get_template_directory() . "/common/callouts/callouts-10.php";
            } elseif (get_row_layout() == 'refresh_testimonials_1') {          
              $title = get_sub_field('title'); 
              $testimonialItems = get_sub_field('testimonial_items');      
              $button = get_sub_field('button');
              $link = get_sub_field('link');
              $bg_image = get_sub_field('background_image'); 
              include get_template_directory() . "/common/refresh-testimonials/refresh-testimonials-1.php";
            } elseif (get_row_layout() == 'refresh_testimonials_2') {          
              $title = get_sub_field('title'); 
              $testimonialItems = get_sub_field('testimonial_items');      
              $button = get_sub_field('button');  
              $link = get_sub_field('link');
              include get_template_directory() . "/common/refresh-testimonials/refresh-testimonials-2.php";
            } elseif (get_row_layout() == 'refresh_testimonials_3') {          
              $image = get_sub_field('image');    
              $icon = get_sub_field('icon'); 
              $testimonialItems = get_sub_field('testimonial_items');      
              $button = get_sub_field('button');  
              $link = get_sub_field('link');
              include get_template_directory() . "/common/refresh-testimonials/refresh-testimonials-3.php";
            }  elseif (get_row_layout() == 'what_to_expect_1') {          
              $title = get_sub_field('title');        
              $subTitle = get_sub_field('sub_title'); 
              $image = get_sub_field('image');   
              $copy = get_sub_field('copy');   
              $button = get_sub_field('button');
              include get_template_directory() . "/common/what-to-expect.php";
            } elseif (get_row_layout() == 'what_to_expect_2') {          
              $title = get_sub_field('title');        
              $subTitle = get_sub_field('sub_title'); 
              $video = get_sub_field('video');   
              $copy = get_sub_field('copy');   
              $button = get_sub_field('button');
              include get_template_directory() . "/common/what-to-expect-1.php";
            } elseif (get_row_layout() == 'location_1') {          
              $title = get_sub_field('title');        
              $copy1 = get_sub_field('copy_1'); 
              $copy2 = get_sub_field('copy_2');   
              $directionLink = get_sub_field('direction_link');   
              $directionText = get_sub_field('direction_text');   
              $phone = get_sub_field('phone');
              $phoneLink = get_sub_field('phone_link');       
              $day1 = get_sub_field('day_1'); 
              $hour1 = get_sub_field('hour_1');        
              $day2 = get_sub_field('day_2'); 
              $hour2 = get_sub_field('hour_2'); 
              $button = get_sub_field('button');
              $buttonLink = get_sub_field('button_link');
              $background_image = get_sub_field('background_image');
              include get_template_directory() . "/common/sup-info/sup-info-2.php";
            } elseif (get_row_layout() == 'location_2') {          
              $addressTitle = get_sub_field('address_title');        
              $copy1 = get_sub_field('copy_1'); 
              $copy2 = get_sub_field('copy_2');   
              $directionLink = get_sub_field('direction_link');   
              $directionText = get_sub_field('direction_text');          
              $phoneTitle = get_sub_field('phone_title');   
              $phone = get_sub_field('phone');
              $phoneLink = get_sub_field('phone_link');      
              $hourTitle = get_sub_field('hour_title');  
              $hour1 = get_sub_field('hour_1');  
              $hour2 = get_sub_field('hour_2'); 
              include get_template_directory() . "/common/sup-info/sup-info-3.php";
            }  elseif (get_row_layout() == 'location_3') {          
              $title = get_sub_field('title');        
              $contentLeft = get_sub_field('content_left');
              $contentRight = get_sub_field('content_right');
              $background_image = get_sub_field('background_image');
              include get_template_directory() . "/common/sup-info/sup-info-4.php";
            }  elseif (get_row_layout() == 'aff_logo') {     
              $logos = get_sub_field('logos'); 
              include get_template_directory() . "/common/aff-logos.php";
            } elseif (get_row_layout() == 'service_area1') {        
              $title = get_sub_field('title');   
              $content = get_sub_field('content'); 
              include get_template_directory() . "/common/service-area.php";
            } elseif (get_row_layout() == 'service_area2') {        
              $title = get_sub_field('title');   
              $content = get_sub_field('content'); 
              include get_template_directory() . "/common/seo-locations.php";
            } 

          }
        }

        ?>
        <!-- Dynamic Modules Ends Here  -->
    <?php include get_template_directory() . "/common/footer-1.php"; ?>
  </div>
</div>
<?php wp_footer();?>
</body>
</html>