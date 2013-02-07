<?php get_header(); ?>
<div class="inner_content">
    <div class="inner_content_right">
        <div class="inner_content_right">



            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="inner_content_top_heading">

                        <h1 class="inner_main_heading"><?php the_title(); ?></h1>
                        <div class="fullRow">
                            <?php
                            $local_timestamp = get_the_time('U');
                            $datetime = date("F j, Y, g:i A", $local_timestamp);
                            echo $datetime;
                            ?>

                        </div>
                        <div class="contain">
                            <?php the_content(); ?>
                        </div>

                    </div>


                <?php endwhile;
            endif; ?>    

        </div>
    </div>
    <div class="inner_left">

<?php get_sidebar(); ?>
    </div>
</div>
</div>
<?php get_footer(); ?>