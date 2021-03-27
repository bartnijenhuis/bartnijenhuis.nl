<aside data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="600" data-aos-duration="600" class="sidebar">
	<div class="inner">
		<h2>Contactinformatie</h2>
		<?php if( get_field('contact_name') ): ?>
			<p class="contact-name"> <?php the_field('contact_name'); ?> </p>
		<?php endif; ?>

		<?php if( get_field('contact_email') ): ?>
			<p class="contact-email">
	    		<a href="mailto: <?php the_field('contact_email'); ?>" title="Mail mij"><?php the_field('contact_email'); ?></a>
	    	</p>
		<?php endif; ?>

		<?php if( get_field('contact_phone') ): ?>
	    	<p class="contact-phone">
	    		<a href="<?php the_field('contact_phone'); ?>" title="Bel mij"><?php the_field('contact_phone'); ?></a>
	    	</p>
		<?php endif; ?>

		<?php if( get_field('contact_kvk') ): ?>
			<p class="contact-kvk"> 
    			<?php the_field('contact_kvk'); ?>
    		</p>
		<?php endif; ?>
	</div>
</aside>