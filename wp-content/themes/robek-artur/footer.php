<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Robek_Artur
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container-fluid artur-footer">
			<div class="row text-center">
				<div class="col">
					<p>Robek Artur &copy <?php echo date("Y");?></p>
				</div>
			</div>
			<div class="row text-center artur-privacy-policy">
				<div class="col">
					<p><a href="<?php echo site_url('polityka-prywatnosci'); ?>">Polityka prywatności</a></p>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
