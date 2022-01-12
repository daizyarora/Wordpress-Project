<div class="aff-logos-wrapper hidden-xs">
 <div class="aff-logos">
<div class="container">
<div class="row">
	<div class="col-sm-12">
		<div class="aff-logos-images">
			<ul class=""><?php
        for ($l=0; $l < sizeof($logos) ; $l++) { 
           ?>

				<li><img class="padding-1" src="<?php echo htmlentities($logos[$l]['image']);?>" alt=""></li>

<?php
         } 
         ?>
			</ul>
		</div>
</div>   
</div>
</div>
</div>
</div>
