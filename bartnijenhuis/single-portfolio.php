<?php get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php get_template_part( 'template-parts/header/content-header' ); ?>

			<div class="row">
				<div class="container">
					<div class="col-xl-12">

						<div class="row mb-3 pb-3">
							<div class="container">
								<div class="col-xl-8 offset-xl-2" data-aos="fade-up" data-aos-anchor="#example-anchor" data-aos-offset="600" data-aos-duration="600">

									<h1 class="mb-0"> <?php the_title(); ?> </h1>

									<?php
									if ( function_exists('yoast_breadcrumb') ) {
											yoast_breadcrumb('<p id="breadcrumbs">','</p>'); 
									} ?>

								</div>
							</div>
						</div> 

						<div class="entry">

							<div class="col-xl-8" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-offset="400" data-aos-duration="400">
								<div class="entry-content-post block">
									<div class="container">
										<div class="inner">

										<?php while ( have_posts() ) :
										the_post(); ?>

											<h1> <?php the_title(); ?> </h1>
											<p> <?php the_content(); ?> </p> 

										<?php
										endwhile; // End of the loop.
										?>

										</div>
									</div>
							    </div>
							</div>

							<div class="col-xl-4">
								<?php get_template_part( 'template-parts/sidebar/sidebar-portfolio'); ?>
							</div>

						</div>
					</div>
				</div>
			</div><!-- .row -->

		</main><!-- #main -->
	</section><!-- #primary -->
<?php
get_footer();