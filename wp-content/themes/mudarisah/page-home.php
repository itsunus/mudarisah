<?php get_header(); ?>


<div class="main_banner">
    <div class="main_banner_text">

        <?php
        query_posts('p=128');
        if (have_posts()) : the_post();
            ?>
            <div class="banner_text_heading">
                <?php the_title(); ?>
            </div>
            <div class="banner_lower_text">
                <?php the_content(); ?>
            </div>

        <?php endif; ?>
    </div>
    <div class="main_banner_area">
        <div id="header"><div class="wrap">
                <div id="slide-holder">
                    <div id="slide-runner">
                        <?php
                        $i = 0;
                        $js_string = "";
                        ?>

                        <?php query_posts('cat=17&showposts=20'); ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php
                            $i++;

                            $js_string .= '{"id":"slide-img-' . $i . '","client":"nature beauty","desc":"nature beauty photography"},';
                            ?>
                            <img src="<?php echo catch_that_image(); ?>" alt="" width="621" height="313" class="slide" id="slide-img-<?php echo $i; ?>" />

                        <?php endwhile; ?>

                        <div id="slide-controls">
                            <p id="slide-nav"></p>
                        </div>
                    </div>

                    <?php
                    $js_string = rtrim($js_string, ",");
                    ?>

                    <!--content featured gallery here -->
                </div>
                <script type="text/javascript">
                    if(!window.slider) var slider={};slider.data=[<?php echo $js_string; ?>];
                </script>
            </div></div>
    </div>
</div>
<div class="home_mid_section">


    <?php query_posts('p=36'); ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="home_mid_box" style="background:none;">

            <div class="mid_box_img" style="padding-bottom:4px;">
                <img src="<?php echo catch_that_image(); ?>" alt="Our Classes" width="193" height="158" />
            </div>
            <div class="mid_tag"><?php the_title(); ?></div>
            <div class="mid_box_text"><?php echo limit_words(get_the_excerpt(), '10'); ?><br />
                <br />
                <a href="<?php the_permalink(); ?>"><?php _e('Learn More','mudarisah');?></a></div>
        </div>
    <?php endwhile; ?>   

    <?php query_posts('p=49'); ?>
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

    <?php query_posts('p=54'); ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="home_mid_box">

            <div class="mid_box_img"><img src="<?php echo catch_that_image(); ?>" alt="Course A Book" width="228" height="160" /></div>
            <div class="mid_tag"><?php the_title(); ?></div>
            <div class="mid_box_text"><?php echo limit_words(get_the_excerpt(), '10'); ?><br />
                <br />
                <a href="<?php the_permalink(); ?>"><?php _e('Learn More','mudarisah');?></a></div>
        </div>
    <?php endwhile; ?> 

</div>
<div class="home_bottom_section">
    <div class="news_section">
        <div class="latest_news_heading"><?php _e('Latest News','mudarisah');?></div>

        <?php $i = 0; ?>
        <?php query_posts('cat=5&showposts=2'); ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php $i++; ?>
            <div class="news_item1" <?php if ($i == 2) echo "style='border:none; margin-bottom:0px;'"; ?>>
                <div class="fullRow">

                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <p>
                    <?php the_excerpt(); ?> 
                    </p>

                </div>
                <div class="fullRow">
                    <?php the_time('F j, Y'); ?>
                </div>
            </div>

        <?php endwhile; ?>  
        <div class="fullRow mid_box_text" style="padding-bottom:35px; margin: 0px;">
            <?php
            $category_id = 5;
            $lang_code = substr(get_bloginfo('language'), 0, 2);
            $cat_link = get_category_link($category_id) . "&lang=" . $lang_code;
            ?>            
            <a href="<?php echo $cat_link; ?>"><?php _e('View all news','mudarisah');?></a>
            
        </div>

    </div>
    <div class="testimonials_section">
        <div class="testimonials_heading"><?php _e('Testimonials','mudarisah');?></div>
        <div class="testimonials_text">
            <?php query_posts('cat=9&showposts=2'); ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="testi_speech">
                    <?php echo limit_words(get_the_excerpt(), '20'); ?>
                </div>
                <div class="testi_speaker">
                    <span style="font-size:12px;"><?php echo get_post_meta($post->ID, 'speech_owner', true); ?></span>
                </div>
            <?php endwhile; ?>  


            <?php
            $category_id = 9;
            $lang_code = substr(get_bloginfo('language'), 0, 2);
            $cat_link = get_category_link($category_id) . "&lang=" . $lang_code;
            ?> 
            <div class="fullRow mid_box_text" style="margin:0px;">
                <a href="<?php echo $cat_link; ?>"><?php _e('View all testimonials','mudarisah');?></a>
            </div>


        </div>
    </div>
</div>
</div>
<div class="footer">
    <div class="footer_wrapper">
        <div class="footer_left">

            <?php
            query_posts('p=113');
            if (have_posts()) : the_post();
                ?>
                <?php the_content(); ?>

            <?php endif; ?>
        </div>
        <div class="footer_right">
            <?php wp_nav_menu( array('menu' => 'footer_menu' )); ?>
        </div>
    </div>
</div>
<div class="home_mid_content"></div>
</body>
</html>