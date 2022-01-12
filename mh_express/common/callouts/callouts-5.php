<div class="callouts-5-wrapper hidden-xs">
	<div class="callouts">
		<div class="container">
			<div class="row">

				<?php
				for ($l=0; $l < sizeof($callouts) ; $l++) { 
					?>

					<div class="col-sm-3 callout-wrapper">
					<img class="img-responsive" src="<?php echo $callouts[$l]['image']; ?>" alt="">
					<div class="callouts-5-content-bg">
						<span class="callout-5-title"><?php echo $callouts[$l]['title']; ?></span>
						<span class="callout-btn"><a href="<?php echo $callouts[$l]['button_link']; ?>" class="callout"><?php echo $callouts[$l]['button_text']; ?></a></span>
					</div>
				</div>

				<?php
				}
				?>

				

				<div class="col-sm-3 callout-wrapper callout-wrapper-content">
					<div class="callout-content">

					
						<span class="callout-content-tagline"> <?php echo htmlentities($taglines[0]['line_1']); ?> </span>
						<span class="callout-content-tagline-empathy"><?php echo htmlentities($taglines[0]['line_2']); ?></span>
						<span class="callout-content-tagline-trust"><?php echo htmlentities($taglines[0]['line_3']); ?></span>

				
					</div>
				</div>
			</div>
		</div>
	</div>
</div>