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
		if ( is_singular() && !is_front_page()) :
			the_title( '<div class="row artur-title-row"><div class="col"><h1>', '</h1></div></div>' );?>
			<div class="row tech-row">
				<div class="col">
					<p><?php echo esc_html__($technologyList); ?></p>
				</div>
			</div>
			<div class="row">
			<?php if($image1 && !$image2 && !$image3) :  ?>
					<div class="col">
						<img class="img-fluid" src="<?php echo $image1 ?>">
					</div>
			<?php elseif($image1 && $image2 && !$image3) :  ?>
					<div class="col-md-6 col-12">
						<img class="img-fluid" src="<?php echo $image1 ?>">
					</div>
					<div class="col-md-6 col-12">
						<img class="img-fluid" src="<?php echo $image2 ?>">
					</div>
			<?php elseif($image1 && $image2 && $image3) :  ?>
				<div class="col-md-4 col-12">
						<img class="img-fluid" src="<?php echo $image1 ?>">
					</div>
					<div class="col-md-4 col-12">
						<img class="img-fluid" src="<?php echo $image2 ?>">
					</div>
					<div class="col-md-4 col-12">
						<img class="img-fluid" src="<?php echo $image3 ?>">
					</div>
			<?php endif;?>
			</div>
			<div class="row">
				<div class="col">
					<p><?php the_content(); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p><a class="btn artur-button" href="<?php echo $url ?>">Link do projektu</a></p>
				</div>
			</div>
			<?php
		else : ?>
		<div class="project-card">
			<div class="row card-title">
				<div class="col">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>
			</div>
			<div class="row card-tech">
				<div class="col">
					<p><?php echo esc_html__($technologyList) ?></p>
				</div>
			</div>
			<div class="row card-image">
				<div class="col">
					<img class="img-fluid" src="<?php echo esc_url($image1) ?>">
				</div>
			</div>
			<div class="row card-excerpt">
				<div class="col">
					<p><?php the_excerpt()?></p>
				</div>
			</div>
			<div class="row button-row">
				<div class="col text-center">
					<a class="btn artur-button" href="<?php the_permalink()?>">Więcej</a>
				</div>
			</div>
		</div>
			<?php
        endif;
		?>
</article><!-- #post-<?php the_ID(); ?> -->