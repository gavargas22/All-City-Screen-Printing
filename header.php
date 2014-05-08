<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>All City Screen Printing | El Paso, Texas</title>

		<!-- Latest compiled and minified CSS made for WordPress -->
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favico.png">
		<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favico.png" />
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style/style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css'>
		<link href="<?php bloginfo('stylesheet_directory'); ?>/style/bootstrap-wizard.css" rel="stylesheet" />
		<!-- Optional theme -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	</head>
	<body>

		<div class="wrapper-class top-header">
			<div class="container">

				<div class="logo-wrapper">
					<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/AllcityLongExtra-Red.png" />
				</div></a>

				<nav class="main-nav hidden-xs hidden-sm">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'main-nav__collapse collapse', 'menu_class' => 'main-nav__nav' ) ); ?>
				</nav>


				<button type="button" data-toggle="collapse" data-target=".mobile-nav__collapse" class="navbar-toggle navbar-toggle-menu">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>

			</div>
		</div>

		<nav class="mobile-nav-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'mobile-nav__collapse collapse', 'menu_class' => 'mobile-nav__nav' ) ); ?>
		</nav>
