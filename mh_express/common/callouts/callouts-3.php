<div class="callouts-3-wrapper">
	<div class="callouts-3-intro">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">				
					<span class="callouts-3-intro-title">
						<span class="callouts-3-intro-title-line-1"> <?php echo htmlentities($intro[0]['title']); ?> </span>
						<span class="callouts-3-intro-title-line-2"> <?php echo htmlentities($intro[0]['sub_title']); ?></span>
					</span>
					<span class="callouts-3-intro-copy"><?php echo htmlentities($intro[0]['copy']); ?></span>
				</div>
			</div>
		</div>
	</div>
	<div class="callouts-3">
		<div class="callouts-3-inner">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-4">	

					<?php
					for ($l=0; $l < sizeof($leftRow) ; $l++) { ?>

						<div class="callout-3-content" data-aos="fade-up">
							<div class="callout-3-content-inner">
								<span class="callout-3-title"> <?php echo htmlentities($leftRow[$l]['title']); ?> </span>
								<span class="callout-3-copy"> <?php echo htmlentities($leftRow[$l]['copy']); ?></span>
								<span class="callout-3-btn">
									<a href="<?php echo htmlentities($leftRow[$l]['button_link']); ?>"><?php echo htmlentities($leftRow[$l]['button_text']); ?></a>
								</span>
							</div>
						</div>

						<?php
					  	
					  }  
					?>	

						

					</div>
					<div class="col-sm-4 hidden-xs hidden-sm" style="background-image: url('<?php echo $bgImage; ?>');"></div>
					<div class="col-sm-6 col-md-4">

						

					<?php
					for ($l=0; $l < sizeof($rightRow) ; $l++) { ?>

						<div class="callout-3-content" data-aos="fade-up">
							<div class="callout-3-content-inner">
								<span class="callout-3-title"> <?php echo htmlentities($rightRow[$l]['title']); ?> </span>
								<span class="callout-3-copy"> <?php echo htmlentities($rightRow[$l]['copy']); ?></span>
								<span class="callout-3-btn">
									<a href="<?php echo htmlentities($rightRow[$l]['button_link']); ?>"><?php echo htmlentities($rightRow[$l]['button_text']); ?></a>
								</span>
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