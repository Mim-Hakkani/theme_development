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



    
	<!--==============================content================================-->
    <section id="content">
        <div class="main zerogrid">
                <div class="row">
                	<article class="col-full">
                    	<h3>Business Services Overview</h3>
                        <div class="row">

                            <?php 

                            $com = new WP_Query([

                                'posts_per_page'    =>6,
                                'post_type'         =>'htop'

                            ]);

                            while($com->have_posts()) : $com->the_post() ?>

                        	<article class="col-1-3">
                            	<div class="wrap-col">
                                	<figure class="img-indent2">
                                     <?php the_post_thumbnail(); ?>   
                                    </figure>
                                    <div class="extra-wrap">
                                    	<strong class="title-1"><?php the_title(); ?></strong>
                                     <?php the_content() ?>
                                    </div>
                                </div>
                            </article>

                        <?php endwhile ?>

                        

                        </div>

                        <h3 class="prev-indent-bot2">Main Services</h3>
                        <div class="row">
                            <?php 

                            $com = new WP_Query([

                                'posts_per_page'    =>3,
                                'post_type'         =>'main'

                            ]);

                            while($com->have_posts()) : $com->the_post() ?>

                        	<article class="col-1-3">
								<div class="wrap-col">
	                                <strong class="circle"><?php echo get_post_meta(get_the_ID(),'cc',true) ?></strong>
	                                <div class="extra-wrap">
	                                    <div class="indent-top3">
	                                        <strong class="title-1 color-2"><?php echo get_post_meta(get_the_ID(),'ctilt',true) ?></strong>
	                                    </div>
	                                </div>
	                                <div class="clear"></div>
	                               <?php the_content(); ?>.
								</div>
                            </article>
                             <?php endwhile ?>

                            


                        </div>
                    </article>
                </div>
        </div>
    </section>
    

<?php get_footer(); ?>
