<?php get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php get_template_part( 'template-parts/header/content-header' ); ?>

			<?php get_template_part( 'template-parts/content/content-front-page' ); ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php get_template_part( 'template-parts/static-blocks/optimalisation' ); ?>

<?php get_footer();