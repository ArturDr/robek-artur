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
    <div class="row">
        <div class="col">
            Zajawka ogólna o działalności
        </div>
    </div>

    <!-- offer section -->
    <?php $offer = new WP_Query(array(
        'pagename' => 'oferta',
    ));
    $offer->the_post();  ?>
    <div class='row offer-row'>
        <div class='col text-center offer-back'>
            <h1 class='offer-title'><?php echo esc_html__(the_title()); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <h2><?php echo esc_html(get_field('tytul_1')); ?></h2>
            <p><?php echo esc_html(get_field('opis_1')); ?></p>
        </div>
        <div class="col-12 col-md-6">
            <h2><?php echo esc_html(get_field('tytul_2')); ?></h2>
            <p><?php echo esc_html(get_field('opis_2')); ?></p>
        </div>
    </div>
    <div class='row button-row'>
        <div class='col text-center'>
            <a class='btn armin-button' href="<?php echo the_permalink() ?>">Szczegółowa oferta</a>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
    <!-- end of offer section -->

    <!-- about me section -->
    <?php $aboutMe = new WP_Query(array(
        'pagename' => 'o mnie',
    ));
    $aboutMe->the_post(); ?>
    <div class="row">
        <div class="col">
            <h2><?php echo esc_html(get_the_title()); ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p><?php echo esc_html(wp_trim_words(get_the_content(), 30, '')); ?></p>
        </div>
    </div>
    <div class='row button-row'>
        <div class='col text-center'>
            <a class='btn armin-button' href="<?php echo the_permalink() ?>">Więcej o mnie</a>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
    <!-- end of about me section -->
    <!-- projects section -->
    <div class="row">
        <div class="col">
            <h2>Najnowsze realizacje</h2>
        </div>
    </div>
    <?php
        $projects = new WP_Query(array(
            'post_type' => 'realizacje',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC'
        )); ?>
    <div class="row">
        <?php
            /* Start the Loop */

            while($projects->have_posts()) :
                $projects->the_post(); ?>

                <div class="col-md-4 col-12">
                    <?php

                    /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
                    get_template_part('template-parts/content', get_post_type()); ?>
                </div>
            <?php
            endwhile;?>
        </div>
    </div>
    <div class='row button-row'>
        <div class='col text-center'>
            <a class='btn ar-button' href="<?php echo get_post_type_archive_link('realizacje'); ?>">Wszystkie realizacje</a>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
    <!-- end of projects section -->
</div>


<?php
get_footer();
