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
    <?php wp_nav_menu( array('menu' => 'footer_menu' )); ?>
</div>
</div>
</div>

<?php wp_footer();?>
</body>
</html>