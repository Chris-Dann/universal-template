<?php

get_header();
?>

	<div id="primary" class="container">
		<main id="main" class="site-main">
			<p class="template_id">Template: page.php</p>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
