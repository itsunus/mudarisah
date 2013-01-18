<?php get_header();?>
  <div class="inner_content">
  <div class="inner_content_right">
  <div class="inner_content_right">
  
  
  <div class="inner_content_top_heading"><span class="inner_main_heading">OurClasses</span><br />
<br />
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat... </div>

  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    
  
      <div class="inner_content_top_heading">
     
            <h1 class="inner_main_heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
            <div class="contain">
            	<p><?php echo get_post_meta($post->ID, 'duration', true); ?></p>
                <p><?php echo get_post_meta($post->ID, 'class_type', true); ?></p>
                <p> <?php echo get_post_meta($post->ID, 'fees', true); ?></p>
            	<?php the_content();?>
            </div>
            <?php // the_category(', ') ?>
        </div>
        
     
     <?php endwhile; ?>

        <div class="navigation_pagination">
            <div class="next-posts"><?php next_posts_link('&laquo; Olders Entries') ?></div>
           <div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
        </div>

	<?php else : ?>

    <h2>Not Found</h2>

    <?php endif; ?>    
        
        
        
        
        
  	</div>
  </div>
  <div class="inner_left">
	<?php get_sidebar();?>
  </div>
  </div>
  </div>
<?php get_footer();?>