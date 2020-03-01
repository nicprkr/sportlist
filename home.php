<?php
/**
 * Front page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sprts
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="ad">Ad</div>
			<section class="content-feed">

			<h2 class="section-title">All Sports</h2>
		<?php global $query_string;
        query_posts ('posts_per_page=4');
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-card', get_post_type() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		<p class="full text-right"><a href="/sport/">See all sports news >> </a></p>
		</section>
		<div class="ad">Ad</div>
		<section class="content-feed">
		<h2 class="section-title">Basketball</h2>

		<?php 
			// the query
			$the_query = new WP_Query( array( 'category_name' => 'basketball' ) ); ?>
			
			<?php if ( $the_query->have_posts() ) : ?>

			
				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : 
					$the_query->the_post();

					get_template_part( 'template-parts/content-card', get_post_type() );
				
				endwhile; ?>
				<!-- end of the loop -->
		
			
				<?php wp_reset_postdata(); ?>

				<p class="full text-right"><a class="post-link" href="/sport/basketball">See all basketball news >> </a></p>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			</section>

			<section class="content-feed">
			<h2 class="section-title">Soccer</h2>

<?php 
	// the query
	$the_query = new WP_Query( array( 'category_name' => 'soccer' ) ); ?>
	
	<?php if ( $the_query->have_posts() ) : ?>

	
		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : 
			$the_query->the_post();

			get_template_part( 'template-parts/content-card', get_post_type() );
		
		endwhile; ?>
		<!-- end of the loop -->
	
	
		<?php wp_reset_postdata(); ?>
		<p class="full text-right"><a class="post-link" href="/sport/soccer">See all soccer news >> </a></p>
	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	</section>
	<section class="content-feed">
		<h2 class="section-title">Hockey</h2>

		<?php 
			// the query
			$the_query = new WP_Query( array( 'category_name' => 'hockey' ) ); ?>
			
			<?php if ( $the_query->have_posts() ) : ?>

			
				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : 
					$the_query->the_post();

					get_template_part( 'template-parts/content-card', get_post_type() );
				
				endwhile; ?>
				<!-- end of the loop -->
		
			
				<?php wp_reset_postdata(); ?>

				<p class="full text-right"><a class="post-link" href="/sport/hockey">See all hockey news >> </a></p>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
