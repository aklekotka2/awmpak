<?php

if(!defined('AWMPACK_THEME_DIR')) {
	//define('LOVETOEAT_THEME_DIR', ABSPATH.'wp-content/themes/'.get_template().'/');
	define('AWMPACK_THEME_DIR', get_theme_root().'/'.get_template().'/');
}	

if(!defined('AWMPACK_THEME_URL')) {
	define('AWMPACK_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}

if(function_exists('register_nav_menus')) {
	register_nav_menus(array(
			'main_nav' => 'Główne menu ( Kontakt, O firmie. Targi....)',
			'second_nav' => 'Menu z ofertą',
			'side_nav' => 'Menu boczne ( polecamy )'
	));
	
	//add_action( 'init', 'register_nav_menus' );
}

register_sidebar(array(
	'name'=>'Pasek boczny AWMpak',
	'id'=>'awmpak-archive-widget',
	'description'=>'Widżety w pasku bocznym',
	'before_widget' => '<div id="%1$s" class="box widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'



	));


	
?>