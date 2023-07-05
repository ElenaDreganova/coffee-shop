<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CoffeeShop
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			if(get_the_ID() == 46) {
				get_template_part( 'template-parts/content', 'blog' );
				} else
			if(get_the_ID() == 82) {
				get_template_part( 'template-parts/content', 'home' );
				} else
			if(get_the_ID() == 21) {
				get_template_part( 'template-parts/content', 'about' );
				} else
			if(get_the_ID() == 32) {
				get_template_part( 'template-parts/content', 'contact' );
				} else
			if(get_the_ID() == 73) {
				get_template_part( 'template-parts/content', 'acount' );
				}	
				else {
			get_template_part( 'template-parts/content', 'page' );
			}
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
