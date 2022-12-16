<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Robek_Artur
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row artur-blog-title-row">
		<div class="col text-center">
			<?php the_title( '<h1>', '</h1>' ); ?>
		</div>
	</div>



	<div class="row artur-content-row">
		<div class="col">
			<?php
			the_content();
			?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
