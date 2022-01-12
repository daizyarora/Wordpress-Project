<div class="sup-info-4-wrapper">
    <div class="sup-info-4" style="background:url('<?php echo $background_image; ?>');background-size: cover;background-repeat: no-repeat;background-color: #fff;">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12"><span class="sup-info-4-copy-line-1"><?php echo $title; ?></span></div>
                <div class="col-sm-6 col-md-4 col-md-offset-2">   <?php
        for ($l=0; $l < sizeof($contentLeft) ; $l++) { 
           ?>
                    <div class="sup-info-4-copy">
                        <span class="sup-info-4-address sup-info-4-address-line-1"><?php echo htmlentities($contentLeft[$l]['copy_1']);?></span>
                        <span class="sup-info-4-address sup-info-4-address-line-2"><?php echo htmlentities($contentLeft[$l]['copy_2']);?></span>
                        <span class="sup-info-4-link"> <a href="<?php echo htmlentities($contentLeft[$l]['direction_link']);?>"><?php echo htmlentities($contentLeft[$l]['direction_text']);?></a> </span>
                        <span class="sup-info-4-phone"><?php echo htmlentities($contentLeft[$l]['phone']);?></span>
                        <span class="sup-info-4-hours"><?php echo htmlentities($contentLeft[$l]['hour']);?></span>
                        
                    </div>
                     <?php
         } 
         ?>
                </div>

                <div class="col-sm-6 col-md-4 border-left-right"><?php
        for ($l=0; $l < sizeof($contentRight) ; $l++) { 
           ?>
                    <div class="sup-info-4-copy">
                        <span class="sup-info-4-address sup-info-4-address-line-1"><?php echo htmlentities($contentRight[$l]['copy_1']);?></span>
                        <span class="sup-info-4-address sup-info-4-address-line-2"><?php echo htmlentities($contentRight[$l]['copy_2']);?></span>
                        <span class="sup-info-4-link"> <a href="<?php echo htmlentities($contentRight[$l]['direction_link']);?>"><?php echo htmlentities($contentRight[$l]['direction_text']);?></a> </span>
                        <span class="sup-info-4-phone"><?php echo htmlentities($contentRight[$l]['phone']);?></span>
                        <span class="sup-info-4-hours"><?php echo htmlentities($contentRight[$l]['hour_1']);?></span>
                        <span class="sup-info-4-hours"><?php echo htmlentities($contentRight[$l]['hour_2']);?></span>
                        <span class="sup-info-4-hours"><?php echo htmlentities($contentRight[$l]['hour_3']);?></span>
                    </div>
                     <?php
         } 
         ?>
                </div>
            </div>
        </div>
    </div>
</div>