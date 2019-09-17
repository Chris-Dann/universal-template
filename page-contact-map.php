<?php

get_header();
?>

	<div id="primary" class="container">
		<main id="main" class="site-main">
			<p class="template_id">Template: contact-map.php</p>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
		<div class="dano_responsive_google_map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1228188.4734118155!2d-73.09600534852368!3d81.35522701169307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5c87ebbaf5e77a3b%3A0x2c4412982b67464c!2sSiberia%2C+Russia!5e0!3m2!1sen!2suk!4v1564507523101!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
