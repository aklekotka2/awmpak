<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
		
        <meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php bloginfo('title'); 				
				global $paged;
				if($paged > 1) {
					echo ' - strona ' . $paged;
				}?></title>
		<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/common.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script src="<?php echo AWMPACK_THEME_URL; ?>js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo AWMPACK_THEME_URL; ?>js/scripts.js"></script>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
		<?php wp_head(); ?>
    </head>

    <body <?php body_class()?> >

        <header>
            <div class="pos-center">
				<div class="text-header">
					<h1><a href="<?php echo esc_url(home_url('/')); ?>">awmpak.pl</a></h1>
					<h2><a href="#">Niezawodny partner w pakowaniu</a></h2>
					<div class="adress-header">
						<p>AWM-PAK Sp. z o.o. Sp. K.</p>
						<p>ul. Heliotropów 21</p>
						<p>04-796 Warszawa</p>
						<p>tel. / fax . : +48 22 612 63 11</p>
						<p>email : <a href="mailto:biuro@awmpak.pl">biuro@awmpak.pl</a></p>
					</div>
				</div>

                <nav id="main-nav" class="nav-main-menu">
                    <div>
						<?php wp_nav_menu();  //echo ABSPATH;?>
                    </div>  					
                </nav>
				<nav id="second-nav" class="nav-second-menu">
                    <div>
						<?php 
							 wp_nav_menu(array('theme_location' => 'second_nav'));
						?>
						<button type="button" title="Open menu" class="hamburger">

                            <svg  version="1.1" id="Layer_1" xmlns="&ns_svg;" xmlns:xlink="&ns_xlink;"  viewBox="0 0 52.7 20.7" style="overflow:visible;enable-background:new 0 0 52.7 20.7;" xml:space="preserve" class="hamburger-icon">
                            <path class="st0" d="M52.2,3.7c0,1.8-1.4,3.2-3.2,3.2H3.7c-1.8,0-3.2-1.4-3.2-3.2l0,0c0-1.8,1.4-3.2,3.2-3.2H49C50.8,0.5,52.2,1.9,52.2,3.7L52.2,3.7z"/>
                            <path class="st0" d="M52.2,17c0,1.8-1.4,3.2-3.2,3.2H3.7c-1.8,0-3.2-1.4-3.2-3.2l0,0c0-1.8,1.4-3.2,3.2-3.2H49C50.8,13.7,52.2,15.2,52.2,17L52.2,17z"/>
        					</svg>
        					
        					<svg  version="1.1" id="Layer_2" xmlns="&ns_svg;" xmlns:xlink="&ns_xlink;"  viewBox="0 0 41 41.2"
        						 style="overflow:visible;enable-background:new 0 0 41 41.2;" xml:space="preserve" class="close-icon">
        					<path class="st0" d="M39,39.9c-1.3,1.2-3.3,1.1-4.5-0.3L4.3,5.8C3.1,4.5,3.2,2.5,4.6,1.3l0,0c1.3-1.2,3.3-1.1,4.5,0.3l30.1,33.8
        						C40.4,36.7,40.3,38.7,39,39.9L39,39.9z"/>
        					<path class="st0" d="M39.6,3.3c1.2,1.3,1.1,3.3-0.2,4.5L5.9,38.2c-1.3,1.2-3.3,1.1-4.5-0.2l0,0c-1.2-1.3-1.1-3.3,0.2-4.5L35.1,3
        						C36.4,1.8,38.5,1.9,39.6,3.3L39.6,3.3z"/>
        					</svg>

						</button>
                    </div>  					
                </nav>
            </div>
        </header>