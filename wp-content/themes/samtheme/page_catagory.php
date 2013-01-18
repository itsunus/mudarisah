<?php
/*
	Template Name: Catagory + Archive + Tag
*/
?>
<?php get_header();?>
<div class="warp">
	<div class="inwarp">
		<div class="content">
            <div class="content_post_area">
            	<div class="post_outer">
                    <div class="page">
                        <h1 class="page_title"></h1>

                        <div class="discription">
                        	<div class="all_item">
                            	<div class="cata_gory">
                             	<h1>Categories</h1>
        							<ul>
    	   								<?php wp_list_categories('show_count=1&title_li='); ?>
        							</ul>
                            </div>
                            	<div class="archi_ves">
                            	<h1>Monthly Archives&nbsp;</h1>
    								<ul>
										<?php $args = array(
											'type'            => 'monthly',
											'limit'           =>50000,
											'format'          => 'html', 
											'before'          =>'&nbsp;',
											'after'           =>'&nbsp;',
											'show_post_count' => true,
											'echo'            => 1
                                        ); ?> 
                                        <?php wp_get_archives( $args ); ?> 
                                       
    								</ul>
                                    

                                    
                                    
                            </div> 
                            </div>  
                            <div class="ta_g">
                            	<h1>popular tags</h1>
                            	<ul>
                                                                
									<?php $args = array(
										'smallest'                  => 16, 
										'largest'                   => 22,
										'unit'                      => 'pt', 
										'number'                    => 45,  
										'format'                    => 'flat',
										'separator'                 => '&nbsp;&nbsp;',
										'orderby'                   => 'name', 
										'order'                     => 'ASC',
										'exclude'                   => null, 
										'include'                   => null, 
										'topic_count_text_callback' => default_topic_count_text,
										'link'                      => 'view', 
										'taxonomy'                  => 'post_tag', 
										'echo'                      => true );
									 ?>
                                    
                                    
                                    <?php wp_tag_cloud( $args ); ?> 
      
                                
                                
                                
                                </ul>
                                
                                
                                
    
                                
                            </div>                
                        </div>
                    </div>
                 </div>   
                <div class="post_outer_color">
                    <div class="page_color">
                        <div class="post_show"> 
                        	<h1>THE LAST 30 POSTS</h1>                           
							<?php
                            $args = array( 'numberposts' => 20, 'order'=> 'DESC', 'orderby' => 'title' );
                            $postslist = get_posts( $args );
                            foreach ($postslist as $post) :  setup_postdata($post); ?> 
                                <div>
                                    
                                    <br />
                                    <ul class="show_post_twenty">
                                    	<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                                        <li>- <?php the_date(); ?></li>
                                        <li>- <?php comments_number('O Comments ', '1 Comment &#187;', '% Comments &#187;'); ?></li>
                                    </ul>  
                                    
                                </div>
                            <?php endforeach; ?>                     
           
                        </div>
                    </div>
                 </div>
            </div>
            
            <div class="sidebar_area">
				<?php get_sidebar();?>
            </div>
        </div>
	</div>
</div>
<?php get_footer();?>