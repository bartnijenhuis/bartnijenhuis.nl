			</div><!-- #content -->

			<?php get_template_part( 'template-parts/static-blocks/contact-form' ); ?>

			<footer id="colophon" class="site-footer">
			    <div class="copyright center" data-aos="fade-up">

		            <p>
						<svg xmlns="http://www.w3.org/2000/svg" width="254" height="268" viewBox="0 0 253.7 267.6"><style>.a{fill:#87C5ED;}</style><path d="M93.6 240.5v24.7h-0.6v0h41.2C118 261.3 104.1 253.2 93.6 240.5z" class="a"></path><path d="M253.7 169.7c0 59.3-41.1 97.9-96.8 97.9-26.1 0-48.2-8.9-63.2-27.2v24.7h-42.5V0h44.7v97.5c15.4-17.2 36.8-25.4 61.1-25.4C212.6 72.2 253.7 110.4 253.7 169.7zM208.3 169.7c0-36.4-24.3-59.7-56.5-59.7-32.2 0-56.8 23.2-56.8 59.7s24.7 59.7 56.8 59.7C184 229.4 208.3 206.2 208.3 169.7z" fill="#1A4869"></path><path d="M131.4 130.3c-3.8-4.1-8.3-7.4-13.4-9.7-0.1 0.1-0.2 0.1-0.2 0.2-6.8-3.2-14.7-4.8-23.7-4.8-5.1 0-9.9 0.7-14.1 2-4.3 1.3-8.2 3.1-11.7 5.3-3.6 2.2-6.7 4.7-9.6 7.6-2.7 2.8-5.2 5.6-7.5 8.6v-20.2H0v145.9h51.5v0h-0.4v-83.4c0.6-5.9 2.5-10.6 5.7-14 4-4.1 9.1-5.8 15.3-6.2 16.5-1.1 21.6 11.6 23.8 20 4.3 27 23.6 44.5 48.5 47.4v-59.3C144.5 152.9 140.2 139.8 131.4 130.3z" class="a"></path></svg>

		                ©&nbsp;<?php echo date('Y'); ?>&nbsp;bartnijenhuis.nl - WordPress, WooCommerce, Branding en SEO &nbsp;&nbsp;&nbsp;<a href="#masthead" title="Scroll terug naar boven">Naar boven</a>
		            </p>

			    </div>

				<script>

					AOS.init({
					 duration: 350
					});
					AOS.init({disable: 'mobile'});

					jQuery(document).ready(function() {
					    jQuery('.toggle-nav').click(function(e) {
					        jQuery('.menu-mobile-container ul').slideToggle(500);
					 
					        e.preventDefault();
					    });
					    
					});

				</script>

			</footer><!-- #colophon -->

		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
