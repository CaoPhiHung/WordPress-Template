<?php

 get_header(); 
 $service_page = get_page_by_title( 'Our Program' );
 $staff_page = get_page_by_title( 'Our Staff' );
 $mission_page = get_page_by_title( 'Our Mission' );
 $about_us_page = get_page_by_title( 'About-us' );
?>
      <div class="page" id="about-us">
         <div class="pad-top">
            <div class="row">
               <?php echo apply_filters('the_content', $about_us_page->post_content); ?>
            </div>
            <!-- row -->
         </div>
         <!-- content container -->
      </div>
      <!-- end mission page -->
      <div class="page" id="mission">
         <div class="pad-top">
            <h2 class="content"><?php echo $mission_page->post_title; ?></h2>
            <div class="row">
               <?php echo apply_filters('the_content', $mission_page->post_content); ?>
            </div>
            <!-- row -->
         </div>
         <!-- content container -->
      </div>
      <!-- end mission page -->
      <div class="page" id="staff">
         <div class="pad-top">
            <h2 class="content"><?php echo $staff_page->post_title; ?></h2>
            <div class="row">
               <?php echo apply_filters('the_content', $staff_page->post_content); ?>
            </div>
            <!-- outer row -->
         </div>
         <!-- container -->
      </div>
      <!-- staff page -->
      <div class="page" id="services">
         <div class="pad-top">
            <h2 class="content"><?php echo $service_page->post_title; ?></h2>
            <div class="row">
               <?php echo apply_filters('the_content', $service_page->post_content); ?>
            </div>
            <!-- row -->   
         </div>
         <!-- content container -->
      </div>
      <!-- services page -->
</div>
   <!-- div class 4 close -->
</div>
<!-- div row 2 end -->
<?php
 get_footer(); 
 ?>