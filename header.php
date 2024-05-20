<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OPTCL
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- my scripts and styles -->
	<!--favicons-->



	<!-- <link rel="stylesheet" href="<? // echo get_template_directory_uri(); 
										?>/fonts/fonts.css"> -->
	<!-- arabic styles -->
	<!-- <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.rtl.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main-rtl.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/navigation-rtl.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-rtl.css"> -->
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.5.0/flexslider.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!--mapbox-->
	<link href="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
	<div id="page" class="site" data-scroll-container>
		<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'optcl'); ?></a> -->

		<header id="masthead" class="site-header">
			<?php include(PATHLOCAL . '/navigation.php'); ?>
		</header><!-- #masthead -->