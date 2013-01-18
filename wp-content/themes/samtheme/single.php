<?php get_header(); the_post(); ?>
		<div class="content" style="margin-top:5px;">
            <div class="content_post_area">
            	<div class="post_outer">
                    <div class="post_single"> 	
                        
                        <h1 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                        <div class="date_comment">
                            <p class="coment_place"><?php comments_popup_link('O Comments', '1 Comment &#187;', '% Comments &#187;'); ?></p>
                            <h5 class="date"> <?php the_time('jS F, Y') ?></h5>                        
                         </div>

                        <div class="discription">
							<?php the_content(); ?>                    
                        </div>
                        <p class="catagorys">Posted : <?php the_category(', ') ?> </p>
                        
                    </div>
                 </div>
                
            	<div class="comment_post_area">
            	<div class="comments_outer">
                    <div class="post_singless"> 	
                        <div class="comments_place">
                        	<?php comments_template(); ?>
                        </div>
                    </div>
                 </div>
                 
                 


            </div>
                 


            </div>
            <div class="sidebar_area">
				<?php get_sidebar();?>
            </div>
        </div>
<?php get_footer();?>