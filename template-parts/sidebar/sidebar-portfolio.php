<aside class="sidebar mb-2" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="600" data-aos-duration="600">
	<div class="container">
		<div class="inner">

			<?php if( get_field('portfolio_favicon') ): ?>
				<img class="portfolio-favicon" src="<?php the_field('portfolio_favicon'); ?>" alt="Favicon <?php the_title(); ?>" />
			<?php endif; ?>

			<h1><?php the_title(); ?></h1>

			<?php if( get_field('company_desc') ): ?>
				<p class="company-desc">
			    	<?php the_field('company_desc'); ?>
			    </p>
			<?php endif; ?>

			<h5 class="sidebar-heading">Werkzaamheden</h5>

			<?php
			$terms = wp_get_post_terms( $post->ID, 'werkzaamheden');
				foreach ( $terms as $term ) { ?>
			 		<p class="sidebar-<?php echo $term->slug.' '; ?>"><?php echo $term->name.' '; ?></p> <?php
				} ?>

			<h5 class="sidebar-heading">Bijzonderheden</h5>

			<?php if( get_field('portfolio_particularities') ): ?>
				<ul class="portfolio-particularities">
		    		<?php the_field('portfolio_particularities'); ?>
		    	</ul>
			<?php endif; ?>

			<h5 class="sidebar-heading">Bedrijfsinformatie</h5>

			<?php if( get_field('company_address') ): ?>
				<p class="company-address">
		    		<?php the_field('company_address'); ?>
		    	</p>
			<?php endif; ?>
			<?php if( get_field('company_postal_code') ): ?>
				<p class="company-address">
		    		<?php the_field('company_postal_code'); ?>
		    	</p>
			<?php endif; ?>

			<?php if( get_field('company_place') ): ?>
				<p class="company-address">
		    		<?php the_field('company_place'); ?>
		    	</p>
			<?php endif; ?>

			<?php if( get_field('portfolio_website') ): ?>

		    	<a class="portfolio-website" href="<?php the_field('portfolio_website'); ?>" title="Website <?php the_title(); ?>" target="_blank" rel="nofollow">Bekijk website</a>

			<?php endif; ?>
				
		</div>

		<?php if( get_field('portfolio_google_maps') ): ?>
			<div class="post-sidebar-map">
	    		<?php the_field('portfolio_google_maps'); ?>
	    	</div>
		<?php endif; ?>
		
	</div>
</aside>