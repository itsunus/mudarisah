<?php get_header();?>

		<div class="content">
            <div class="content_post_area_index">
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	<div class="post_outer">
                    <div class="post">
                        
                        <h1 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                        <div class="date_comment">
                            <p class="coment_place"><?php comments_popup_link('O Comments ', '1 Comment &#187;', '% Comments &#187;'); ?></p>
                            <h5 class="date"> <?php the_time('jS F, Y') ?></h5>                        
                         </div>

                        <div class="discription">
							<?php the_excerpt() ?>
                			<a href="<?php the_permalink(); ?>" class="Continue_Reading">Continue Reading</a>                   
                        </div>
                        <p class="catagorys">Posted : <?php the_category(', ') ?> </p>
                    </div>
                 </div>
                 
                <?php endwhile; ?>

				<div class="navigation_pagination">
					<div class="next-posts"><?php next_posts_link('&laquo; Olders Entries') ?></div>
					<div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
				</div>

				<?php else : ?>

				<h2>Not Found</h2>

				<?php endif; ?>
                 
                 
                 
               <!--  
                 
                <div class="post_outer">
                    <div class="post">
                    	<img src="<?php echo bloginfo("template_directory").'/images/back-to-school1-56a0x180.jpg';?>"/>
                        <p class="catagorys">skincare,</p>
                        <h1 class="title"><a href="#">Dazzle With Deborah Lippmann Dazzle With Deborah Lippmann</a></h1>
                        <div class="date_comment">
                            <p class="coment_place">No Comment</p>
                            <h5 class="date">28 August 2012</h5>                        
                         </div>

                        <div class="discription">
                     this is the first post.you can delet or edit.this is the first post.you can delet or edit.this is the first post.you can delet or edit.this is the first post.you can delet or edit.this is the first post.you can delet or edit.this is the first post.you can delet or edit.this is the first post.you can delet or edit.this is the first post.you can delet or edit.                   
                        </div>
                    </div>
                 </div>  -->


            </div>
           
            <div class="sidebar_area">
				<?php get_sidebar();?>
            </div>
        </div>

<?php get_footer();?>