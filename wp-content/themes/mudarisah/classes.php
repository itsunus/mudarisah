<?php
/*

  Template Name: classes

 */
?>

<?php get_header(); ?>
<div class="inner_content">
    <div class="inner_content_right">
        <div class="inner_content_right">

            <?php
            $post_id = 167;
            $post = get_post($post_id);
            ?> 
            <div class="inner_content_top_heading"><span class="inner_main_heading"><?php echo $post->post_title; ?></span>
                <p><?php echo $post->post_content; ?></p>
            </div>

            <div class="post_outer">
                <?php 
                $i = 0;
                ?>
                <?php query_posts('cat=3&showposts=3'); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php 
                    $i++;
                    ?>
                <div class="our_classes1" style="<?php if($i == 1){echo "margin-top:30px;";}?>">
                        <span class="heading_our_classes"><?php the_title(); ?></span>
                        <p>
                            <span class="cls_lbl"><?php _e('Duration','mudarisah');?></span><span class="cls_cln">:</span><span class="cls_val"><?php echo get_post_meta($post->ID, 'duration', true); ?></span>
                        </p>
                        <p>
                            <span class="cls_lbl"><?php _e('Class Type','mudarisah');?></span><span class="cls_cln">:</span><span class="cls_val"><?php echo get_post_meta($post->ID, 'class_type', true); ?></span>
                        </p>
                        <p>
                            <span class="cls_lbl"><?php _e('Fees','mudarisah');?></span><span class="cls_cln">:</span><span class="cls_val"><?php echo get_post_meta($post->ID, 'fees', true); ?></span>
                        </p>
                        <div>
                            <?php the_content(); ?>
                        </div>


                    </div>



                <?php endwhile; ?>  

            </div> 





        </div>
    </div>
    <div class="inner_left">
        <?php get_sidebar(); ?>
    </div>
</div>
</div>
<?php get_footer(); ?>