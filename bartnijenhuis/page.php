<?php get_header(); ?>


	<div class="row">
		<div class="col-xl-8 center">
			<div class="header-tumbnail"> 
				<?php if ( has_post_thumbnail() ) : ?>
				        <?php the_post_thumbnail(); ?>
				    </a>
				<?php endif; ?>
				
				<?php if ( function_exists('yoast_breadcrumb') ) {
  				yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				} ?>

			</div>
		</div>
	</div>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer();
