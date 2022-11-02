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
            next_posts_link('Starsze realizacje');
            previous_posts_link('Nowsze realizacje');
            ?>
                </div>
            </div>
            <?php

        else :

            get_template_part('template-parts/content', 'none');

        endif;
            ?>
    </div>

    <?php
    get_footer();
