<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<link href="<?php bloginfo( 'template_url' ); ?>/common/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo( 'template_url' ); ?>/common/css/css3-animation.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo( 'template_url' ); ?>/common/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo( 'template_url' ); ?>/common/fonts/fonts.css" rel="stylesheet" type="text/css">
<script src="<?php bloginfo( 'template_url' ); ?>/common/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/common/js/html5shiv.js" type="text/javascript"></script>

</head>

<body <?php body_class(); ?>>

	
    <header><a href="http://www.clientuat.com/inhouse/CWL/index.html" class="logo"><img src="<?php bloginfo( 'template_url' ); ?>/common/images/logo.png"  alt=""></a>
  <section class="live_support"> <strong>(800) 704-0428</strong><span><a href="#">Live Chat</a></span><img src="<?php bloginfo( 'template_url' ); ?>/common/images/left_arrow_chat.png" width="10" height="14" alt=""> </section>
  <nav>
    <ul>
     <!-- <li><a href="#home" class="menuactive">home</a></li> -->
      <li><a href="http://www.clientuat.com/inhouse/CWL/index.html">about Us</a></li>
      <li><a href="http://clientuat.com/inhouse/CWL/index.html">Our  Solutions</a></li>
      <li><a href="http://clientuat.com/inhouse/CWL/index.html">clients</a></li>
      <li><a href="http://clientuat.com/inhouse/CWL/index.html">contact</a></li>
       <li><a href="#">Blog</a></li>
    </ul>
  </nav>
  <section class="shadow"> </section>
</header>

<section class="content_container contact scrollblock" id="contact" >				
			