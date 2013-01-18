<?php
	if ( !is_admin() ) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	wp_enqueue_script('jquery');
	}
	if (function_exists('register_nav_menus')) {
		register_nav_menus(
			array(
				'main_nav' => 'Main Navigation Menu'
			)
		);
	}
	
	
	
	
	
if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'sidebardifault',
	'before_widget' => '<div id="%1$s" class="side-c %2$s">',
	'after_widget' => '</div>', 
	'before_title' => '<h2>', 
	'after_title' => '</h2>', 
	));
	register_sidebar(array('name'=>'sidebarsubscribe',
	'before_widget' => '<div id="%1$s" class="side-c %2$s">', 
	'after_widget' => '</div>', 
	'before_title' => '<h2>', 
	'after_title' => '</h2>', 
	));
	register_sidebar(array('name'=>'footerwidget',
	'before_widget' => '<div id="%1$s" class="side-c %2$s">', 
	'after_widget' => '</div>', 
	'before_title' => '<h2>', 
	'after_title' => '</h2>', 
	));
		register_sidebar(array('name'=>'footerwidgetwo',
	'before_widget' => '<div id="%1$s" class="side-c %2$s">', 
	'after_widget' => '</div>', 
	'before_title' => '<h2>', 
	'after_title' => '</h2>', 
	));
		register_sidebar(array('name'=>'footerwidgethree',
	'before_widget' => '<div id="%1$s" class="side-c %2$s">', 
	'after_widget' => '</div>', 
	'before_title' => '<h2>', 
	'after_title' => '</h2>', 
	));
		register_sidebar(array('name'=>'footerwidgetfour',
	'before_widget' => '<div id="%1$s" class="side-c %2$s">', 
	'after_widget' => '</div>', 
	'before_title' => '<h2>', 
	'after_title' => '</h2>', 
	));
?>