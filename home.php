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

        <a href="https://retirementinsight.co.uk/product/paid-plan/" class="gettingStarted__button"><span></span><span></span><span></span><span></span>Get Started > </a>

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




<section class="one">
    <h2><?php the_field('section_one_heading'); ?></h2>
    <p><?php the_field('section_one_text'); ?></p>
</section>


<section class="two background__section">
               <img src="<?php the_field('section_two_image'); ?>" alt="Retirement Investment Start Now"> 
                
                
               <div class="section__right">
                    <?php the_field('section_two_text'); ?>              
                    
                    <a href="<?php the_field('section_two_url'); ?>" alt="Start Now" class="section__button">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <?php the_field('button_text'); ?> >
                    </a>
                </div>

</section>




<section class="three">

    <h3><?php the_field('section_three_heading'); ?></h3>
    <h4><?php the_field('section_three_sub_heading'); ?></h4> 
    
    <?php if( have_rows('icon_area') ): ?>
    <ul class="icon__area">
    <?php while( have_rows('icon_area') ): the_row(); 
        $image = get_sub_field('icon_image');
        $heading = get_sub_field('icon_heading');
        ?>
        <li>
            <img src="<?php the_sub_field('icon_image'); ?>" />
            <p><?php the_sub_field('icon_heading'); ?></p>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>


</section>



<section class="four background__section">
               
                
                
               <div class="section__right">
                    <?php the_field('section_four_text'); ?>              
                    
                    <a href="<?php the_field('section_four_url'); ?>" alt="Start Now" class="section__button">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <?php the_field('button_text'); ?> >
                    </a>
                </div>


                <img src="<?php the_field('section_four_image'); ?>" alt="Retirement Investment Start Now"> 

</section>



<?php
get_footer();
?>