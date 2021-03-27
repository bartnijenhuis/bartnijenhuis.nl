<?php get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php get_template_part( 'template-parts/header/content-header' ); ?>

			<div class="row">
				<div class="container">
					<div class="col-xl-12">
					
						<div class="entry">
							<?php get_template_part( 'template-parts/content/content-portfolio-twinniez'); ?>
						</div>
					
					</div>
				</div>
			</div><!-- .row -->

		</main><!-- #main -->
	</section><!-- #primary -->
	
<?php get_footer();