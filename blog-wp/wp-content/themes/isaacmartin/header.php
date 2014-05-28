<!DOCTYPE html>
<html class="no-js pointer" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>

	<script>
        (function () {
          var html = document.getElementsByTagName('html')[0];
          if (html.className.search('pointer') > -1 && ('ontouchstart' in window || (typeof navigator.msMaxTouchPoints !== 'undefined' && navigator.msMaxTouchPoints > 0))) {
            html.className = html.className.replace('pointer', '');
          }
        }());
    </script>

    <!--[if (gt IE 8) | (IEMobile)]><!-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:200,400,600,700,400italic|Merriweather:400,300,700,900,300italic' rel='stylesheet' type='text/css'>
    <!--<![endif]-->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->

</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	

	<header id="top" role="banner">
            <div class="block">
                <h1 class="logo"><a href="../index.php"><img alt="Isaac Martin" src="../assets/logo-min.svg"></a></h1>
                <a class="nav-btn" id="nav-open-btn" href="#nav"><span class="icon-list"></span></a>
            </div>
            <?php include '../nav.php'; ?>
           
        </header>
        <header id="header" role="banner">
		
		<nav id="menu" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
	</header>

<div id="container">