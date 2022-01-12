<div class="callouts-6-wrapper hidden-xs">
	<div class="callouts-6" style="background:url('<?php echo $bgImage; ?>');background-color: #fff;background-size: cover;background-position: 100%;">
		<div class="callout-6-title">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="callouts-1-title-container">
							<div class="callouts-1-title-inner">

							<span class="callout-title-1"> <?php echo htmlentities($taglines[0]['line_1']); ?> </span>
							<span class="callout-title-1"><?php echo htmlentities($taglines[0]['line_2']); ?> </span>
							<span class="callout-title-2"><?php echo htmlentities($taglines[0]['line_3']); ?> </span>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="callouts-6-items">
			<div class="container-fluid">
				<div class="row">
					<?php 

					for ($i=0; $i < sizeof($buttons); $i++) {  ?>

						<div class="callouts-6-item-inner">
						<span class="callouts-6-item-button"> <a href="<?php echo htmlentities($buttons[$i]['button_link']) ?>"><?php echo htmlentities($buttons[$i]['button_text']); ?></a> </span>
					</div>



						<?php
						
					}

					 ?>


					

					
						
					
						
				</div>
			</div>
		</div>
	</div>
</div>