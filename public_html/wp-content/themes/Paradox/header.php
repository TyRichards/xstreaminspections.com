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
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
		<!-- header-3 -->
		<header class="header-3 header-section">
		    <div class="container">
		        <div class="row">
		            <nav class="navbar col-sm-12">
		                <div class="navbar-header col-sm-6">                   
							<a class="brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
									<?php bloginfo('name'); ?>
							</a>
							<div class="clearfix"></div>
							<p class="site-description">								
								<?php bloginfo('description'); ?> 								
							</p>
		                </div>
		                <div class="col-sm-6">		                	
			                <?php if (is_active_sidebar('header-right')) { ?> 
								<div class="pull-right">
									<?php dynamic_sidebar('header-right'); ?> 
								</div>
							<div class="clearfix"></div>
							<?php } // endif; ?> 		                	
		                </div>
		            </nav>
		        </div>
		    </div>
		    <div class="header-background"></div>
		</header>

		<!-- Header 10 -->
		<header class="header-10">
	        <div class="container">
	          	<div class="row">
	            	<div class="navbar col-sm-12" role="navigation">
	              		<div class="navbar-header">
	                		<button type="button" class="navbar-toggle"></button>	                
	              		</div>	              		
	              		<div class="collapse navbar-collapse pull-left">
							<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 			
						</div>	              		
	              		<form class="navbar-form pull-right">
			                <a class="btn btn-primary" href="#">Schedule Inspection</a>
			            </form>


	            	</div>
	          	</div>
	        </div>
	        <div class="header-background"></div>
      	</header>		
			
			
		<div id="content">