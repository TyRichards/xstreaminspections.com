<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">			
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
		
		<?php do_action('before'); ?> 
		<header>			
			<section class="container top-header">
				<div class="col-md-6 header-left">
					<h2 class="site-title">
						<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
					</h2>
					<p class="site-description">						
						<?php bloginfo('description'); ?> 						
					</p>
				</div>
				<div class="col-md-6 header-right">
					<div class="sr-only">
						<a href="#content" title="<?php esc_attr_e('Skip to content', 'bootstrap-basic'); ?>"><?php _e('Skip to content', 'bootstrap-basic'); ?></a>
					</div>
					<?php if (is_active_sidebar('header-right')) { ?> 
					<div class="pull-right text-right">
						<?php dynamic_sidebar('header-right'); ?> 
					</div>
					<div class="clearfix"></div>
					<?php } // endif; ?> 
				</div>
			</section><!--.section-top-header-->		
			
			<section class="top-navbar">				
				<nav class="navbar navbar-default" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
								<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="collapse navbar-collapse navbar-primary-collapse">
							<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
							<?php if (is_active_sidebar('navbar-right')) { ?> 								
								<?php dynamic_sidebar('navbar-right'); ?> 								
							<?php } // endif; ?> 
<!-- 							<ul class="nav navbar-nav navbar-right">
        						<li class="active">
        							<a href="#">Schedule Inspection</a>
        						</li>
        					</ul> -->
							<a class="btn btn-default btn-primary navbar-btn navbar-right" href="/schedule-inspection">Schedule Inspection</a>        					
						</div><!--.navbar-collapse-->
					</div>
				</nav>				
			</section> <!-- section-navbar -->
		</header>		
			
			
		<div class="body-content">