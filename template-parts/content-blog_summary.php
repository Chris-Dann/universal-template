<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dano_ut
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<p class="template_id">Template part: content-blog_summary.php</p>
	<div class="dano_blog_post_summary">
		<div class="dano_blog_post_summary__thumbnail">
			<?php 
			if (has_post_thumbnail()) {
				the_post_thumbnail('thumbnail'); 
			}
			?>
		</div>
		<div class="dano_blog_post_summary__details">
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			<div class="entry-meta">
				<?php
				dano_ut_posted_on();
				dano_ut_posted_by();
				?>
			</div>
			<?php the_excerpt(10); ?>
		</div>
	</div>

	<div class="entry-content">
		<!--<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dano_ut' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dano_ut' ),
			'after'  => '</div>',
		) );
		?>-->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //dano_ut_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
