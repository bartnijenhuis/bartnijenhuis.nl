<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<div class="row mb-3 pb-3">
			<div class="container">
				<div class="col-xl-8 offset-xl-2" data-aos="fade-up" data-aos-anchor="#example-anchor" data-aos-offset="600" data-aos-duration="600">

					<h1 class="mt-3 mb-0">Portfolio.</h1>

					<?php
					if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<p id="breadcrumbs">','</p>'); 
					} ?>

				</div>
			</div>
		</div> 
		
		<div class="container masonry" data-aos="fade-up" data-aos-anchor="#example-anchor" data-aos-offset="800" data-aos-duration="800">
			<?php
			$the_query = new WP_Query( array(
			    'post_type' => 'portfolio',
			    'posts_per_page' => -1,
			    'operator' => 'XXX'

			) );

			while ( $the_query->have_posts() ) :
		    $the_query->the_post(); ?>

			    <div class="block masonry-item">
					<?php get_template_part( 'content-portfolio' ); ?>
				</div>
			<?php endwhile;
			wp_reset_postdata(); ?>

		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
