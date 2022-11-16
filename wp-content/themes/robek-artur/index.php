<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Robek_Artur
 */

get_header();
?>
<div class="container">

	<main id="primary" class="site-main">
	<div class="row">
        <div class="col">
            <h1>Blog</h1>
        </div>
    </div>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
			if(get_previous_posts_link() || get_next_posts_link()) :?>
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

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
</div>
<?php
get_footer();
