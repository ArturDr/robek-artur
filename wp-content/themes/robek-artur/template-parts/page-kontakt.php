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
    $whatsapp = esc_url(get_field('whatsapp'));
    ?>
    <div class="row artur-blog-title-row">
        <div class="col text-center">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </div>
    <div class="row artur-contact-description">
        <div class="col">
            <?php
            the_content();
            ?>
        </div>
    </div>
    <div class="row artur-contact-row">
        <div class="col-12 col-md-6">
            <?php echo do_shortcode('[contact-form-7 id="21" title="Formularz kontaktowy"]'); ?>
        </div>

        <div class="col-12 col-md-6 artur-contact-col">
            <div class="row artur-contact-name-row">
                <div class="col text-center">
                    <h2><?php echo $name; ?></h2>
                </div>
            </div>
            <div class="row artur-stat-mail-row">
                <div class="col text-center">
                    <p><a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></p>
                </div>
            </div>
            <div class="row artur-phone-row">
                <div class="col text-center">
                    <p><a href="tel:+48<?php echo $telefon; ?>"><?php echo $telefon; ?></a></p>
                </div>
            </div>
            <div class="row justify-content-center artur-social-row">
                <div class="col-3 col-md-1 text-center">
                    <a href="<?php echo $facebook; ?>"><i class="fa-brands fa-square-facebook"></i></a>
                </div>
                <div class="col-3 col-md-1 text-center">
                    <a href="<?php echo $instagram; ?>"><i class="fa-brands fa-square-instagram"></i></a>
                </div>
                <div class="col-3 d-md-none text-center">
                    <a href="<?php echo $whatsapp; ?>"><i class="fa-brands fa-square-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->