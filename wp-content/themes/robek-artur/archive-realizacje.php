<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Robek_Artur
 */

get_header(); ?>



<?php if (have_posts()) : ?>

    <div class="container">
    <div class="row">
        <div class="col">
            <h1>Realizacje</h1>
        </div>
    </div>
        <div class="row">

        <?php
        $post_count = 0;
        /* Start the Loop */

        while (have_posts()) :
            if ($post_count % 3 == 0) : ?>
                </div>
                <div class="row">
            <?php endif; ?>
                <div class="col-md-4 col-12">
                    <?php
                    the_post();

                    /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
                    get_template_part('template-parts/content', get_post_type()); ?>
                </div>
            <?php
            $post_count++;
        endwhile;
            ?>
            </div>
            <?php if(get_previous_posts_link() || get_next_posts_link()) :?>
            <div class="row justify-content-between">
				<div class="col-md-3 col-5">
                <?php if(get_previous_posts_link()) : ?>
					<a class="btn ar-button" href="<?php echo get_previous_posts_page_link(); ?>">Nowsze realizacje</a>
                <?php endif;?>
				</div>
				<div class="col-md-3 col-5">
                <?php if(get_next_posts_link()) : ?>
					<a class="btn ar-button" href="<?php echo get_next_posts_page_link(); ?>">Starsze realizacje</a>
                <?php endif;?>
				</div>
			</div>
            <?php
            endif;

        else :

            get_template_part('template-parts/content', 'none');

        endif;
            ?>
    </div>

    <?php
    get_footer();
