<?php
 get_header(); 
?>

<div class="container">
<div class="row"></div>
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
<div class="four">
   <!-- <h1>Vancouver Medical College</h1> -->
   <hr >
   <!-- The Modal -->
   <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" 
         class="close" title="Close Modal">&times;</span>
      <!-- Modal Content -->
      <form class="modal-content animate" action="/action_page.php">
         <div class="imgcontainer">
            <img src="<?php echo get_template_directory_uri();?>/img/img_avatar2.png" alt="Avatar" class="avatar">
         </div>
         <div style="padding: 16px;">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
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
   <p>What is Lorem Ipsum?
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
      standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
      a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
      remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
      Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
      of Lorem Ipsum.
   </p>
   <div class="page" id="mission">
      <div class="content container">
         <h2>Our Mission</h2>
         <div class="row">
            <p>What is Lorem Ipsum?
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
               standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
               a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
               Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
               of Lorem Ipsum.
            </p>
         </div>
         <!-- row -->
      </div>
      <!-- content container -->
   </div>
   <!-- mission page -->
   <p>What is Lorem Ipsum?
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
      standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
      a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
      remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
      Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
      of Lorem Ipsum.
   </p>
   <div class="page" id="staff">
      <div class="container-fluid">
         <h2 id="ourstaff">Our Staff</h2>
         <div class="row">
            <p>What is Lorem Ipsum?
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
               standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
               a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
               Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
               of Lorem Ipsum.
            </p>
            <p>What is Lorem Ipsum?
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
               standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
               a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
               Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
               of Lorem Ipsum.
            </p>
         </div>
         <!-- outer row -->
      </div>
      <!-- container -->
   </div>
   <!-- staff page -->
   <div class="page" id="services">
      <div class="content container">
         <h2>Services</h2>
         <div class="row">
            <p>What is Lorem Ipsum?
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
               standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
               a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
               Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
               of Lorem Ipsum.
            </p>
            <p>What is Lorem Ipsum?
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
               standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
               a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
               Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
               of Lorem Ipsum.
            </p>
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