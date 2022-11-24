<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Robek_Artur
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open();
	get_template_part('template-parts/hero'); ?>

	<nav class="navbar sticky-top navbar-expand-md artur-nav">
		<div class="container-fluid">
			<a class="navbar-brand a-logo" href="<?php echo site_url('strona-glowna'); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-menu.png" alt="Robek Artur">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a <?php if(is_home() || get_post_type() == 'post') {echo 'class="nav-link current-menu-item"';} else {echo 'class="nav-link"';}?> href="<?php echo site_url('/blog'); ?>">Blog</a>
					</li>
					<li class="nav-item">
						<a <?php if(is_page('o-mnie')) {echo 'class="nav-link current-menu-item"';} else {echo 'class="nav-link"';}?> href="<?php echo site_url('/o-mnie'); ?>">O mnie</a>
					</li>
					<li class="nav-item">
						<a <?php if(is_page('oferta')) {echo 'class="nav-link current-menu-item"';} else {echo 'class="nav-link"';}?> href="<?php echo site_url('/oferta'); ?>">Oferta</a>
					</li>
					<li class="nav-item">
						<a <?php if(is_post_type_archive('realizacje') || get_post_type() == 'realizacje') {echo 'class="nav-link current-menu-item"';} else {echo 'class="nav-link"';}?> href="<?php echo get_post_type_archive_link('realizacje'); ?>">Realizacje</a>
					</li>
					<li class="nav-item">
						<a <?php if(is_page('kontakt')) {echo 'class="nav-link current-menu-item"';} else {echo 'class="nav-link"';}?> href="<?php echo site_url('/kontakt'); ?>">Kontakt</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	</header><!-- #masthead -->