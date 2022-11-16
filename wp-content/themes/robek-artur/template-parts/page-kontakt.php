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

    $name = esc_html(get_field('name'));
    $telefon = esc_html(get_field('telefon'));
    $mail = esc_html(get_field('mail'));
    $facebook = esc_url(get_field('facebook'));
    $instagram = esc_url(get_field('instagram'));
    $google = esc_url(get_field('google'));
    ?>
    <div class="row">
        <div class="col-12 col-md-6">
            <?php echo do_shortcode('[contact-form-7 id="21" title="Formularz kontaktowy"]'); ?>
        </div>

        <div class="col-12 col-md-6">
            <div class="row">
                <div class="col">
                    <h2><?php echo $name; ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p><?php echo $mail; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p><?php echo $telefon; ?></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-1">
                    <p><?php echo $facebook; ?></p>
                </div>
                <div class="col-1">
                    <p><?php echo $instagram; ?></p>
                </div>
                <div class="col-1">
                    <p><?php echo $google; ?></p>
                </div>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->