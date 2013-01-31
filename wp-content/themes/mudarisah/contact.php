<?php
/*

  Template Name: Contact Us

 */
?>

<?php get_header(); ?>
<div class="inner_content">
    <div class="inner_content_right">
        <div class="inner_content_right">
            <span class="inner_main_heading">How may we help you?</span>
            <br />
            <br />
            <?php
            $locale = substr(get_bloginfo('language'), 0, 2);
            if ($locale == "en") {
                $align = "left;";
                $btn_align = "right";
            } else {
                $align = "right";
                $btn_align = "right";
            }
            ?>

            <script type="text/javascript">

                $(document).ready(function() {
	
                    $("#btnsubmit").click(function(){
  
                        var er=validate_form();		
                        if (er==0)
                        {
                            return true;
                        }
                        else 
                        {
                            return false;
                        }	
	
                    });
                });

                function validate_form()
                {
                    var error = 0;

                    var fields = new Array('name','email','phone','country','message');
	
                    for(i=0;i<=fields.length;i++)
                    {
                        var field = $("#"+fields[i]);
                        if(field.val()=='')
                        {
                            field.next().html(field.attr('alt'))	;
                            field.parent().addClass('errored');
                            error=1;
                        }
                        else 
                        {
                            field.parent().removeClass('errored');
                            field.next().html("");
			
                            if(field.attr('id') == 'email')
                            {							
                                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;							
                                if(reg.test(field.val()) == false)
                                {
                                    field.next().html('Invalid Email Address');
                                    field.parent().addClass('errored');
                                    error=1;
                                }
                            }	
                        }
                    }
	
                    return error;	
	
                }

            </script>	

            <?php
            if (isset($_POST["contact_submit"])) {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $country = $_POST["country"];
                $message = $_POST["message"];

                // multiple recipients
                $to = 'info@mudarisah.com'; // note the comma
                // subject
                $subject = 'Visitor Message';

                // message
                $message = '
                <html>
                <head>
                  <title>Here are the message details:</title>
                </head>
                <body>
                  <table>

                    <tr>
                      <td><b>Name:</b></td><td>'.$name.'</td>
                    </tr>
                    tr>
                      <td><b>Email:</b></td><td>'.$email.'</td>
                    </tr>
                    
                    <tr>
                      <td><b>Phone:</b></td><td>'.$phone.'</td>
                    </tr>
                    <tr>
                      <td><b>Country:</b></td><td>'.$country.'</td>
                    </tr>
                    
                    <tr>
                      <td><b>Message:</b></td><td>'.$message.'</td>
                    </tr>
                    

                  </table>
                </body>
                </html>
                ';
                // To send HTML mail, the Content-type header must be set
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                mail($to, $subject, $message, $headers);
                ?>

                <p>Your message sent successfully. We'll reply you soon. Thank you.</p>
                <?php
            }
            ?>

            <form class="wpcf7-form" method="post" action="#">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="<?php echo $align; ?>">E-mail</td>
                        <td align="<?php echo $align; ?>">Name</td>
                    </tr>
                    <tr>
                        <td align="<?php echo $align; ?>">
                            <input type="text" name="email" id="email" alt="Enter email address" style="width:305px; height:29px;" />
                            <span class="error"></span>
                        </td>
                        <td align="<?php echo $align; ?>">
                            <input type="text" name="name" id="name" alt="Enter your name" style="width:305px; height:29px;" />
                            <span class="error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td align="<?php echo $align; ?>" style="padding-top:25px;">Country</td>
                        <td align="<?php echo $align; ?>" style="padding-top:25px;">Phone</td>
                    </tr>
                    <tr>
                        <td align="<?php echo $align; ?>">
                            <input type="text" name="country" id="country" alt="Enter your country" style="width:305px; height:29px;" />
                            <span class="error"></span>
                        </td>
                        <td align="<?php echo $align; ?>">
                            <input type="text" name="phone" id="phone" alt="Enter your phone" style="width:305px; height:29px;" />
                            <span class="error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="<?php echo $align; ?>" style="padding-top:25px;">Your Message</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="<?php echo $align; ?>">
                            <textarea name="message" id="message" cols="45" rows="5" alt="Enter your message" style="width:630px; resize: none;"></textarea>
                            <span class="error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="<?php echo $btn_align; ?>" style="padding-top:20px; padding-left:12px;">

                            <input value="Submit" name="contact_submit" id="btnsubmit" class="wpcf7-form-control  wpcf7-submit contact_submitBtn" type="submit">

                        </td>
                    </tr>
                </table>    
            </form>

        </div>
    </div>


    <div class="inner_left">
        <div class="inner_newsletter_area">
            <?php
            query_posts('p=106');
            if (have_posts()) : the_post();
                ?>
                <div class="inner_newsletter_heading"> Our Location</div>
                <div class="inner_newsletter_field" style="font-size:14px;">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="inner_newsletter_area" style="margin-top:15px; border:none;">
            <div class="inner_newsletter_heading"><?php the_title(); ?></div>
            <div class="inner_newsletter_field"><?php echo do_shortcode('[mappress mapid="1"]'); ?></div>
        </div>
    </div>   





</div>
</div>
<?php get_footer(); ?>