<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package afafa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>Australian Fire & First Aid</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php wp_head(); ?>
    <script type="text/javascript">
    	 $(window).on('load',function() {
		    $(".preloader").fadeOut("slow", function(){
		    	$('#navbarResponsive ul').addClass('navbar-nav ml-auto');
		    	$('#navbarResponsive ul li').addClass('nav-item');
		    	$('#navbarResponsive ul li a').addClass('nav-link');
		        $(".preloader-left").addClass("slide-left");
		        $(".preloader-right").addClass("slide-right");
		    });
		});
    </script>  
</head>

<body id="page-top" <?php body_class(); ?>>
<div class="preloader">
      <div class="spinner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/status1.gif">
        <p class="text-center">Loading...</p>
      </div>
</div>
<div class="preloader-left"></div>
<div class="preloader-right"></div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'afafa' ); ?></a>

		<div class="top-general-charge">
	        <div class="top-general-charge-content">
	            <i class="fa fa-calendar fa-1x mb-1 sr-contact align-middle"></i>
	            <span>Mon-Friday | 9:00am - 5:30pm AEST</span>
	            <i class="fa fa-phone fa-1x mb-1 sr-contact align-middle"></i>
	            <span class="align-middle">1300 475 093</span>
	        </div>
	    </div>
		<!-- Navigation -->
		    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
		      <div class="container">
		        <a class="navbar-brand js-scroll-trigger" href="/">
		        	<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
		        </a>
		        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		          <span class="navbar-toggler-icon"></span>
		        </button>
		        <!-- MAIN MENU start-->
		        <div class="collapse navbar-collapse" id="navbarResponsive">
		          <ul class="navbar-nav ml-auto">
		            <li class="nav-item">
		              <a class="nav-link js-scroll-trigger" href="/courses-for-individuals">Courses for Individuals</a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link js-scroll-trigger" href="/corporate-group-training">Corporate & Group Training</a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link js-scroll-trigger" href="/book-now">Book now</a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link js-scroll-trigger" href="/faq">FAQ</a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link js-scroll-trigger" href="/contact-us">Contact Us</a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link js-scroll-trigger" href="/blog">Blog</a>
		            </li>
		          </ul>
		        </div>
				<!-- MAIN MENU end-->
		      </div>
		    </nav>
	 	<!-- Navigation end-->

	<div id="content" class="site-content">
