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
 * @package commet
 */

get_header(); ?>

 <?php if(is_front_page()) : ?>

  <div class="slider-wrapper">

            <div class="slider">
                <ul class="items">
          <?php 

                    $sliderr = new WP_Query([

                        'post_type'     =>'slider',
                        'posts_per_page'=>3


                    ]) ;

                    while($sliderr->have_posts()) : $sliderr->the_post()

                    ?>
                   <li>
                        <?php the_post_thumbnail(); ?>
                        <div class="banner">
                            <strong><?php the_title() ?></strong>
                            <em><?php the_content(); ?></em>
                            <span class="button">
                                <a href="<?php the_permalink(); ?>"><strong>Read More</strong></a>
                            </span>
                        </div>
                    </li>

             <?php endwhile; ?>


                </ul>
            </div>
        </div>

    <?php else : ?>
    
   <?php while(have_posts()) : the_post() ?>

        <div class="slider-wrapper">
            <div class="slider" style="background:url(<?php echo get_post_meta(get_the_ID(),'bimg',true) ?>) 0 -171px no-repeat;">
                <div class="banner">
                    <strong><?php echo get_post_meta(get_the_ID(),'bt',true) ?></strong>
                    <em><?php echo get_post_meta(get_the_ID(),'bd',true) ?></em>
                </div>
            </div>
        </div>

   <?php endwhile ?>

<?php endif ?>

	<!--==============================content================================-->
    <section id="content">
        <div class="main zerogrid">
                

                            <?php 

                           
                            while(have_posts()) : the_post() ?>

                        	
                                    <?php the_content() ?>
                           

                        <?php endwhile ?>

                        


                  
        </div>
    </section>
    

<?php get_footer(); ?>
