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
        <h1><?php echo get_the_title(); ?></h1>
    </div>
</div>
<div class="artur-offer-section">
    <div class="row artur-offer-info">
        <div class="col">
            <?php
            the_content();
            ?>
        </div>
    </div>
<?php

    $i = 1;
    while (get_field('tytul_'.$i) && get_field('opis_'.$i) && get_field('cena_'.$i)) :
		$title = esc_html(get_field('tytul_'.$i));
		$description = esc_html(get_field('opis_'.$i));
		$price = esc_html(get_field('cena_'.$i));
		?>
        <div class="row artur-offer-title-row">
            <div class="col">
                <h2><?php echo $title; ?></h2>
            </div>
        </div>
        <div class="row artur-offer-description-row">
            <div class="col">
                <p><?php echo $description; ?></p>
            </div>
        </div>
        <div class="row artur-price-offer-row">
            <div class="col">
                <p><?php echo $price; ?></p>
            </div>
        </div>
        <?php
		$i++;
	endwhile;

?>
</div>
</article><!-- #post-<?php the_ID(); ?> -->