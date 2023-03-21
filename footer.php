<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package radio_salam
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php dynamic_sidebar( 'footer-area-left' ); ?>
                </div>
                <div class="col-md-6">
                    <?php dynamic_sidebar( 'footer-area-right' ); ?>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
