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
<?php

    $i = 1;
    while (get_field('tytul_'.$i) && get_field('opis_'.$i) && get_field('cena_'.$i)) :
		$title = esc_html(get_field('tytul_'.$i));
		$description = esc_html(get_field('opis_'.$i));
		$price = esc_html(get_field('cena_'.$i));
		?>
        <div class="row">
            <div class="col">
                <h2><?php echo $title; ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p><?php echo $description; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p><?php echo $price; ?></p>
            </div>
        </div>
        <?php
		$i++;
	endwhile;

?>
</article><!-- #post-<?php the_ID(); ?> -->