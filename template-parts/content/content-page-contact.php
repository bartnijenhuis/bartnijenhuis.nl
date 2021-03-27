<div class="row mb-3 pb-3">
	<div class="container">
		<div class="col-xl-8 offset-xl-2" data-aos="fade-up" data-aos-anchor="#example-anchor" data-aos-offset="600" data-aos-duration="600">

			<h1 class="mt-3 mb-0">Contact.</h1>

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>'); 
			} ?>

		</div>
	</div>
</div> 

<div class="col-xl-8">
	<div data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-offset="400" data-aos-duration="400" class="entry-content-post block">

		<div class="inner">

			<p class="mx-2 mt-2">Heb je een vraag met betrekking tot het maken van een <a class="link-lg-primairy" title="WordPress Website" href="/wordpress">Website</a>, <a class="link-lg-primairy" title="WooCommerce Webwinkel" href="/woocommerce">Webwinkel</a> of het ontwerpen van een logo of Huisstijl? Stel je vraag via het contactformulier en ik zal z.s.m. een reactie geven.</p> 

			<?php echo do_shortcode( '[contact-form-7 id="129" title="Contact"]' ); ?>

		</div>

    </div>
</div>

<div class="col-xl-4">
	<?php get_template_part( 'template-parts/sidebar/sidebar-contact' ); ?>
</div>