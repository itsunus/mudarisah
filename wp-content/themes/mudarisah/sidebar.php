
<div class="inner_testimonials_area">
    <div class="inner_testimonials_text">
        <?php query_posts('category_name=Student_Speech&showposts=1'); ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php echo limit_words(get_the_excerpt(), '10'); ?>
        <br />
        <br />
        <span style="font-size:11px;"><?php echo get_post_meta($post->ID, 'student_name', true); ?></span>
        <?php endwhile; ?>
    </div>
    <div class="link_inner_testimonials">
        <?php
            $category_id = 18;
            $lang_code = substr(get_bloginfo('language'), 0, 2);
            $cat_link = get_category_link($category_id);
            ?> 
            <a class="std_saying" href="<?php echo $cat_link; ?>">See what our students are saying</a>
        
    </div>
</div>



<div class="inner_newsletter_area" style="margin-top:15px;">
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebardifault')) : ?>
    <?php endif; ?>
</div>

<div class="inner_newsletter_area" style="margin-top:15px; border:none;">
    <div class="inner_newsletter_heading"><?php _e('Connect with Us','mudarisah');?></div>
    <div class="inner_newsletter_field">
        <img src="<?php echo bloginfo("template_directory"); ?>/images/icon_linkedin.jpg" alt="LinkedIn" width="30" height="32" />
        <img src="<?php echo bloginfo("template_directory"); ?>/images/icon_twitter.jpg" alt="Twitter" width="30" height="32" style="margin-right:10px;" />
        <img src="<?php echo bloginfo("template_directory"); ?>/images/icon_facebook.jpg" alt="Facebook" width="30" height="32" style="margin-right:10px;" /></div>
</div>

