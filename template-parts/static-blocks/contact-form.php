<?php if ( get_field( 'contact_form_enable' ) ): ?>

	<section id="contact" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
		<div class="row text-block py-2">

			<div class="col-lg-6 offset-lg-3">
				<div class="inner">
					<h2 class="mb-4">Vraag meer informatie over <?php the_title(); ?> aan</h2>
					<?php echo do_shortcode( '[contact-form-7 id="129" title="Contact"]' ); ?>
				</div>
			</div>

		</div>
	</section>

<?php endif; ?>