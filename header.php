<?php global $wise; ?>

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ready
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
    <meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   


	<!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body id="page3" <?php body_class(); ?>>
	<!--==============================header=================================-->
    <header>
    	<div class="main zerogrid">
            <h1><a href="index.html"><img src="<?php echo $wise['wise-logo']['url'] ?>" /></a></h1>
            <nav>


        

			 <?php 


			 wp_nav_menu([

			 	'theme_location'		=>'main-menu',
			 	'menu_class'			=>'menu',
			 	'container'				=>' ',
			 	'container_id'			=>' ',
			 	'container_class'		=>' '



			 ]);

			  ?>


            </nav>
            <div class="clear"></div>
        </div>




    </header>