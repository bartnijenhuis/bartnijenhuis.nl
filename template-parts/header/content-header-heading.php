<div class="row">
	<div class="container">
		<div class="col-xl-8 offset-xl-2" data-aos="fade-up" data-aos-anchor="#example-anchor" data-aos-offset="600" data-aos-duration="600">

			<h1 class="mb-0"> <?php the_title() ?>. </h1>

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>'); 
			} ?>

		</div>
	</div>
</div> 