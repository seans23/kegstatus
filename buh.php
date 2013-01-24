<?php
/**
 * The template for displaying front page pages.
 *
 */
?>
<?php get_header(); ?>  
         <div class="clear"></div>
     <!--Start Slider Wrapper-->
       <div class="slider-wrapper">            
            <div class="flexslider">
                            <ul class="slides">
               <!--Start Slider-->
     <?php
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $mystring1 = inkthemes_get_option('inkthemes_slideimage1');
            $value_img = array('.jpg', '.png','.jpeg','.gif','.bmp','.tiff','.tif');
            $check_img_ofset = 0;
             foreach($value_img as $get_value)
             {
             if (preg_match("/$get_value/", $mystring1))
             {
            $check_img_ofset = 1;
             }
             }   
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
           ?>
       <?php if($check_img_ofset == 0 && inkthemes_get_option('inkthemes_slideimage1') !='') { ?>
            <li><?php echo inkthemes_get_option('inkthemes_slideimage1'); ?></li>
       <?php } else { ?>  
                  <li>  <?php if ( inkthemes_get_option('inkthemes_slideimage1') !='' ) {  ?>
        <img  src="<?php echo inkthemes_get_option('inkthemes_slideimage1'); ?>" alt=""/>
        <?php }  else {  ?>
        <img  src="<?php echo get_template_directory_uri(); ?>/images/slider1.png" alt=""/>
        <?php } ?>
                     <div class="flex-caption">
           <?php if ( inkthemes_get_option('inkthemes_sliderheading1') !='' ) {  ?>
           
                      <h1><a href="<?php if ( inkthemes_get_option('inkthemes_Sliderlink1') !='' ) { echo inkthemes_get_option('inkthemes_Sliderlink1'); } ?>"><?php echo stripslashes(inkthemes_get_option('inkthemes_sliderheading1')); ?></a></h1>
             <?php }  else {  ?>
          <h1><a href="#">Black Bird Theme</a></h1>
          <?php } ?>
       <?php if ( inkthemes_get_option('inkthemes_sliderdes1') !='' ) {  ?>
            <p>            
             <?php echo stripslashes(inkthemes_get_option('inkthemes_sliderdes1')); ?>
            </p>
             <?php }  else {  ?>
                        <p>Premium WordPress Themes with Single Click Installation, Just a Click and your website is ready for use. </p>
              <?php } ?>             
                     </div>
                  </li>
          <?php } ?>
           <!--End Slider-->
            <?php
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $mystring2 = inkthemes_get_option('inkthemes_slideimage2');
            $check_img_ofset=0;
             foreach($value_img as $get_value)
             {
             if (preg_match("/$get_value/", $mystring2))
             {
            $check_img_ofset=1;
             }
             }   
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
           ?>
        <?php if($check_img_ofset==0 && inkthemes_get_option('inkthemes_slideimage2') !='') { ?>
            <li><?php echo inkthemes_get_option('inkthemes_slideimage2'); ?></li>
       <?php } else { ?>  
      <?php if ( inkthemes_get_option('inkthemes_slideimage2') !='' ) {  ?>
                  <li>  <?php if ( inkthemes_get_option('inkthemes_slideimage2') !='' ) {  ?>
        <img src="<?php echo inkthemes_get_option('inkthemes_slideimage2'); ?>" alt=""/>
        <?php }  else { } ?>
                     <div class="flex-caption">
                        <?php if ( inkthemes_get_option('inkthemes_sliderheading2') !='' ) {  ?>
          <h1><a href="<?php if ( inkthemes_get_option('inkthemes_Sliderlink2') !='' ) {  echo inkthemes_get_option('inkthemes_Sliderlink2'); } ?>"><?php echo stripslashes(inkthemes_get_option('inkthemes_sliderheading2')); ?></a></h1>
          <?php }  else {} ?>
          <?php if ( inkthemes_get_option('inkthemes_sliderdes2') !='' ) {  ?>
          <p>            
             <?php echo stripslashes(inkthemes_get_option('inkthemes_sliderdes2')); ?>
            </p>
          <?php } else { } ?>
                     </div>         
                  </li>
           <?php }} ?>
           <?php
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $mystring3 = inkthemes_get_option('inkthemes_slideimage3');
             $check_img_ofset=0;
             foreach($value_img as $get_value)
             {
             if (preg_match("/$get_value/", $mystring3))
             {
            $check_img_ofset=1;
             }
             }   
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
           ?>
       <?php if($check_img_ofset==0 && inkthemes_get_option('inkthemes_slideimage3') !='') { ?>
            <li><?php echo inkthemes_get_option('inkthemes_slideimage3'); ?></li>
       <?php } else { ?> 
      <?php if ( inkthemes_get_option('inkthemes_slideimage3') !='' ) {  ?>
           <li> <?php if ( inkthemes_get_option('inkthemes_slideimage3') !='' ) {  ?>
        <img  src="<?php echo inkthemes_get_option('inkthemes_slideimage3'); ?>" alt=""/>
        <?php } ?>
                     <div class="flex-caption">
                         <?php if ( inkthemes_get_option('inkthemes_sliderheading3') !='' ) {  ?>
          <h1><a href="<?php if ( inkthemes_get_option('inkthemes_Sliderlink3') !='' ) { echo inkthemes_get_option('inkthemes_Sliderlink3'); } ?>"><?php echo stripslashes(inkthemes_get_option('inkthemes_sliderheading3')); ?></a></h1>
          <?php } ?>
          <?php if ( inkthemes_get_option('inkthemes_sliderdes3') !='' ) {  ?>
          <p>            
            <?php echo stripslashes(inkthemes_get_option('inkthemes_sliderdes3')); ?>
            </p>
          <?php } ?>
                     </div>
                  </li>
            <?php }} ?>
            <!--Start Slider-->
      <?php
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $mystring4 = inkthemes_get_option('inkthemes_slideimage4');
            $check_img_ofset=0;
             foreach($value_img as $get_value)
             {
             if (preg_match("/$get_value/", $mystring4))
             {
            $check_img_ofset=1;
             }
             }   
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
           ?>
       <?php if($check_img_ofset==0 && inkthemes_get_option('inkthemes_slideimage4') !='') { ?>
            <li><?php echo inkthemes_get_option('inkthemes_slideimage4'); ?></li>
       <?php } else { ?>  
      <?php if ( inkthemes_get_option('inkthemes_slideimage4') !='' ) {  ?>
           <li> <?php if ( inkthemes_get_option('inkthemes_slideimage4') !='' ) {  ?>
        <img  src="<?php echo inkthemes_get_option('inkthemes_slideimage4'); ?>" alt=""/>
        <?php } ?>
                     <div class="flex-caption">
                         <?php if ( inkthemes_get_option('inkthemes_sliderheading4') !='' ) {  ?>
          <h1><a href="<?php if ( inkthemes_get_option('inkthemes_Sliderlink4') !='' ) { echo inkthemes_get_option('inkthemes_Sliderlink4'); } ?>"><?php echo stripslashes(inkthemes_get_option('inkthemes_sliderheading4')); ?></a></h1>
          <?php } ?>
          <?php if ( inkthemes_get_option('inkthemes_sliderdes4') !='' ) {  ?>
        <p>            
           <?php echo stripslashes(inkthemes_get_option('inkthemes_sliderdes4')); ?>
            </p>
          <?php } ?>
                     </div>
                  </li>
          <?php }} ?>
               </ul>
            </div>
         </div>
         <!--End Silder Wrapper-->
         <div class="clear"></div>
         <div class="seprator"></div>
         <div class="content">
      <?php if ( inkthemes_get_option('inkthemes_mainheading') !='' ) {  ?>
      <h1><?php echo stripslashes(inkthemes_get_option('inkthemes_mainheading')); ?></h1>
      <?php } else {  ?>
            <h1> Black Bird Theme is one of the easiest theme to built your website. It comes with a Themes Options Panel through .</h1>
       <?php } ?>
         </div>
         <div class="feature-content">
      <div class="circle-content">
            <div class="grid_8 alpha">
               <div class="feature-content-inner one">
           <?php if ( inkthemes_get_option('inkthemes_wimg1') !='' ) {  ?>
         <div class="circle"><img src="<?php echo inkthemes_get_option('inkthemes_wimg1'); ?>" /></div>
         <?php } else {  ?>
         <div class="circle"><img src="<?php echo get_template_directory_uri(); ?>/images/img1.png" /></div>
          <?php } ?>
                   <?php if ( inkthemes_get_option('inkthemes_headline1') !='' ) {  ?><h1><a href="<?php if ( inkthemes_get_option('inkthemes_link1') !='' ) { echo inkthemes_get_option('inkthemes_link1'); } ?>"><?php echo stripslashes(inkthemes_get_option('inkthemes_headline1')); ?></a></h1>
          <?php } else {  ?> <h1><a href="#">All Themes Design</a></h1>
       <?php } ?>
       <?php if ( inkthemes_get_option('inkthemes_feature1') !='' ) {  ?>
          <p><?php echo stripslashes(inkthemes_get_option('inkthemes_feature1')); ?></p>
       <?php } else { ?>
                  <p>You will definitely love the Theme. The speciality of the Theme is the easiness through which you can get the site ready for yourself or your client. </p>
           <?php } ?>
                  <a class="read-more" href="<?php if ( inkthemes_get_option('inkthemes_link1') !='' ) { echo inkthemes_get_option('inkthemes_link1'); } ?>">Read More</a> </div>
            </div>
            <div class="grid_8">
               <div class="feature-content-inner two">
           <?php if ( inkthemes_get_option('inkthemes_fimg2') !='' ) {  ?>
         <div class="circle"><img src="<?php echo inkthemes_get_option('inkthemes_fimg2'); ?>" /></div>
         <?php } else {  ?>
         <div class="circle"><img src="<?php echo get_template_directory_uri(); ?>/images/img2.png" /></div>
          <?php } ?>
                   <?php if ( inkthemes_get_option('inkthemes_headline2') !='' ) {  ?><h1><a href="<?php if ( inkthemes_get_option('inkthemes_link2') !='' ) { echo inkthemes_get_option('inkthemes_link2'); } ?>"><?php echo stripslashes(inkthemes_get_option('inkthemes_headline2')); ?></a></h1>
          <?php } else {  ?> <h1><a href="#">All Themes Design</a></h1>
       <?php } ?>
       <?php if ( inkthemes_get_option('inkthemes_feature2') !='' ) {  ?>
          <p><?php echo stripslashes(inkthemes_get_option('inkthemes_feature2')); ?></p>
       <?php } else { ?>
                  <p>You will definitely love the Theme. The speciality of the Theme is the easiness through which you can get the site ready for yourself or your client. </p>
           <?php } ?>
                  <a class="read-more" href="<?php if ( inkthemes_get_option('inkthemes_link2') !='' ) { echo inkthemes_get_option('inkthemes_link2'); } ?>">Read More</a> </div>
            </div>
            <div class=" grid_8 omega">
               <div class="feature-content-inner three">
           <?php if ( inkthemes_get_option('inkthemes_fimg3') !='' ) {  ?>
         <div class="circle"><img src="<?php echo inkthemes_get_option('inkthemes_fimg3'); ?>" /></div>
         <?php } else {  ?>
         <div class="circle"><img src="<?php echo get_template_directory_uri(); ?>/images/img3.png" /></div>
          <?php } ?>
                   <?php if ( inkthemes_get_option('inkthemes_headline3') !='' ) {  ?><h1><a href="<?php if ( inkthemes_get_option('inkthemes_link3') !='' ) { echo inkthemes_get_option('inkthemes_link3'); } ?>"><?php echo stripslashes(inkthemes_get_option('inkthemes_headline3')); ?></a></h1>
          <?php } else {  ?> <h1><a href="#">All Themes Design</a></h1>
       <?php } ?>
       <?php if ( inkthemes_get_option('inkthemes_feature3') !='' ) {  ?>
          <p><?php echo stripslashes(inkthemes_get_option('inkthemes_feature3')); ?></p>
       <?php } else { ?>
                  <p>You will definitely love the Theme. The speciality of the Theme is the easiness through which you can get the site ready for yourself or your client. </p>
           <?php } ?>
                  <a class="read-more" href="<?php if ( inkthemes_get_option('inkthemes_link3') !='' ) { echo inkthemes_get_option('inkthemes_link3'); } ?>">Read More</a> </div>
            </div>
      </div>
                </div>      
            <div class="clear"></div>
            <!--Start testimonial-->
          <?php
        $testimonial = inkthemes_get_option('inkthemes_testimonial_option');
        $testimonial_on = "on";
        if ($testimonial === $testimonial_on) {
            ?>
            <div class="testimonial">
      <?php if ( inkthemes_get_option('inkthemes_test_heading') !='' ) {  ?>
      <h1><span class="titlebg"><?php echo stripslashes(inkthemes_get_option('inkthemes_test_heading')); ?></span></h1>
      <?php } else {  ?>
               <h1><span class="titlebg">CLIENT TESTIMONIALS</span></h1>
           <?php } ?>
             <div id="slides_testimonial">
    <div class="slides_container">      
      <div class="slide">
        <div class="item">
         <?php if ( inkthemes_get_option('inkthemes_test1') !='' ) {  ?>
         <p><?php echo stripslashes(inkthemes_get_option('inkthemes_test1')); ?></p>
      <?php } else { ?>
          <p>Themia WordPress Theme is the right choice You will definitely love the Theme. The speciality of the Theme is the easiness through which you can get the site ready for yourself or your client. It saves time and a lot of hassles. If you need a website that will perfectly represent your business, choice for you. Working with Themia is very simple and intuitive, even a beginner can handle it.&nbsp;&nbsp;&nbsp; <b><i>By John Gonzalo</i></b>   </p>
           <?php } ?>
        </div>        
      </div>      
      <div class="slide">
        <div class="item">
         <?php if ( inkthemes_get_option('inkthemes_test2') !='' ) {  ?>
         <p><?php echo stripslashes(inkthemes_get_option('inkthemes_test2')); ?></p>
      <?php } else { ?>
          <p>The speciality of the Theme is the easiness You will definitely love the Theme. The speciality of the Theme is the easiness through which you can get the site ready for yourself or your client. It saves time and a lot of hassles. If you need a website that will perfectly represent your business, for you. Working with Themia is very simple and intuitive, even a beginner can handle it. &nbsp;&nbsp;&nbsp;<b><i>By Endy Dolfin</i></b></p>
           <?php } ?>
        </div>
      </div>      
      <div class="slide">
        <div class="item">
          <?php if ( inkthemes_get_option('inkthemes_test3') !='' ) {  ?>
         <p><?php echo stripslashes(inkthemes_get_option('inkthemes_test3')); ?></p>
      <?php } else { ?>
          <p>You will definitely love the Theme. The speciality of the Theme is the easiness through which you can get the site ready for yourself or your client. It saves time and a lot of hassles. If you need a website that will perfectly represent your business, Themia WordPress Theme is the right choice for you. Working with Themia is very simple and intuitive, even a beginner can handle it.&nbsp;&nbsp;&nbsp;<b><i>By James Kelvin</i></b></p>
          <?php } ?>
        </div>
      </div>
      <?php if ( inkthemes_get_option('inkthemes_test4') !='' ) {  ?>
      <div class="slide">
        <div class="item">
          <?php if ( inkthemes_get_option('inkthemes_test4') !='' ) {  ?>
         <p><?php echo stripslashes(inkthemes_get_option('inkthemes_test4')); ?></p>
      <?php } else { } ?>
        </div>
      </div>  
      <?php } ?>
      <?php if ( inkthemes_get_option('inkthemes_test5') !='' ) {  ?>
      <div class="slide">
        <div class="item">
          <?php if ( inkthemes_get_option('inkthemes_test5') !='' ) {  ?>
         <p><?php echo stripslashes(inkthemes_get_option('inkthemes_test5')); ?></p>
      <?php } else { } ?>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
    </div> 
     <?php } else {
        } ?>
            <!--End testimonial-->
            <div class="clear"></div>
            <!--Start news in blog-->
       <?php
        $home_page_blog = inkthemes_get_option('inkthemes_home_blog_option');
        $home_page_blog_on = "on";
        if ($home_page_blog === $home_page_blog_on) {
            ?>
            <div class="feature-post">
      <?php if ( inkthemes_get_option('inkthemes_blog_heading') !='' ) {  ?>
      <h1><span class="titlebg"><?php echo stripslashes(inkthemes_get_option('inkthemes_blog_heading')); ?></span></h1>
      <?php } else {  ?>
               <h1><span class="titlebg">NEWS IN BLOG</span></h1>
         <?php } ?>
          </div>
      
            <!--End news in blog-->
            <div class="clear"></div>
            <!--Start Signup-->
       <?php
        $sign_up_section = inkthemes_get_option('inkthemes_sign_up_option');
        $sign_up_section_on = "on";
        if ($sign_up_section === $sign_up_section_on) {
            ?>
            <div class="signup">
      <?php if ( inkthemes_get_option('inkthemes_signup_heading') !='' ) { ?>
      <h1><span class="titlebg"><?php echo stripslashes(inkthemes_get_option('inkthemes_signup_heading')); ?></span></h1>
      <?php } else {  ?>
               <h1><span class="titlebg">SIGN UP FOR NEWSLETTER</span></h1>
         <?php } ?>
               <div class="signuparea">
                  <div class="signuparea-top"></div>
                  <div class="signup-content">
          <?php if ( inkthemes_get_option('inkthemes_blockquote_desc') !='' ) {  ?>
           <div class="signupinfo"><?php echo stripslashes(inkthemes_get_option('inkthemes_blockquote_desc')); ?></div>
      <?php } else { ?>
                     <div class="signupinfo">Premium WordPress Themes with Single Click Installation, Just a Click and your website is ready for use. Your Site is faster to built</div>
           <?php } ?>
                     <div class="signuplogin">
          <?php
$emailError = '';
if (isset($_POST['submitted'])) {
    if (trim($_POST['email']) === '') {
        $emailError = 'Please enter your email address.';
        $hasError = true;
    } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
        $emailError = 'invalid email.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
    if (!isset($hasError)) {
        $emailTo = get_option('tz_email');
        if (!isset($emailTo) || ($emailTo == '')) {
            $emailTo = get_option('admin_email');
        }
        $subject = 'Black Bird Theme Front Page Newslatter Submission From ' . $name;
        $body = "Email: $email";
        $headers = 'From: ' . $name . ' <' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $email;
        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;    }
}
?>
      <?php
      $args = array(
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'caller_get_posts' => 1,
      'order' => 'DESC'
      );
      $query = new WP_Query($args); 
      $count=0;

      ?>
        
      <?php while ($query->have_posts()) : $query->the_post(); ?>
      <?php
      $content = $post->post_content;
      $searchimages = '~<img [^>]* />~';
      /*Run preg_match_all to grab all the images and save the results in $pics*/
      preg_match_all( $searchimages, $content, $pics );
      // Check to see if we have at least 1 image
      $iNumberOfPics = count($pics[0]);
      if ($iNumberOfPics == 0) {
        $pics[0][0] = '<img src="http://mothership.hackermoms.org/wp-content/uploads/2013/01/kali_165x130.png" />';
      }

      ?>
               <div class="feature-box">
                  <div class="feature-post-inner"> <a href="<?php the_permalink() ?>"><?php 
      if (has_post_thumbnail() ) {
       inkthemes_get_thumbnail(165, 130); 
      }
      else {
       inkthemes_get_image(165,130);
      }
?> </a> 
                     <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                <?php
                                $tit = the_title('', '', FALSE);
                                echo substr($tit, 0, 25);
                                if (strlen($tit) > 25)
                                    echo "...";
                                ?>
                            </a></h1>
                     <?php echo inkthemes_custom_trim_excerpt(15); ?>
                  </div>
               </div>
        <?php
      
      
    endwhile;
    }
    ?>
                            <?php
                            // Reset Query
                            wp_reset_query();
                            ?>
  
                               <form action="<?php get_template_directory(); ?>" id="contactForm1" class="signupform" method="post">   
               <input onfocus="if (this.value == 'e-mail address') {this.value = '';}" onblur="if (this.value == '') {this.value = 'e-mail address';}" name="email" value="e-mail address" type="text" value="<?php if (isset($_POST['email']))
                             echo $_POST['email']; ?>" id="email" />
                <input type="submit" value="Sign Up" name="submit"/>
                <input type="hidden" name="submitted" id="submitted" value="true" />
     <?php if ($emailError != '') { ?>
                                                             <br/>
      <span class="error"> <?php echo $emailError; ?> </span>
                                                               <?php } ?>
            </form>
            
                     </div>
                  </div>
                  <div class="signuparea-bottom"></div>
               </div>
          </div>
         <?php } else {
            
        } ?>           
             <!--End Signup-->
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>