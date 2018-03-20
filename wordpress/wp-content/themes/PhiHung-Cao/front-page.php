<?php

 get_header(); 
 $service_page = get_page_by_title( 'Services' );
 $staff_page = get_page_by_title( 'Our Staff' );
 $mission_page = get_page_by_title( 'Mission' );
?>
<div class="container">
<header role="banner">
   <div class="img-banner">
      <div class="inner-container">
         <h1>Vancouver Medical College</h1>
         <h2>Love what you do and do what you love</h2>
         <h3>Ray Bradbury</h3>
      </div>
   </div>
</header>
<div class="row">
   <!-- div class 2 close -->
   <div class="four">
      <!-- <h1>Vancouver Medical College</h1> -->
      <hr >
      <!-- The Modal -->
      <div id="id01" class="modal">
         <span onclick="document.getElementById('id01').style.display='none'" 
            class="close" title="Close Modal">&times;</span>
         <!-- Modal Content -->
         <form class="modal-content animate" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
         <input type="hidden" name="action" value="process_form">
            <div class="imgcontainer">
               <img src="<?php echo get_template_directory_uri();?>/img/img_avatar2.png" alt="Avatar" class="avatar">
            </div>
            <div style="padding: 16px;">
               <label for="uname"><b>Username</b></label>
               <input type="text" placeholder="Enter Username" name="username" required>
               <label for="psw"><b>Password</b></label>
               <input type="password" placeholder="Enter Password" name="password" required>
               <button type="submit">Login</button>
            </div>
         </form>
      </div>
      <div class="slideshow-container" id="home">
         <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="<?php echo get_template_directory_uri();?>/img/img_nature_wide.jpg" style="width:100%">
            <div class="text">Caption Text</div>
         </div>
         <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="<?php echo get_template_directory_uri();?>/img/img_fjords_wide.jpg" style="width:100%">
            <div class="text">Caption Two</div>
         </div>
         <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="<?php echo get_template_directory_uri();?>/img/img_mountains_wide.jpg" style="width:100%">
            <div class="text">Caption Three</div>
         </div>
      </div>
      <br>
      <div style="text-align:center">
         <span class="dot"></span> 
         <span class="dot"></span> 
         <span class="dot"></span> 
      </div>
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