<?php 
  /**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Retirement_Insight
 */

?>

<section class="newsletter">
	<div class="newsletter_content">
		<h3><?php the_field('newsletter_heading', 'option'); ?></h3>
		<p><?php the_field('newsletter_text', 'option'); ?></p>
	</div>

	<div class="newsletter_signUpBox">
		<?php the_field('newsletter_shortcode_box', 'option'); ?>
	</div>
</section>




	<footer id="colophon" class="site-footer">




	<div class="footer__logo"></div>

	<div class="footer__contact"></div>

	<div class="footer__quickLinks"></div>

	<div class="footer__aboutUs"></div>




		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'retirementinsight' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'retirementinsight' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'retirementinsight' ), 'retirementinsight', '<a href="https://benjaminthedev.github.io/">BenjaminTheDev</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
