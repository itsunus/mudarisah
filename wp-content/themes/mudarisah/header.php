<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mudarisah - Teaching with Love</title>
<link href="<?php bloginfo("stylesheet_url");?>" rel="stylesheet" type="text/css" />
<?php
    if(qtrans_getLanguage()=='en') {
?>
    <link href="<?php bloginfo("template_directory");?>/include/en_style.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo("template_directory");?>/include/banner.css" rel="stylesheet" type="text/css" />
<?php
    } elseif(qtrans_getLanguage()=='ar') {
?>
    <link href="<?php bloginfo("template_directory");?>/include/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo("template_directory");?>/include/banner.css" rel="stylesheet" type="text/css" />
<?php
      // put your code here if the current language code is 'id' (Indonesian)
    }

?>



<script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/scripts.js"></script>

</head>
<body class="inner_body">
<div id="wrapper">
  <div class="logo"><a href="<?php echo get_bloginfo('url');?>"><img src="<?php echo bloginfo("template_directory");?>/images/logo.png" alt="Mudarisah" width="142" height="111" border="0" /></a></div>
  <div class="menu"> 
       <?php dynamic_sidebar( 'language' ); ?>
<?php wp_nav_menu( array( 'container_id' => 'main_menu',  'theme_location' => '' ,'menu_class' => 'menuy' ) ); ?>
     
  </div>
  <div class="input_search_area">
    <div class="btn_search"><a href="#"><img src="<?php echo bloginfo("template_directory");?>/images/btn_search.png" alt="Search" border="0" /></a></div>
    <div class="input_search_space">
      <input name="textfield" type="text" class="input_search_bg" id="textfield" />
    </div>
  </div>