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




	<footer  class="site-footer">




	<div class="footer__logo">
		<img src="<?php the_field('footer_logo', 'option'); ?>" alt="Footer Logo" />
	</div>

	<div class="contact__links">
	<div class="footer__contact">
		<h4>Contact Us</h4>
		<?php the_field('contact_section', 'option'); ?>
	</div>

	<div class="footer__quickLinks">
		  <?php if( have_rows('social_media', 'option') ): ?>
			<ul class="icon__area">
			<?php while( have_rows('social_media', 'option') ): the_row();?>
				<li>
					<a href="<?php the_sub_field('url'); ?>" alt="social media links" target="_blank">
						<?php the_sub_field('fontawesome'); ?>
		  			</a>					
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>	
	</div>
	</div>	

			<div class="footer__quickLinks">
				<h4>quick links</h4>

				  
			</div>

	<div class="footer__aboutUs">
		<?php the_field('about_us', 'option'); ?>
	</div>


	 
</footer><!-- footer -->



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
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
