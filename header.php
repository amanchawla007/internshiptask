<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <!--<link rel="canonical" href="https://tgconnectmediaservices.com/" />-->

    <link rel="canonical" href=" ">
    <!--<noscript>-->
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/tg_css/animate.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/tg_css/bootstrap.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/tg_css/owlcarousel.min.css" />

    <!-- Video Popup -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/tg_css/magnific-popup.css" />
    <!--</noscript>-->
    <!--Style CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/tg_css/style.css">
    <!--<noscript>-->
    <!--Responsive CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/tg_css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/tg_css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--</noscript>-->
</head>

<body>

    <!-- End Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR45PCS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <!-- header======================-->
    <header>
        <div class="tw-head">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <a class="navbar-brand tw-nav-brand" href="">
                  <img src="<?php bloginfo('template_url'); ?>/images/logo/logo.png" alt="tgconnect logo" style="width: 65px;">
               </a>
                    <!-- End of Navbar Brand -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
                    <!-- End of Navbar toggler -->
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active"><a class="nav-link" href="https://tgconnectmediaservices.com">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                            <li class="nav-item dropdown tw-megamenu-wrapper">
                                <a class="nav-link" href="#" data-toggle="dropdown">
                           Services
                           <span class="tw-indicator">
                              <i class="fa fa-angle-down"></i>
                           </span>
                        </a>
                                 
                                <!-- End of Mega menu -->
                            </li>
                            <!-- End MegaMenu -->
                            <!-- End Dropdown -->
                            <li class="nav-item"><a class="nav-link" href="index.php#teampage">Our Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="career.php">Careers</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>
                        <!-- End Navbar Nav -->
                    </div>
                    <!-- End of navbar collapse -->

                    <div class="free-analysis wow pulse" data-wow-duration="2s" data-wow-iteration="100">
                        <a href="free-analysis.php" class="btn btn-dark">Free Analysis</a>
                    </div>
                    <!-- End off canvas menu -->
                </nav>
                <!-- End of Nav -->
            </div>
            <!-- End of Container -->
        </div>
        <!-- End tw head -->
    </header>
