<?php get_header(); ?>
<div class="container">
<header role="banner">
   <div class="img-banner">
      <div class="inner-container">
         <h1>Vancouver Medical College</h1>
         <h2><i>"Love what you do and do what you love"</i></h2>
         <h3><i>Ray Bradbury</i></h3>
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
         
         <!-- Modal Content -->
         <form class="modal-content animate" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
         <input type="hidden" name="action" value="process_form">
         <span onclick="document.getElementById('id01').style.display='none'" 
            class="close" title="Close Modal">&times;</span>
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

      <?php 
            // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'movies', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
            <?php if ( $wpb_all_query->have_posts() ) : ?>
            
            
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
            <!-- end of the loop -->
            
            
            <?php wp_reset_postdata(); ?>
            
            <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
      </div>

      <?php 
            // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
            <?php if ( $wpb_all_query->have_posts() ) : ?>
            
            
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
            <!-- end of the loop -->
            
            
            <?php wp_reset_postdata(); ?>
            
            <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
   </div>




   <!-- div class 4 close -->
</div>
<!-- div row 2 end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<script src="<?php echo get_template_directory_uri();?>/js/viewportchecker.js"></script> 

</script>
<?php
 get_footer(); 
 ?>