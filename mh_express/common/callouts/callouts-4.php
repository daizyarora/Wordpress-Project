<div class="callouts-4-wrapper">
	<div class="callouts-4-intro">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<span class="callouts-4-intro-title"> <?php echo htmlentities($intro[0]['title']); ?> </span>
					<span class="callouts-4-intro-copy"><?php echo htmlentities($intro[0]['sub_title']); ?></span>
				</div>
			</div>
		</div>
	</div>
	<div class="callouts-4">
		<div class="container-fluid">   
			<div class="row">

				<?php
				for ($l=0; $l < sizeof($callouts) ; $l++) { ?>

					<div class="col-sm-6 col-lg-3 text-center callout-item-1 " data-aos="zoom-in">
					<a class="callout-4-link" href="<?php echo htmlentities($callouts[$l]['link']); ?>">
						<div class="callout-inner ">
							<span class="callouts-4-image"  style="background:url('<?php echo htmlentities($callouts[$l]['image']); ?>');margin: 0 auto 15px auto;overflow: hidden;border-radius: 100px;width: 200px;height: 200px;display: block;background-position: bottom; background-size: cover;"><!-- <img src="<?php echo htmlentities($callouts[$l]['image']); ?>" alt=""> --></span>
							<span class="title-callouts-4"><?php echo htmlentities($callouts[$l]['title']); ?></span>
							<span class="copy-callouts-4"><?php echo strip_tags($callouts[$l]['copy']); ?></span>
						</div>
					</a>
				</div>


				<?php 
					
				}
				?>
					
				</div>
		</div>
	</div>
</div>