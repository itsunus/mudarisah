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

                        <?php query_posts('category_name=Home_Slider&showposts=20'); ?>
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
        <div class="latest_news_heading">Latest News</div>

        <?php $i = 0; ?>
        <?php query_posts('category_name=latestnews&showposts=2'); ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php $i++; ?>
            <div class="news_item1" <?php if ($i == 2) echo "style='border:none;'"; ?>>
                <span>
                    <?php echo limit_words(get_the_excerpt(), '20'); ?>
                </span>
                <a style="float:none;" href="<?php the_permalink(); ?>">Read More</a>
                <?php the_date('Y-m-d', '<h2>', '</h2>'); ?>
            </div>

        <?php endwhile; ?>  
        <div class="news_item1" style="border:none;">
            <?php
            $category_id = 5;
            $lang_code = substr(get_bloginfo('language'), 0, 2);
            $cat_link = get_category_link($category_id) . "&lang=" . $lang_code;
            ?> 
            <a href="<?php echo $cat_link; ?>">View all news </a>
        </div>

    </div>
    <div class="testimonials_section">
        <div class="testimonials_heading">Testimonials</div>
        <div class="testimonials_text">
            <?php query_posts('category_name=Testimonials&showposts=2'); ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="testi_speech">
                    <?php echo limit_words(get_the_excerpt(), '20'); ?>
                </div>
                <div class="testi_speaker">
                    <span style="font-size:12px;"><?php echo get_post_meta($post->ID, 'speech_owner', true); ?></span>
                </div>
            <?php endwhile; ?>  

            <div class="news_item1" style="border:none;">
                <?php
                $category_id = 9;
                $lang_code = substr(get_bloginfo('language'), 0, 2);
                $cat_link = get_category_link($category_id) . "&lang=" . $lang_code;
                ?> 
                <a href="<?php echo $cat_link; ?>">View all testimonials </a>
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

            <a href="http://localhost/mudarisah/?page_id=111">Terms of Use |</a>
            <a href="http://localhost/mudarisah/?page_id=13">Privacy Policy</a>
        </div>
    </div>
</div>
<div class="home_mid_content"></div>
</body>
</html>