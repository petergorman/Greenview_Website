<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--<meta name="viewport" content="width=device-width" />-->
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<meta name="description" content="" />

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/includes/css/global.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/includes/js/scroller.js"></script>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<style type="text/css">
		.gradient {
		   filter: none;
		}
	</style>
<![endif]-->


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a id="top"></a>

<header id="nav" class="wrapper">
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-xs-3 col-xs-offset-9 contact-number">
			
				<i class="fa fa-phone"></i> <h3><?php the_field('phone_number'); ?></h3>
				
			</div> <!-- END Col -->
		</div> <!-- END Row -->
		
		<div class="row">
			<div class="col-xs-9 gv-logo-nav">
				
				<a href="#top"><img src="<?php bloginfo('template_directory');?>/img/gv-logo.gif" width="251" height="90" alt="Greenview Consulting"/></a>
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					<!--<ul>
						<li><a href="#" title="Basix"><h3>BASIX</h3></a></li>
						<li><a href="#" title="Section J"><h3>Section J</h3></a></li>
						<li class="active"><a href="#" title="About"><h3>About</h3></a></li>
						<li><a href="#" title="Contact"><h3>Contact</h3></a></li>
					</ul>-->
				</nav>
				
			</div> <!-- END Col -->
			<div class="col-xs-3">
				
				<a href="#quote" class="btn gv-btn gv-btn-quote col-xs-12">Get a Quote</a>
				
			</div> <!-- END Col -->
 		</div> <!-- END Row -->
	</div> <!-- END Container -->
</header> <!-- END Wrapper -->

<div class="top-box"></div>

<!--<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<section id="branding">
<div id="site-title"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
<div id="site-description"><?php bloginfo( 'description' ); ?></div>
</section>
<nav id="menu" role="navigation">
<div id="search">
<?php get_search_form(); ?>
</div>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
<div id="container">-->