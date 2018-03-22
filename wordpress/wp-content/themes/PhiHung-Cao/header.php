<!-- Begin page header -->
<HTML>
<HEAD>
    <meta charset="UTF-8">
    <title>Vancouver Meidical College</title>
    <link rel="stylesheet" href= "<?php echo get_template_directory_uri();?>/style.css">
    <link rel="stylesheet" href= "<?php echo get_template_directory_uri();?>/css/animation.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/loginmodal.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/aria-menu.js"></script>
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