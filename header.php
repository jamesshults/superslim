<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>
	<?php wp_title(' - ', true, 'right'); ?>
	<?php bloginfo('name'); ?>
	</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <div class="visible-xs hidden-sm hidden-md hidden-lg">
		<div class="mainMenuMobileSuperContainer">
			<div class="mainMenuMobileContainer">
				<div class="logoContainer">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsive mobileLogo" /></a>
				</div><!-- end logoContainer -->
				<div class="toggleContainer">
					<div class="toggle toggle-menu menu-right push-body toggle">
						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>
						<div class="clear"></div>
					</div>
				</div><!-- end toggleContainer -->
			</div><!-- end mainMenuMobileContainer -->
		</div><!-- end mainMenuMobileSuperContainer -->
		<div class="clear"></div>
		<?php wp_nav_menu( array( 'theme_location' => 'header_nav', 'menu_class' => 'mainMenuMobile cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right mobile' ) ); ?>
	</div>

	<div class="container">
		<div class="row">
			<div class="hidden-xs col-sm-12 col-md-12 col-lg-12">
				<?php wp_nav_menu( array( 'theme_location' => 'header_nav', 'menu_class' => 'mainMenu' ) ); ?>
			</div>
		</div><!-- end row -->
	</div><!-- end container -->
