<?php
/**
 * Template Name: Front Map Page
 *
 * @package exauto
 */


get_header(); ?>

<!-- 
All images used in the website and in the slider are all in the public domain
 -->

<div id="slider">
<figure>
<!-- 
<img src="<?php echo get_bloginfo('template_url') ?>/images/cool.jpg" style="width:650px;height:400px;"/>
<img src="<?php echo get_bloginfo('template_url') ?>/images/ferrari.jpg" style="width:650px;height:400px;"/>
 -->
<img src="<?php echo get_bloginfo('template_url') ?>/images/1.jpg" style="width:500px;height:350px;"/>
<img src="<?php echo get_bloginfo('template_url') ?>/images/2.jpg" style="width:500px;height:350px;"/>
<img src="<?php echo get_bloginfo('template_url') ?>/images/3.jpg" style="width:500px;height:350px;"/>
<img src="<?php echo get_bloginfo('template_url') ?>/images/4.jpg" style="width:500px;height:350px;"/>
<img src="<?php echo get_bloginfo('template_url') ?>/images/5.jpg"style="width:500px;height:350px;"/>
<img src="<?php echo get_bloginfo('template_url') ?>/images/6.jpg" style="width:500px;height:350px;"/>
<img src="<?php echo get_bloginfo('template_url') ?>/images/banner.jpg" style="width:500px;height:350px"/>

<img src="<?php echo get_bloginfo('template_url') ?>/images/7.jpg" style="width:500px;height:350px;"/>
<!-- 
<img src="<?php echo get_bloginfo('template_url') ?>/images/8.jpg" style="width:500px;height:350px;"/>
<img src="<?php echo get_bloginfo('template_url') ?>/images/9.jpg" style="width:500px;height:350px;"/>
<img src="<?php echo get_bloginfo('template_url') ?>/images/10.jpg" style="width:500px;height:350px;"/>
 -->
<!-- <img src="<?php echo get_bloginfo('template_url') ?>/images/ex.jpg" style="width:800px;height:400px;"/> -->


</figure>
</div>

<!-- This  (image that has company logo) will be the only  thing to appear when viewed on particular devices. the slider will not appear so as not to be confusing -->
<div class="car">
<img src="<?php echo get_bloginfo('template_url') ?>/images/banner.jpg" style="width:500px;height:350px;"/>
</div>
 
 


<div class="gridcontainer">




<!-- 
<h1 class="entry-title"><?php the_title(); ?></h1>
 -->


<!-- 
<h1 class="post-title"><?php the_title(); ?></h1>
 -->


<?php $categories = get_categories( array ('orderby' => 'count',  ) ); ?>



<?php foreach ($categories as $category) : ?>
 

 <?php $my_query=new WP_Query( 'cat=192' ); ?>
	
 
<?php endforeach; ?>
	
<?php //query_posts( array ( 'category_name' => $category->slug, 'showposts' => '10' ) ); ?>
 
 <div id="page">
	
 
<?php 

	if ( has_post_thumbnail() ) {
	the_post_thumbnail('large');
} 
the_content('display');
	?>

<?php
// this code below shows the posts under the brand new category, we decided to display this because we felt that the our clients customers would be more interested in the new exotic cars compared to the used
$counter = 4; // Start the counter
$grids = 4; // Grids per row
$titlelength = 15; // Length of the post titles shown below the thumbnails
// The Query
$args=array (
	'post_type' => 'post',
	'posts_per_page' => 4,
	'cat'=> 192
	);
$the_query = new WP_Query($args);
// The Loop

while ( $the_query->have_posts() ) :
	$the_query->the_post();
// Show all columns except the right hand side column
if($counter != $grids) :
?>
<div class="move">
<div class="griditemleft">
	<div class="postimage">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
	</div><!-- .postimage -->
	<h2 class="postimage-title">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php if (mb_strlen($post->post_title) > $titlelength)
			{ echo mb_substr(the_title($before = '', $after = '', FALSE), 0, $titlelength) . ' ...'; }
		else { the_title(); } ?>
		</a>
	</h2>
</div><!-- .griditemleft -->
</div>

<?php

// Show the right hand side column
elseif($counter == $grids) :
?>


<div class="clear"></div>
<?php

endif;
$counter++;
endwhile;
wp_reset_postdata();
?>

</div><!-- .gridcontainer -->
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="show">		
<div class="clients">

<a :hover  href="http://phoenix.sheridanc.on.ca/~ccit2721/?page_id=1621">
"what our customers are saying"
</a>
</div>
</div>


<div id="front">

<?php wpb_display_testimonials(); ?>
</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php // get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
// 						comments_template();
// 					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php // get_sidebar(); ?>

<?php get_footer(); ?>

