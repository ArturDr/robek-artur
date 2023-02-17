<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Robek_Artur
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<div class="container">
			<div class="row teaser-section">
				<div class="col-12 col-md-6 align-self-center text-center">
					<h1>Wybrana strona nie została odnaleziona.</h1>
				</div>
				<div class="col-12 col-md-6 text-center">
					<img class="class-fluid" src="<?php echo get_template_directory_uri(); ?>\img\twarz.webp" height="365" width="240" alt="Robek Artur">
				</div>
			</div>
		</div>
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
