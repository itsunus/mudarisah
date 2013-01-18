<?php
/*


  Template Name: Home Page

 */
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Mudarisah - Teaching with Love</title>
        <link href="<?php bloginfo("stylesheet_url"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo("template_directory"); ?>/include/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo("template_directory"); ?>/include/banner.css" rel="stylesheet" type="text/css" />

        <?php //wp_head(); ?>
        <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/scripts.js"></script>
        <script src="<?php bloginfo("template_directory"); ?>/js/cufon-yui.js" type="text/javascript"></script>
        <script src="<?php bloginfo("template_directory"); ?>/js/Bell_Gothic_Std_700.font.js" type="text/javascript"></script>
        <script type="text/javascript">  
            Cufon.replace('.main_banner_text');
            Cufon.replace('.mid_tag');
            Cufon.replace('.mid_box_text');
            Cufon.replace('.news_section');
            Cufon.replace('.testimonials_section');
            Cufon.replace('.footer');
        </script>
    </head>
    <body>
        <div id="wrapper">
            <div class="logo"><a href="http://localhost/mudarisah/?page_id=16"><img src="<?php echo bloginfo("template_directory"); ?>/images/logo.png" alt="Mudarisah" width="142" height="111" border="0" /></a></div>
            <div class="menu"> 
                <a href="http://localhost/mudarisah/?page_id=16"><span class="home_acitve"></span></a> 
                <span class="our_classes"><a href="http://localhost/mudarisah/?page_id=26"></a></span> 
                <span class="policies"><a href="http://localhost/mudarisah/?page_id=13"></a></span>
                <span class="contact_us"><a href="http://localhost/mudarisah/?page_id=44"></a></span> 
            </div>
            <div class="input_search_area">
                <div class="btn_search"><a href="#"><img src="<?php echo bloginfo("template_directory"); ?>/images/btn_search.png" alt="Search" border="0" /></a></div>
                <div class="input_search_space">
                    <input name="textfield" type="text" class="input_search_bg" id="textfield" />
                </div>
            </div>




            <div class="main_banner">
                <div class="main_banner_text">
                    <div class="banner_text_heading">Lorem ipsum dolor<br />
                        sit amet, consectetuer<br />
                        adipiscing elit</div>
                    <div class="banner_lower_text">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt<br />
                        <br />

                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </div>
                </div>
                <div class="main_banner_area">
                    <div id="header"><div class="wrap">
                            <div id="slide-holder">
                                <div id="slide-runner">
                                    <img src="<?php echo bloginfo("template_directory"); ?>/images/slide1.jpg" alt="" width="621" height="313" class="slide" id="slide-img-1" />
                                    <img src="<?php echo bloginfo("template_directory"); ?>/images/slide2.jpg" alt="" width="621" height="313" class="slide" id="slide-img-2" />
                                    <img src="<?php echo bloginfo("template_directory"); ?>/images/slide3.jpg" alt="" width="621" height="313" class="slide" id="slide-img-3" />
                                    <div id="slide-controls">
                                        <p id="slide-nav"></p>
                                    </div>
                                </div>

                                <!--content featured gallery here -->
                            </div>
                            <script type="text/javascript">
                                if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"nature beauty","desc":"nature beauty photography"},{"id":"slide-img-2","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-3","client":"nature beauty","desc":"add your description here"}];
                            </script>
                        </div></div>
                </div>
            </div>
            <div class="home_mid_section">


                <?php query_posts('category_name=Home_Our_Classes&showposts=1'); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="home_mid_box" style="background:none;">

                        <div class="mid_box_img" style="padding-bottom:4px;">
                            <img src="<?php echo catch_that_image(); ?>" alt="Our Classes" width="193" height="158" />
                        </div>
                        <div class="mid_tag"><?php the_title(); ?></div>
                        <div class="mid_box_text"><?php echo limit_words(get_the_excerpt(), '10'); ?><br />
                            <br />
                            <a href="<?php the_permalink(); ?>">More Learn </a></div>
                    </div>
                <?php endwhile; ?>   

                <?php query_posts('category_name=Home_Methods_Training&showposts=1'); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="home_mid_box">

                        <div class="mid_box_img" style="padding-top:40px; padding-bottom:18px;">
                            <img src="<?php echo catch_that_image(); ?>" alt="Methods Training" width="151" height="103" />               
                        </div>
                        <div class="mid_tag"><?php the_title(); ?></div>
                        <div class="mid_box_text"><?php echo limit_words(get_the_excerpt(), '10'); ?><br />
                            <br />
                            <a href="<?php the_permalink(); ?>">More Learn </a></div>
                    </div>
                <?php endwhile; ?> 

                <?php query_posts('category_name=Home_Course_A_Book&showposts=1'); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="home_mid_box">

                        <div class="mid_box_img"><img src="<?php echo catch_that_image(); ?>" alt="Course A Book" width="228" height="160" /></div>
                        <div class="mid_tag"><?php the_title(); ?></div>
                        <div class="mid_box_text"><?php echo limit_words(get_the_excerpt(), '10'); ?><br />
                            <br />
                            <a href="<?php the_permalink(); ?>">More Learn </a></div>
                    </div>
                <?php endwhile; ?> 

            </div>
            <div class="home_bottom_section">
                <div class="news_section">



                    <div class="latest_news_heading">LatestNews</div>

                    <div class="post_outer">
                        <?php query_posts('category_name=latestnews&showposts=3'); ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="our_classes1">
                                <span class="heading_our_classes"><?php the_title(); ?></span>
                                <div>
                                    <p><?php echo get_post_meta($post->ID, 'price', true); ?></p>
                                    <p>Class Type : <?php single_cat_title('') ?></p>
                                    <p>Fees : </p>
                                    <?php the_content(); ?>
                                </div>

                            </div>



                        <?php endwhile; ?>  

                    </div>




                </div>
                <div class="testimonials_section"><div class="testimonials_heading">Testimonials</div>
                    <div class="testimonials_text">Lorem ipsum dolor sit amet adipiscing elit, sed diam nonummy nibh...<br />
                        <br />
                        <span style="font-size:12px;">Tim Abbott, Tasawr Interactive</span><br />
                        <br /><br />

                        Lorem ipsum dolor sit amet adipiscing elit, sed diam nonummy nibh...<br />
                        <br />
                        <span style="font-size:12px;">Tim Abbott, Tasawr Interactive</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer_wrapper">
                <div class="footer_left">© 2012 Mudarisah.com  |  All Rights Reserved</div>
                <div class="footer_right">Terms of Use | Privacy Policy</div>
            </div>
        </div>
        <div class="home_mid_content"></div>
    </body>
</html>