<?php get_header(); the_post();?>
  <div class="inner_content">
  <div class="inner_content_right">
  <div class="inner_content_right">
  
      <div class="inner_content_top_heading">
      
      
            <h1 class="inner_main_heading"><?php the_title();?></h1>
            <div class="contain">
            	<?php the_content();?>
            </div>
            
        </div>
        

  	</div>
  </div>
  <div class="inner_left">
	<?php get_sidebar();?>
  </div>
  </div>
  </div>
<?php get_footer();?>