<div class="callouts-9-wrapper">
	<div class="callouts">
		<div class="container">
			<div class="row">
				<?php
        for ($l=0; $l < sizeof($content) ; $l++) { 
           ?>
				<div class="col-sm-4 callout-wrapper"> <a href="<?php echo htmlentities($content[$l]['link']);?>" class="callout"><span class="callout-text-line-1"><?php echo htmlentities($content[$l]['line_1']);?> </span><span class="callout-text-line-2"><?php echo htmlentities($content[$l]['line_2']);?></span></a> </div>

           <?php
         } 
         ?>

			</div>
		</div>
	</div>
</div>