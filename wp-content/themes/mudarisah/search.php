<?php get_header(); ?>
<div class="inner_content">
    <div class="inner_content_right">
        <div class="inner_content_right">

            <h1>
                Search Listing                      
            </h1>

            <div class="post_outer">
                <?php $cnt = 0; ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php
                        $cnt++;
                        ?>
                        <div class="our_classes1" style=" <?php
                if ($cnt == 1) {
                    echo "margin-top: 0px;";
                }
                        ?> ">
                            <span class="heading_our_classes"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                            <div class="contain">
                                <?php the_excerpt(); ?> 
                            </div>               
                        </div>


                    <?php endwhile; ?>
                    <div class="navigation_pagination">
                        <?php wp_pagenavi(); ?>
                    </div>
                <?php else : ?>

                    <h2>No posts found.</h2>

                <?php endif; ?>   
            </div>

        </div>
    </div>
    <div class="inner_left">

        <?php get_sidebar(); ?>
    </div>
</div>
</div>
<?php get_footer(); ?>