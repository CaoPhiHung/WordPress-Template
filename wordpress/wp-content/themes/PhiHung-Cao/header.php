<!-- Begin page header -->
<HTML>
<HEAD>
    <meta charset="UTF-8">
    <title>Vancouver Meidical College</title>
    <link rel="stylesheet" href= "<?php echo get_template_directory_uri();?>/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/demo.css"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</HEAD>

<BODY>
    <header>
        <!-- using containt id for this(change) -->
        <div style="position: fixed; width:100%; z-index: 1999;">
            
            <div class="topnav" id="myTopnav"  style="postion: fixed;">
            <a aria-expanded="false" href="#" id="buttonExpand" class="icon" onclick="toggle('navbar','buttonExpand')">&#9776;</a>
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'header_menu',
                    'menu_class' => 'topnav',
                    'menu_id' => 'navbar'
                ) );
            ?>
            
            </div>
        </div>
    </header>