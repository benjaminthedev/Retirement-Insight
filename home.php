<?php
/**
 * Template Name: Custom Home Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Retirement_Insight
 */

get_header();
?>


<!-- What do we need:

    

    1, Main Background
    2, Main Heading and sub heading
    3, CTA Box + headings
    4, CTA Anchor
    5, The wave effect css3
    6, section__one Heading 
    7, section__two sub text
-->

<div class="banner__image">
    <div class="banner__wrap">
        <div class="banner__boxLeft">
            <h1><?php the_field('main_heading_banner'); ?></h1>
            <h2><?php the_field('sub_heading_banner'); ?></h2>    
        </div>


        <div class="banner__boxRight">
            <h3><?php the_field('top_box_text'); ?><br />
              <span class="gold"><?php the_field('sub_text_box'); ?></span>
            </h3>

            <br />

        <a href="<?php the_field('section_three_url'); ?>" class="gettingStarted__button"><span></span><span></span><span></span><span></span>Get Started > </a>

        </div>        
    </div><!-- end banner__wrap -->
</div><!-- end banner__image -->

<div class="banner__wave">
    <section>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </section>
</div><!-- end banner__wave -->




	<main id="primary" class="site-main">  
                <?php the_field('button_text'); ?>
                <?php the_field('section_one_heading'); ?>
                <?php the_field('section_one_text'); ?>
                <?php the_field('section_three_image'); ?>
                <?php the_field('section_three_text'); ?>
                <?php the_field('section_three_url'); ?>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>