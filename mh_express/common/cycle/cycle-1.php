<div class="cycle-1-wrapper">
    <div class="banner">
        <div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-tile-vertical="true" data-cycle-speed="2500" data-cycle-timeout="2500" data-cycle-slides="> div.banner-slideshow" data-cycle-tile-count="20">
            <div class="banner-slideshow banner-slide-1" style="background:url('<?php echo $bg_image;?>') 50% 0 no-repeat; background-size: cover;" ></div>            
        </div>
        <div class="banner-content-container hidden-xs">
            <?php include get_template_directory() . "/common/banner-carousel.php"; ?>
            
        </div>
        
        <?php include get_template_directory() . "/common/carousels/carousel-controls.php"; ?>
    </div>
</div>