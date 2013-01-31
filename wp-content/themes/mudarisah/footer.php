<div class="footer">
<div class="footer_wrapper">
<div class="footer_left">
                <?php query_posts('p=113');          
            if (have_posts()) : the_post();
                ?>
                    <?php the_content(); ?>
                
            <?php endif; ?>
    
</div>
<div class="footer_right">
    <a href="<?php echo get_bloginfo('url');?>/?page_id=111">Terms of Use |</a>
    <a href="<?php echo get_bloginfo('url');?>/?page_id=13">Privacy Policy</a>
     
</div>
</div>
</div>

<?php wp_footer();?>
</body>
</html>