<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sprts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a class="post-link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				sprts_posted_on();
				echo " | ";
				sprts_entry_footer();
				
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php sprts_post_thumbnail(); ?>

	<div class="entry-content mb-2">


		<?php

		if ( is_singular() ) :
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sprts' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
	
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sprts' ),
				'after'  => '</div>',
			) );
		else :
				$excerpt = get_the_excerpt();
				
				$excerpt = substr($excerpt, 0, 260);
				$result = substr($excerpt, 0, strrpos($excerpt, ' '));
				echo $result . '...';
				echo '<br/><p class="full text-right"><a class="post-link" href="'. esc_url( get_permalink() ) .'">Read More >> </a></p>';
		endif;
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
			<hr/>
		<?php # sprts_posted_by(); ?>
	</footer><!-- .entry-footer -->
	<?php 
	# the_post_navigation();

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
