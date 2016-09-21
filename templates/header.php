<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7]>      <html class="no-js ie ie6 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie ie7 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie ie8 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html>         <!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
	<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico"/>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
	<!--fonts -->

	<!-- Add jQuery library -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<!-- Google Map Lib library (served from Google) -->
	<script src='https://api.tiles.mapbox.com/mapbox.js/v2.0.1/mapbox.js'></script>
	<link href='https://api.tiles.mapbox.com/mapbox.js/v2.0.1/mapbox.css' rel='stylesheet' />
	<!-- bxSlider Javascript file -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
	<!-- bxSlider CSS file -->
	<link href="<?php echo get_template_directory_uri(); ?>/stylesheets/jquery.bxslider.css" rel="stylesheet" />
	<!-- bcg js file -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/master.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>

	<!-- Add fancyBox -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >
<div class="pre-loader">
	<i class="wow pulse" data-wow-iteration="30"></i>
</div>

<div class="header">
<div class="mobile-menu">
<a class="lines-button x" type="button" role="button" aria-label="Toggle Navigation">
  <span class="lines"></span>
</a>
</div><!--mobile-menus-->

<a class="logo-contain" href="<?php bloginfo('url'); ?>">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 770.4 217.4" enable-background="new 0 0 770.4 217.4" xml:space="preserve" class="logo">
<g>
	<defs>
		<rect id="SVGID_1_" width="770.4" height="217.4"/>
	</defs>
	<clipPath id="SVGID_2_">
		<use xlink:href="#SVGID_1_"  overflow="visible"/>
	</clipPath>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M13.7,160.1c11.3,7.4,30.8,12.3,53.1,12.3c22.3,0,41.8-4.9,53.1-12.3
		c3.5-2.3,5.5-6.1,5.5-10.3l0.1-30.4c0-0.5-0.5-0.7-0.9-0.4c-9.8,9.4-32,16-57.8,16c-25.8,0-48-6.6-57.8-16
		c-0.3-0.3-0.9-0.1-0.9,0.4l0.1,30.4C8.2,153.9,10.2,157.8,13.7,160.1 M100.7,140.1c4.6,0,8.3,3.7,8.3,8.3c0,4.6-3.7,8.3-8.3,8.3
		c-4.6,0-8.3-3.7-8.3-8.3C92.5,143.8,96.2,140.1,100.7,140.1 M32.8,140.1c4.6,0,8.3,3.7,8.3,8.3c0,4.6-3.7,8.3-8.3,8.3
		c-4.6,0-8.3-3.7-8.3-8.3C24.6,143.8,28.3,140.1,32.8,140.1"/>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M66.8,125.8c25.5,0,47.4-6.4,57.4-15.6c0.2-0.2,0.4-0.5,0.3-0.8l-5.1-70.1
		c0-0.5-0.4-0.8-0.8-0.9c-11.7-2.5-32.4-4.1-51.9-4.1s-40.1,1.6-51.9,4.1c-0.4,0.1-0.8,0.5-0.8,0.9l-5.1,70.1c0,0.3,0.1,0.6,0.3,0.8
		C19.4,119.4,41.3,125.8,66.8,125.8"/>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M16.6,29c11.8-2.3,31.6-3.8,50.2-3.8s38.4,1.5,50.2,3.8
		c0.7,0.1,1.3-0.5,1.2-1.2l-2-14.1C115,7,111.1,2.3,104.7,2.3H66.8H28.8c-6.3,0-10.2,4.7-11.5,11.5l-2,14.1
		C15.3,28.6,15.9,29.2,16.6,29 M51.5,10.2h15.3h15.3c2.1,0,3.8,1.7,3.8,3.8c0,2.1-1.7,3.8-3.8,3.8H66.8H51.5c-2.1,0-3.8-1.7-3.8-3.8
		C47.6,11.9,49.4,10.2,51.5,10.2"/>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M133.4,216.2l-27.8-40c-0.3-0.4-0.8-0.6-1.3-0.5c-13.6,4-26.5,5.4-37.6,5.4
		c-11.1,0-24-1.4-37.6-5.4c-0.5-0.1-1,0-1.3,0.5l-27.8,40c-0.3,0.5,0,1.2,0.6,1.2h14.7c0.3,0,0.5-0.1,0.6-0.3l14.4-21.2
		c0.2-0.3,0.6-0.5,1-0.5h35.2H102c0.4,0,0.8,0.2,1,0.5l14.4,21.2c0.1,0.2,0.4,0.3,0.6,0.3h14.7C133.4,217.4,133.8,216.7,133.4,216.2
		"/>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M199.2,129.1c11.1,3.8,25.2,8.2,24.3,23.5c-0.7,11.6-11.1,20.4-25.9,20.4
		c-10.1,0-17.9-2.2-26-6.4c-0.8-0.4-1.1-1.5-0.7-2.3l4.7-8.8c0.4-0.8,1.5-1.2,2.3-0.8c6.3,3,12.6,5.1,19,5.1
		c6.2,0,10.7-2.6,11.4-6.8c0.8-5.1-4.5-7.8-11.4-10c-10.8-3.4-25.2-6.8-25.2-22.3c0-13,9.7-20.8,23.1-20.8c3.9,0,13.1,0.8,24.4,5.8
		c0.8,0.4,1.2,1.4,0.8,2.3l-3.8,8.9c-0.4,0.9-1.4,1.3-2.3,1c-4.2-1.7-11.9-4.6-18.1-4.6c-5,0-9.5,1.6-9.7,6.6
		C186.3,124.7,192.2,126.6,199.2,129.1"/>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M251.4,114.2h-17.5c-0.9,0-1.7-0.8-1.7-1.7v-9.8c0-0.9,0.8-1.7,1.7-1.7h49.7
		c0.9,0,1.7,0.8,1.7,1.7v9.8c0,0.9-0.8,1.7-1.7,1.7H266v56.3c0,0.9-0.8,1.7-1.7,1.7h-11.1c-0.9,0-1.7-0.8-1.7-1.7V114.2z"/>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M312.4,170.5c0,0.9-0.8,1.7-1.7,1.7h-10.8c-0.9,0-1.7-0.8-1.7-1.7v-67.8
		c0-0.9,0.8-1.7,1.7-1.7h25.2c19.5,0,25.4,13.6,25.4,23.1c0,10.3-6,17.7-14,21.2l12,25.4c0.3,0.7-0.2,1.5-1,1.5h-12.2
		c-1,0-2-0.6-2.4-1.5l-10.9-23.2h-9.6V170.5z M336.1,124.1c0-3.5-1.8-10-10.5-10h-13.2v20H326C334.2,133.9,336.1,127.2,336.1,124.1"
		/>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M380.1,143.7V159h32.4c0.9,0,1.7,0.8,1.7,1.7v9.8c0,0.9-0.8,1.7-1.7,1.7h-45
		c-0.9,0-1.7-0.8-1.7-1.7v-67.8c0-0.9,0.8-1.7,1.7-1.7h45c0.9,0,1.7,0.8,1.7,1.7v9.8c0,0.9-0.8,1.7-1.7,1.7h-32.4v16.3h24.9
		c0.9,0,1.7,0.8,1.7,1.7v9.8c0,0.9-0.8,1.7-1.7,1.7H380.1z"/>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M444.8,143.7V159h32.4c0.9,0,1.7,0.8,1.7,1.7v9.8c0,0.9-0.8,1.7-1.7,1.7h-45
		c-0.9,0-1.7-0.8-1.7-1.7v-67.8c0-0.9,0.8-1.7,1.7-1.7h45c0.9,0,1.7,0.8,1.7,1.7v9.8c0,0.9-0.8,1.7-1.7,1.7h-32.4v16.3h24.9
		c0.9,0,1.7,0.8,1.7,1.7v9.8c0,0.9-0.8,1.7-1.7,1.7H444.8z"/>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M508.8,114.2h-17.5c-0.9,0-1.7-0.8-1.7-1.7v-9.8c0-0.9,0.8-1.7,1.7-1.7h49.7
		c0.9,0,1.7,0.8,1.7,1.7v9.8c0,0.9-0.8,1.7-1.7,1.7h-17.7v56.3c0,0.9-0.8,1.7-1.7,1.7h-11.1c-0.9,0-1.7-0.8-1.7-1.7V114.2z"/>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M604.4,121.2c-0.6,0.7-1.7,0.6-2.3-0.1c-4.2-4.2-11.2-7.7-17.2-7.7
		c-18.2,0-20.8,17.3-20.8,23.1c0,5.8,2.6,23,20.9,23c6.2,0,13-3.3,17.8-7.1c0.7-0.6,1.8-0.5,2.4,0.2l5.9,7.2
		c0.6,0.7,0.6,1.8-0.1,2.5c-7.1,6.6-15.4,10.8-26.1,10.8c-27.2,0-35.4-21.4-35.4-36.6c0-14.9,8.2-36.5,35.4-36.5
		c11.6,0,19.7,4.8,26.7,12.1c0.6,0.6,0.6,1.7-0.1,2.4L604.4,121.2z"/>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M686.6,170.7c0.3,0.7-0.2,1.5-1,1.5H673c-1,0-2-0.6-2.3-1.6l-6.2-15.1h-22
		l-6.1,15.1c-0.4,1-1.3,1.6-2.3,1.6h-12.6c-0.8,0-1.3-0.8-1-1.5l31.2-69.5c0.3-0.6,1-1.1,1.7-1.1c0.8,0,1.5,0.5,1.8,1.1L686.6,170.7
		z M647.1,144.1h12.8l-6.4-16L647.1,144.1z"/>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M712.7,170.5c0,0.9-0.8,1.7-1.7,1.7h-10.8c-0.9,0-1.7-0.8-1.7-1.7v-67.8
		c0-0.9,0.8-1.7,1.7-1.7h25.2c19.5,0,25.4,13.6,25.4,23.1c0,10.3-6,17.7-14,21.2l12,25.4c0.3,0.7-0.2,1.5-1,1.5h-12.2
		c-1,0-2-0.6-2.4-1.5l-10.9-23.2h-9.6V170.5z M736.4,124.1c0-3.5-1.8-10-10.5-10h-13.2v20h13.6C734.6,133.9,736.4,127.2,736.4,124.1
		"/>
	<path clip-path="url(#SVGID_2_)" fill="#004987" d="M185.2,73.3c0,0.9-0.7,1.7-1.7,1.7h-9.2c-0.9,0-1.7-0.7-1.7-1.7V4.2
		c0-0.9,0.7-1.7,1.7-1.7h25.4c19.7,0,25.6,13.7,25.6,23.1c0,10.6-6.8,18.3-15.2,21.6c3.8,8.3,8.5,18,12.3,26.3
		c0.3,0.6-0.2,1.4-0.9,1.4h-10.3c-1,0-2-0.6-2.4-1.4L197.3,49h-12.1V73.3z M212.6,25.7c0-4-2.2-11.8-12.3-11.8h-15.1v23.6h15.5
		C210.4,37.2,212.6,29.4,212.6,25.7"/>
	<path clip-path="url(#SVGID_2_)" fill="#004987" d="M246,0c3.9,0,7,3.1,7,7c0,4.1-3.1,7-7,7c-4,0-7-2.9-7-7C239,3.1,242,0,246,0
		 M252.1,73.3c0,0.9-0.7,1.7-1.7,1.7h-9c-0.9,0-1.7-0.7-1.7-1.7V24.9c0-0.9,0.7-1.7,1.7-1.7h9c0.9,0,1.7,0.7,1.7,1.7V73.3z"/>
	<path clip-path="url(#SVGID_2_)" fill="#004987" d="M312.8,2.6c0.9,0,1.7,0.7,1.7,1.7v69.1c0,0.9-0.7,1.7-1.7,1.7h-4.7
		c-1,0-1.9-0.6-2.2-1.6l-0.9-2.5c-4.1,3.2-9.2,4.9-14.3,4.9c-19.2,0-25.2-15.6-25.2-26.7c0-10.9,5.9-26.7,25.8-26.7
		c4.1,0,7.9,0.8,11,2V4.2c0-0.9,0.7-1.7,1.7-1.7H312.8z M302.3,35.9c-2.7-1.9-6.7-2.9-10.1-2.9c-12.1,0-14.5,11.4-14.5,16.1
		c0,4,1.7,16.1,13.7,16.1c5.5,0,9-2.6,11-5.7V35.9z"/>
	<path clip-path="url(#SVGID_2_)" fill="#004987" d="M371.4,67c0.5,0.7,0.4,1.9-0.3,2.4c-5.4,4.1-10.9,6.2-17.8,6.2
		c-19.9,0-25.9-15.4-25.9-26.6c0-10.9,6-26.5,25.9-26.5c13.5,0,21.1,8.7,21.1,22c0,1.8-0.1,3.9-0.5,6.4c-0.1,0.9-0.9,1.7-1.9,1.7
		h-32.1c0.8,5.1,3.8,12.1,13.3,12.1c4.1,0,8.4-1.1,11.9-3.4c0.7-0.4,1.8-0.3,2.3,0.4L371.4,67z M340.5,42.9h22.2
		c0.2-4.3-2.1-9.5-9.5-9.8C344.9,33.2,341.8,38,340.5,42.9"/>
	<path clip-path="url(#SVGID_2_)" fill="#004987" d="M506.4,62.6L506.4,62.6c-0.8-0.9-1.5-1.7-2.2-2.6c-0.3-0.4-0.9-0.6-1.4-0.6
		c-0.4,0-0.8,0.1-1.2,0.4c-3.4,2.6-10.4,7-18.8,7c-9.6,0-16.8-3.8-21.2-11.4c-3.2-5.5-4.4-12.3-4.4-16.8c0-4.5,1.2-11.2,4.4-16.8
		c4.4-7.6,11.5-11.5,21.2-11.5c7.2,0,14.3,3.8,18.6,7.3c0.4,0.3,0.8,0.5,1.3,0.5c0.5,0,1-0.2,1.4-0.5l3.1-3.1c0.7-0.7,0.7-2,0-2.7
		c-6.7-6.5-14.5-9.5-24.4-9.5c-12.1,0-21.4,4.3-27.6,12.6c-4.7,6.3-7.4,14.9-7.4,23.7c0,8.9,2.7,17.6,7.4,24
		c6.2,8.4,15.5,12.6,27.6,12.6c9.6,0,17.4-2.8,24.3-8.8c0.7-0.7,0.8-1.8,0.2-2.7C507,63.3,506.7,63,506.4,62.6"/>
	<path clip-path="url(#SVGID_2_)" fill="#004987" d="M443.8,71.8l-35.6-34.3L442,5.5c0.4-0.4,0.6-0.9,0.6-1.4c0-0.6-0.5-1.1-1.1-1.1
		h-7.9c-1.3,0-2.3,0.6-2.9,1.1l-32,30.7V4.9c0-1-0.9-1.9-1.9-1.9h-5.6c-1,0-1.9,0.9-1.9,1.9V73c0,1,0.9,1.9,1.9,1.9h5.6
		c1,0,1.9-0.9,1.9-1.9V40.4l34.2,33.3c0.6,0.5,1.6,1.1,2.9,1.1h7.5c0.7,0,1.3-0.6,1.3-1.3C444.6,72.9,444.3,72.3,443.8,71.8"/>
	<path clip-path="url(#SVGID_2_)" fill="#0081C6" d="M755.4,102.1c-0.2,0-0.4-0.2-0.4-0.4v-0.3c0-0.2,0.2-0.4,0.4-0.4h4.7
		c0.2,0,0.4,0.2,0.4,0.4v0.3c0,0.2-0.2,0.4-0.4,0.4h-1.8v6.1c0,0.2-0.2,0.4-0.4,0.4h-0.4c-0.2,0-0.4-0.2-0.4-0.4v-6.1H755.4z
		 M765.7,108.5c0,0.1-0.1,0.1-0.2,0.1c-0.1,0-0.2-0.1-0.2-0.1l-2-4.8l-1.4,4.4c-0.1,0.2-0.3,0.4-0.5,0.4h-0.5
		c-0.2,0-0.3-0.2-0.3-0.4l2.4-7c0-0.1,0.1-0.2,0.2-0.2c0.1,0,0.2,0.1,0.2,0.2l2.2,5l2.2-5c0-0.1,0.1-0.1,0.2-0.1
		c0.1,0,0.2,0.1,0.2,0.1l2.4,7.1c0.1,0.2-0.1,0.4-0.3,0.4h-0.5c-0.2,0-0.5-0.2-0.5-0.4l-1.4-4.4L765.7,108.5z"/>
</g>
</svg>
</a>

        <?php wp_nav_menu(array('theme_location' => 'main', 'container_class' => 'main-m')); ?>
<div class="search-contain">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 67.9 72.1" enable-background="new 0 0 67.9 72.1" xml:space="preserve" class="search-i">
<path fill="#0081C5" d="M48,44c3.8-4.6,6-10.6,6-17C54,12.1,41.9,0,27,0C12.1,0,0,12.1,0,27s12.1,27,27,27c5.2,0,10.1-1.5,14.2-4.1
	l20,22.1l6.7-6.1L48,44z M27,44.4c-9.6,0-17.3-7.8-17.3-17.3S17.5,9.7,27,9.7c9.6,0,17.3,7.8,17.3,17.3S36.6,44.4,27,44.4z"/>
</svg>

</div><!--search-contain-->
<?php get_search_form(); ?>

<div class="route-container">
<a href="/route-map/"> <p>Map</p> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 79.5 98.7" enable-background="new 0 0 79.5 98.7" xml:space="preserve" class="map-i">
<g>
	<defs>
		<rect id="SVGID_1_" x="0" y="0" width="79.5" height="98.7"/>
	</defs>
	<clipPath id="SVGID_2_">
		<use xlink:href="#SVGID_1_"  overflow="visible"/>
	</clipPath>
	<path clip-path="url(#SVGID_2_)" fill="#FFFFFF" d="M39.7,0C17.8,0,0,17.8,0,39.7s39.7,59,39.7,59s39.7-37.1,39.7-59S61.7,0,39.7,0
		 M39.7,53.3c-9.2,0-16.7-7.5-16.7-16.7s7.5-16.7,16.7-16.7s16.7,7.5,16.7,16.7S49,53.3,39.7,53.3"/>
</g>
</svg>
</a>
</div><!--route-container-->
        
</div><!--header-->

<div class="drop">