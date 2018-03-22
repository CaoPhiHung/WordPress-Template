<!-- Begin page header -->
<HTML>
<HEAD>
    <meta charset="UTF-8">
    <title>Vancouver Meidical College</title>
    <link rel="stylesheet" href= "<?php echo get_template_directory_uri();?>/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/loginmodal.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/aria-menu.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/validation.js"></script>
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/demo.css"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</HEAD>

<BODY>
    <header>
        <base href="<?php echo home_url(); ?>/">
        <!-- using containt id for this(change) -->
        <div class="container" style="position: fixed; width:98%; z-index: 1999; padding-top: 0px">
            
            <div class="topnav" id="myTopnav"  style="postion: fixed;">
            <a role="button" aria-expanded="false" href="#" id="buttonExpand" class="icon" onclick="toggle('navbar','buttonExpand')">&#9776;</a>
            <ul id="navbar">
         <li>
            <a href="<?php echo home_url(); ?>/#home">Home</a>
         </li>
         <li>
            <a href="<?php echo home_url(); ?>/#mission">Mission</a>
         </li>
         <li>
            <a href="<?php echo home_url(); ?>/#staff">Staff</a>
         </li>
         <li>
            <a href="<?php echo home_url(); ?>/#services">Service</a>
         </li>
         <li>
            <a href="<?php echo home_url(); ?>/all-posts">All Posts</a>
         </li>
         <?php
         if(is_user_logged_in()) {
             ?>
            <li style="float: right;">
            <span style="color: white;font-family: Arial, Helvetica, sans-serif;">Wellcome <strong><?php echo $_COOKIE['username'] ?></strong> <span>
            <a href="<?php echo wp_logout_url( home_url() );?>">Sign out</a>
            </li>
            <?php
         } else {
             ?>
            <li style="float: right;">
            <a id="signin" href="javascript:;" onclick="document.getElementById('id01').style.display='block'" >Sign In</a>
            </li>
            <?php
         }
         ?>
      </ul>
            </div>
        </div>
    </header>
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
         <form id="signinform" class="modal-content animate" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
         <input type="hidden" name="action" value="process_form">
         <button onclick="document.getElementById('id01').style.display='none'" 
            class="close" title="Close Modal" style="z-index: 3000; width: 4px; padding-right: 20px; height: 43px;
                  padding-left: 0px; padding-top: 0px; background-color: white;">&times;</button>
            <div class="imgcontainer">
               <img src="<?php echo get_template_directory_uri();?>/img/img_avatar2.png" alt="Avatar" class="avatar">
            </div>
            <div id="form-messages"></div>
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