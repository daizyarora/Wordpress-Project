<div class="what-to-expect-wrapper">
	<div class="what-to-expect">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<div class="what-to-expect-content">
						<span class="what-to-expect-title"><?php echo $title; ?></span>
						<span class="what-to-expect-sub-title"><?php echo $subTitle; ?></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7 text-center">
					<img src="<?php echo $image; ?>" alt="">
				</div> 
				<div class="col-sm-5">
					<div class="what-to-expect-content-list">
       <?php
        for ($l=0; $l < sizeof($copy) ; $l++) { 
           ?>
						<ul class="list-unstyled">
							<li> <?php echo $copy[$l]['icon'];?> <span class="list-item"><?php echo htmlentities($copy[$l]['text']);?></span> </li>
						</ul>		
           <?php
         } 
         ?>


					</div>
					<div class="usp-btn hidden-xs">
						<span class="what-to-expect-btn">
							<a href="<?php echo $link; ?>"><?php echo $button; ?></a>
						</span>
					</div>
				</div>	
				
			</div>
		</div>
	</div>
</div>