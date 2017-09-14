<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-T8QXFLL');</script>
		<!-- End Google Tag Manager -->

		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>
<?php // if user is not logged in, don't display anything. Else display the blog ?>
<?php if (!is_user_logged_in() ) {
	wp_redirect ( "" );
	exit;
}
?>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8QXFLL"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					
					<?php

					$current_url="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
					$checkblog = strpos($current_url, $blog_string);
					$endWith= substr($current_url,-4);  

					?>
					<nav class="cf" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php  // check if it's the homepage of the blog or not. If not, add the WP menu which add a go back link ?>
					<?php if ($endWith === ".com" || $endWith === "com/") {
						echo "<div class='cf d-1of3 t-1of3 m-all'>&nbsp;</div>";

					} else{ ?>

					<?php wp_nav_menu(array(
					         'container' => false,                           // remove nav container
					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
					         'menu' => __( 'The Main Blog Menu - left', 'bonestheme' ),  // nav name
					         'menu_class' => 'd-1of3 t-1of3 m-display-none nav top-left-nav cf',               // adding custom nav class
					         'theme_location' => 'blog-top-left-nav',                 // where it's located in the theme
					         'before' => '',                                 // before the menu
    			               'after' => '',                                  // after the menu
    			               'link_before' => '',                            // before each link
    			               'link_after' => '',                             // after each link
    			               'depth' => 0,                                   // limit the depth of the nav
					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

						<?php } ?>

						<p class="d-1of3 t-1of3 m-1of2 logo" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-fred-de-la-compta-black.svg" alt="Fred de la compta, le blog"></a></span></p>

						<?php wp_nav_menu(array(
					         'container' => false,                           // remove nav container
					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
					         'menu' => __( 'The Main Blog Menu - right', 'bonestheme' ),  // nav name
					         'menu_class' => 'd-1of3 t-1of3 m-1of2 nav top-right-nav cf last-col',               // adding custom nav class
					         'theme_location' => 'blog-top-right-nav',                 // where it's located in the theme
					         'before' => '',                                 // before the menu
    			               'after' => '',                                  // after the menu
    			               'link_before' => '',                            // before each link
    			               'link_after' => '',                             // after each link
    			               'depth' => 0,                                   // limit the depth of the nav
					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					

				</div>
			</header>
