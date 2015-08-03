<?php
/**
 * Template Name: Front Map Page
 *
 * @package exauto
 */


get_header(); ?>

<section id="featured-slider">
	<div id="slides">
		<div class="slides_container">
			
			<?php 
				$loop = new WP_Query(array('post_type' => 'feature', 'posts_per_page' => -1, 'orderby'=> 'ASC')); 
			?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="slide">
					<?php $url = get_post_meta($post->ID, "url", true);
					if($url!='') { 
						echo '<a href="'.$url.'">';
						echo the_post_thumbnail('full');
						echo '</a>';
					} else {
						echo the_post_thumbnail('full');
					} ?>
					<div class="caption">
						<h5><?php the_title(); ?></h5>	
						<?php the_content();?>
					</div>
				</div>

			<?php endwhile; ?>
			

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
