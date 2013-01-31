<?php
/*

  Template Name: classes

 */
?>

<?php get_header(); ?>
<div class="inner_content">
    <div class="inner_content_right">
        <div class="inner_content_right">


            <div class="inner_content_top_heading"><span class="inner_main_heading">Our Classes</span><br />
                <br />
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat... </div>

            <div class="post_outer">
                <?php query_posts('category_name=Our_Classes&showposts=3'); ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="our_classes1">
                        <span class="heading_our_classes"><?php the_title(); ?></span>
                        <p>
                        <span>Duration :</span><span><?php echo get_post_meta($post->ID, 'duration', true); ?></span>
                        </p>
                        <p>
                        <span>Class Type : <?php echo get_post_meta($post->ID, 'class_type', true); ?></span>
                        </p>
                        <p>
                        <span>Fees : <?php echo get_post_meta($post->ID, 'fees', true); ?></span>
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