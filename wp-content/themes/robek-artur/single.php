<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

			get_template_part( 'template-parts/content', get_post_type() ); ?>
			<div class="row artur-post-nav-row">
				<div class="col">
			<?php

			the_post_navigation(
				array(
					'prev_text' => '<span class="btn artur-button">%title</span>',
					'next_text' => '<span class="btn artur-button">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
			//	comments_template();
			//endif;
			?>
				</div>
			</div>
			<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div>

<?php
get_footer();
