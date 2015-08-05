<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package exauto
 */

?>

 <!-- 
this was the last code we tried putting in this code according to codex but it the options page still did not work ~~>
	<?php 
global $options;
foreach ($options as $value) {
    if (get_option($value['id']) === FALSE) {
        $$value['id'] = $value['std'];
    }
    else {
        $$value['id'] = get_option( $value['id'] );
    }
}?>
if (trim($mnt_front_page_first_section) != "") 
     	$first_section_category=$mnt_front_page_first_section;
//$mnt_front_page_first_section = the element id from the $options array

array("name" => "category posts to show on the front page",
				"desc" => "Select the category you want to include. All pages are excluded by default",
				"id" => $shortname."_front_page_first_section",//<- id
				"type" => "select",
				"options" => mnt_get_category_array($shortname."_nav_pages"),
				"parent" => "nav-setup",
				"std" => mnt_get_category_array($shortname."_nav_pages")
		),
 
 -->

	
	
	
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'exauto' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'exauto' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'exauto' ), 'exauto', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
