<div class="callouts-1-wrapper hidden-xs">
  <div class="callouts-1">
    <div class="container-fluid">
      <div class="row">
        <!-- ACF CONTENT -->

        <?php
        for ($l=0; $l < sizeof($content) ; $l++) { 
           ?>

           <div class="col-sm-6 col-lg-3" data-aos="fade-up">
          <div class="callout-1-content">
            <a href="/contact/">
              <div class="callout-1-icon"><?php echo $content[$l]['icon'];?> 
           
              </div>
              <div class="callout-1-copy">
                <span class="callout-1-title"> <?php echo htmlentities($content[$l]['title']);?> </span>
                <span class="callout-1-copy"><?php echo htmlentities($content[$l]['copy']); ?></span>
              </div>
            </a>
          </div>
        </div>


           <?php
         } 
         ?>


         
<!-- 
           <div class="col-sm-6 col-lg-3" data-aos="fade-up">
          <div class="callout-1-content">
            <a href="/contact/">
              <div class="callout-1-icon">
                <i class="fas fa-home"></i>
           
              </div>
              <div class="callout-1-copy">
                <span class="callout-1-title"> Title </span>
                <span class="callout-1-copy">Copy</span>
              </div>
            </a>
          </div>
        </div>

           <div class="col-sm-6 col-lg-3" data-aos="fade-up">
          <div class="callout-1-content">
            <a href="/contact/">
              <div class="callout-1-icon">
                <i class="fas fa-home"></i>
           
              </div>
              <div class="callout-1-copy">
                <span class="callout-1-title"> Title </span>
                <span class="callout-1-copy">Copy</span>
              </div>
            </a>
          </div>
        </div>

           <div class="col-sm-6 col-lg-3" data-aos="fade-up">
          <div class="callout-1-content">
            <a href="/contact/">
              <div class="callout-1-icon">
                <i class="fas fa-home"></i>
           
              </div>
              <div class="callout-1-copy">
                <span class="callout-1-title"> Title </span>
                <span class="callout-1-copy">Copy</span>
              </div>
            </a>
          </div>
        </div>
 -->


          
        <!-- ACF CONTENT -->
      </div>
    </div>
  </div>
</div>