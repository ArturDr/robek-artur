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
        $technologyList = esc_html(get_field('technology'));
        $image1 = esc_url(get_field('obraz_1'));
        $image2 = esc_url(get_field('obraz_2'));
        $image3 = esc_url(get_field('obraz_3'));
        $url = esc_url(get_field('url_projektu'));
		if ( is_singular() ) :
			the_title( '<div class="row"><div class="col"><h1 class="realizacje-title">', '</h1></div></div>' );?>
			<div class="row">
				<div class="col">
					<p><?php the_content(); ?></p>
				</div>
			</div>
			<?php
		else :?>
			<div class="row">
				<div class="col">
					<h2 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p><?php the_excerpt()?></p>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<a class="btn artur-button" href="<?php the_permalink()?>">Więcej</a>
				</div>
			</div>
			<?php
        endif;
		?>
</article><!-- #post-<?php the_ID(); ?> -->
