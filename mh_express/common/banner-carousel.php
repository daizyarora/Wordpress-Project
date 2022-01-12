<?php 

if(have_rows('header' , 'option')){
   while (have_rows('header' , 'option')) {
       the_row();
       if(get_row_layout() == 'banner_content'){
        $slides = get_sub_field('slides');

        }
   }
} 

 ?>

<!-- carousel content  -->
<div class="banner-content-wrapper">
	<div class="banner-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="carousel-wrapper">
						
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<!-- ITEM -->

								<?php


								for ($i=0; $i < sizeof($slides) ; $i++) { 

									if($i == 0){ $class =  "active";} else {$class="";};

									?>


									<div class="item <?php echo $class; ?>">
									<div class="carousel-slide-1">
										<div class="carousel-content-wrapper hidden-xs">
											<div class="banner-copy">
												<div class="banner-copy-inner-container"> 
												<span class="banner-copy-text"><?php echo $slides[$i]['title'] ?></span>
												<span class="banner-sub-copy-text"><?php echo $slides[$i]['sub_copy'] ?></span>
												<span class="banner-copy-button"><a href="<?php echo $slides[$i]['button_link'] ?>"><?php echo $slides[$i]['button_text'] ?></a>
												</span>
											</div>
											</div>
										</div>
									</div>
								</div>


									<?php
									
								}

								 ?>
								
								
								
								
								<!-- ITEM -->
								<!-- <div class="item">
									<div class="carousel-slide-2">
										<div class="carousel-content-wrapper hidden-xs">
											<div class="banner-copy">
												<div class="banner-copy-inner-container"> 
												<span class="banner-copy-text">Your FREE New Patient Consultation</span>
												<span class="banner-sub-copy-text">Discuss Your Goals And Understand Your Options</span>
												<span class="banner-copy-button"><a href="/why-choose-us/#free-new-patient-consultation">Learn More</a></span>
											</div>
											</div>
										</div>
									</div>
								</div> -->

								<!-- ITEM -->

								<!-- <div class="item">
									<div class="carousel-slide-3">
										<div class="carousel-content-wrapper hidden-xs">
											<div class="banner-copy">
												<div class="banner-copy-inner-container"> 
												<span class="banner-copy-text">Did You Know Hearing Loss Could Lead To Dementia?</span>
												<span class="banner-sub-copy-text">NeuroTechnology<sup>&trade;</sup> Can Help You</span>
												<span class="banner-copy-button"><a href="/treatment-options/dementia-risk/">Discover How</a></span>
											</div>
											</div>
										</div>
									</div>
								</div>
 -->
								<!-- ITEM -->
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>