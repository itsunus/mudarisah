<?php
/*

	Template Name: Home Page no title


*/
?>
<?php get_header();?>
		<div class="content" style=" margin-top:5px;">
            <div class="page_full__pages">
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	<div class="post_outer_pag_ess">
                    <div class="page">
                        <h1 class="page_title"></h1>

                        <div class="discription">
							<?php the_content(); ?>                   
                        </div>
                    </div>
                 </div>
                 
				<?php endwhile; endif; ?>
                 
                 
         

            </div>
            
        </div>
<?php get_footer();?>