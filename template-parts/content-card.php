<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sprts
 */

$backgroundImg = !get_post_thumbnail_id( $post ) ? null : wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
<div class="card__header" 
	<?php if( $backgroundImg ) : ?>
		style="background: center / cover no-repeat url('<?php echo $backgroundImg[0]; ?>');"
	<?php endif; ?>
	>

<?php # sprts_post_thumbnail(); ?>
</div>
<div class="card__content">
	<header class="entry-header ">
		<?php

			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );

 ?>
	</header><!-- .entry-header -->



	<div class="entry-content">
		<?php
			$excerpt = get_the_excerpt();
			
			$excerpt = substr($excerpt, 0, 120);
			$result = substr($excerpt, 0, strrpos($excerpt, ' '));
			echo $result . '...';

		?>
	</div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
