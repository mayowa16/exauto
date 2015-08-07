<?php
/**
 * Template Name: testimonials Page
 *
 * @package exauto
 */



get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- on this new testimonial template page the code below also calls out all the testinonials to be displayed on the page -->
<div id="display">
<?php wpb_display_testimonials(); ?>
</div>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php  get_sidebar(); ?>



<?php get_footer(); ?>


