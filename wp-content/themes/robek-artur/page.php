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
 * @package Robek_Artur
 */

get_header();
?>
<div class="container">

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			if(get_the_title() == 'Oferta') :
				get_template_part( 'template-parts/page', 'oferta' );

			elseif(get_the_title() == 'Kontakt') :

				get_template_part( 'template-parts/page', 'kontakt' );

			else :

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
				//comments_template();
			//endif;

			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div>

<?php
get_footer();
