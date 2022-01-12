<div class="callouts-2-wrapper hidden-xs">
	<div class="callouts-2">
		<div class="container-fluid">
			<div class="row">

		
 <?php
        for ($l=0; $l < sizeof($content) ; $l++) { 
           ?>
         
            <div class="col-sm-6 col-lg-3" data-aos="fade-up">
								<div class="callout-2-content">
									<a href="/contact/">
										<div class="callout-2-icon">
											<?php echo $content[$l]['icon'];?> 					
											</div>
											<div class="callout-2-copy">
												<span class="callout-2-title"><?php echo htmlentities($content[$l]['title']);?> </span>
												<span class="callout-2-copy"><?php echo htmlentities($content[$l]['copy']);?> </span>
											</div>
										</a>
									</div>
								</div>

								 <?php
         } 
         ?>

			
        <!-- ACF CONTENT -->
			</div>
		</div>
	</div>
</div>