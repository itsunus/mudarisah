<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        
        
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
       
        
    </head>

<body>
<div class="warp">
    <div class="inwarp">
    	<div class="mainframe">
        <div class="header">
        	<div class="header_logo">
            	<div class="logo">
            		<a href="<?php echo get_option('home'); ?>"><img src="<?php echo bloginfo("template_directory").'/images/logo.png';?>" /></a>
                </div>
                <div class="subscribe_area">
                	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebarsubscribe') ) : ?>
    				<?php endif; ?>
                </div>
            </div>
            <div id="menu">
                   <ul>
                       <?php wp_nav_menu(array('menu' => 'Main Nav Menu')); ?>
                   </ul>   
            </div>
            
            
        </div>
        <div class="slide_area">
        	<div class="feature_shado"></div>
        	<img src="<?php echo bloginfo("template_directory").'/images/slide/slide.png';?>"/>
        	<div class="feature_shado_buttom"></div>
        </div>


