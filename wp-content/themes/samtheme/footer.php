         	<div class="footer">
            	<div class="social_areass">
                    <div class="all_icon">
                        <a class="fbook" href="#"></a>
                        <a class="twitter" href="#"></a>
                        <a class="youtube" href="#"></a>
                        <a class="pinterest" href="#"></a>
                        <a class="gplus" href="#"></a>
                    
                    </div>

                </div>
                
                
         		<div class="footer_logo">
            		<h2></h2>
                    <ul>
                    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footerwidget') ) : ?>
    				    <?php endif; ?>
                    </ul>
                    <ul>
                    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footerwidgetwo') ) : ?>
    				    <?php endif; ?>
                    </ul>
                    <ul>
                    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footerwidgethree') ) : ?>
    				    <?php endif; ?>
                    </ul>
                    <ul>
                    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footerwidgetfour') ) : ?>
    				    <?php endif; ?>
                    </ul>
            	</div>
                
                
          	</div>
            <div class="policy_area">
            <p style="text-align:center;">
            	<a style="margin-right:20px; text-decoration:none; font-size:14px;" href="#">&copy; 2012 WebName , All Right Reserved</a> <a style="text-decoration:none; font-size:14px;" href="#">Terms and Conditions</a>
                </p>
            </div>
            
         </div>
    </div>
</div>
<?php wp_footer();?>
</body>
</html>