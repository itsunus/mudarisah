<?php
/*

	Template Name: Contact Us 


*/
?>

<?php get_header();?>
  <div class="inner_content">
  <div class="inner_content_right">
  <div class="inner_content_right">
  
  
  

  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    
  
      <div class="inner_content_top_heading">
     
            <h1 class="inner_main_heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
            <div class="contain">
            	<?php the_content();?>
            </div>
            <?php // the_category(', ') ?>
        </div>
        
     
     <?php endwhile;  endif; ?>    
        
        
        
        
        
  	</div>
  </div>
  <div class="inner_left">
	 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('contact') ) : ?>
    <?php endif; ?>
  </div>
  </div>
  </div>
<?php get_footer();?>