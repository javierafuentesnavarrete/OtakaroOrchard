<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Otakaro_orchard
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-info">
		<div class="social-media">
			<div class="social-media-footer">
				<?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
			</div>
		</div>
		<div class="contact-us-footer">
			<h5>Contact Us</h5>
			<p class="p-1">0270 038 6638</p>
			<p class="p-2">otakaro@gmail.com</p>
		</div>
		<div class="address">
			<h5>Address</h5>
			<p class="p-1">227 Cambridge Terrace
				<p class="p-2">Christchurch Central, 8013</p>

		</div>
		<div class="news-letter">
			<?php echo do_shortcode('[newsletter]'); ?>
		</div>
	</div>

</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>

</html>