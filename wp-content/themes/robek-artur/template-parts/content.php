<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Robek_Artur
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		if ( is_singular() ) :
			the_title( '<div class="row artur-title-row"><div class="col"><h1 class="blog-title">', '</h1></div></div>' );?>
			<div class="row artur-time-row">
				<div class="col">
					<p class="blog-time">Opublikowano: <?php echo get_the_date('d-m-Y'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<?php the_content(); ?>
				</div>
			</div>
			<?php
		else :?>
			<div class="row artur-title-row">
				<div class="col">
					<h2 class="blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>
			</div>
			<div class="row artur-time-row">
				<div class="col">
					<p>Opublikowano: <?php echo get_the_date('d-m-Y'); ?></p>
				</div>
			</div>
			<div class="row artur-excerpt-row">
				<div class="col">
					<?php the_excerpt()?>
				</div>
			</div>
			<div class="row artur-button-row">
				<div class="col">
					<a class="btn artur-button" href="<?php the_permalink()?>">Więcej</a>
				</div>
			</div>
			<?php
        endif;
		?>
</article><!-- #post-<?php the_ID(); ?> -->
