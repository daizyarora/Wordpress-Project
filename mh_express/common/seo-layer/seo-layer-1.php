
    <main id="main" class="content1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-10 col-md-offset-1 text-center">
            	<?php

		// This is Default intro copy from page title and content

		/*
		// Start the loop.
		while ( have_posts() ): the_post();
		echo "<h1>";
		echo the_title();
		echo "</h1>";
		// Include the page content template.
		the_content();
		//get_template_part('content', 'home');
		// End the loop.
		endwhile;

		*/

		
				?>
		<h1>
			<span class="h1-title"> <?php echo $h1_title; ?> </span>
		</h1>
		<?php echo $copy; ?>
          </div>
        </div>
      </div>
    </main>