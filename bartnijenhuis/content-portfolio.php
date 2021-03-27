
<article id="post-<?php the_ID(); ?>" class="item">

    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="block" data-aos="fade-up">
    	<div class="inner">

        	<div class="company-logo">
				<img class="portfolio-logo" src="<?php the_field('portfolio_logo'); ?>" alt="Logo <?php the_title(); ?>" />
        	</div>

			<h2 class="portfolio-title"><?php the_title(); ?></h2>

			<?php
			$terms = wp_get_post_terms( $post->ID, 'werkzaamheden');
				foreach ( $terms as $term ) { ?>

			 		<span class="activities">
			 			<?php echo $term->slug.' '; ?>
			 		</span> <?php
			 		
				} ?>
				
    	</div>
    </a>

</article><!-- #post-## -->

