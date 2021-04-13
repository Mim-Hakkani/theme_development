<?php global $wise ?>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ready
 */

?>

	<!--==============================footer=================================-->
    <footer>
        <div class="main zerogrid">
        	<div class="row">

            	<article class="col-1-4">
					<div class="wrap-col">
                    	<ul class="list-services">

                            <?php if(!empty($wise['f'])) : ?>

                        	<li class="item-1"><a class="tooltips" title="facebook" href="<?php echo $wise['f'] ?>"></a></li>

                           <?php endif ?>

                            <?php if(!empty($wise['tw'])) : ?>

                            <li class="item-2"><a class="tooltips" title="twiiter" href="<?php echo $wise['tw'] ?>"></a></li>
                            <?php endif ?>

                             <?php if(!empty($wise['ln'])) : ?>
                            <li class="item-3"><a class="tooltips" title="delicious" href="<?php echo $wise['ln'] ?>"></a></li>
                            <?php endif ?>

                             <?php if(!empty($wise['yt'])) : ?>
                            <li class="item-4"><a class="tooltips" title="youtube" href="<?php echo $wise['yt'] ?>"></a></li>
                            <?php endif ?>

                        </ul>
					</div>
                </article>

                <article class="col-1-4">
                	<div class="wrap-col">
                        <h5>Navigation</h5>

                    
                         <?php 

                         wp_nav_menu([

                            'theme_location'    =>'main-menu',
                            'menu_class'        =>'list-1',
                            'container'         =>' ',
                            'container_id'      =>' '


                         ])


                          ?>

                    </div>
                </article>

                <article class="col-1-4">
					<div class="wrap-col">
                    	<h5>Contact</h5>
                        <dl class="contact">
                            <dt><?php echo $wise['cl']; ?><br><?php echo $wise['imi'] ?></dt>
                            <dd><span>Phone:</span>  <?php echo $wise['pn'] ; ?> </dd>
                            <dd><span>Fax:</span>  <?php echo $wise['fx'] ; ?> </dd>
                         </dl>
					 </div>
                </article>

                <article class="col-1-4">
					<div class="wrap-col">
                    	<h5>Legal</h5>
                        <p class="prev-indent-bot3 color-1">Wise Solutions &copy; <?php the_time('Y') ?></p>
                        <p class="color-1 p0">Designed by <a class="link" target="_blank" href="http://www.templatemonster.com/"><?php echo $wise['d1'] ?></a> & <a class="link" target="_blank" href="https://www.zerotheme.com/"><?php echo $wise['d2'] ?></a></p>
					</div>
                </article>



            </div>
        </div>
    </footer>
	<script type="text/javascript"> Cufon.now(); </script>

	<?php wp_footer(); ?>
</body>
</html>

