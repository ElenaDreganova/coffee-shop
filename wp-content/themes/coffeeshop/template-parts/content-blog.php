<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CoffeeShop
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php coffeeshop_post_thumbnail(); ?>



		<?php

		// the_content();

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$params = array(

	'posts_per_page' => 3, // количество постов на странице
	'cat' => 3, //ID рубрики
	'post_type'       => 'post', // тип постов
	'paged'           => $current_page // текущая страница
);
query_posts($params);
 
// $wp_query->is_archive = true;
// $wp_query->is_home = false;
 
while(have_posts()): the_post();
	/*
	в тело цикла вставьте HTML одного анонса записи, например:
	*/

	?>
		
	<?php
endwhile;
?>

<?php


the_posts_pagination();

	?>	
	</div><!-- .entry-content -->


	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'coffeeshop' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
