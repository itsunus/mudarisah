<?php get_header();?>
		<div class="content" style=" margin-top:5px;">
            <div class="post_outer_pagess">
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	<div class="post_outer_pag_ess">
                    <div class="page">
                        <h1 class="page_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

                        <div class="discription">
							<?php the_content(); ?>                   
                        </div>
                    </div>
                 </div>
                 
				<?php endwhile; endif; ?>
                 
                 
                 
               <!--  
                 
                <div class="post_outer">
                    <div class="post">
                    	<img src="<?php echo bloginfo("template_directory").'/images/product.jpg';?>" />
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
                 </div>
                <div class="post_outer">
                    <div class="post">
                    	<img src="<?php echo bloginfo("template_directory").'/images/product.jpg';?>" />
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
                 </div>
                <div class="post_outer">
                    <div class="post">
                    	<img src="<?php echo bloginfo("template_directory").'/images/product.jpg';?>" />
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
                 </div>
                <div class="post_outer">
                    <div class="post">
                    	<img src="<?php echo bloginfo("template_directory").'/images/product.jpg';?>" />
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
                 </div>
                <div class="post_outer">
                    <div class="post">
                    	<img src="<?php echo bloginfo("template_directory").'/images/back-to-school1-560x180.jpg';?>"/>
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
                 </div>
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