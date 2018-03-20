<?php
// var_dump("here");
// include_once(ABSPATH .'wp-includes/user.php');
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)){
  global $wpdb; 
 $login_data = array();  
 var_dump($_POST["username"]);
 var_dump($_POST["password"]);
 $login_data['user_login'] = $_POST["username"];  
 $login_data['user_password'] = $_POST["password"];  
//  $login_data['remember'] = $remember;  
$user_verify = wp_signon( $login_data, false );  
//  $test = $wpdb->escape($_POST["username"]);
 var_dump($test);
 
 if ( is_wp_error($user_verify) )   
 {  
     echo "Invalid login details";  
    // Note, I have created a page called "Error" that is a child of the login page to handle errors. This can be anything, but it seemed a good way to me to handle errors.  
  } else
 {    
    echo "<script type='text/javascript'>window.location.href='". home_url() ."'</script>";  
    exit();  
  }  

} else 
{  

 // No login details entered - you should probably add some more user feedback here, but this does the bare minimum  

    echo "Invalid login details";  

}  
//  var_dump($user_verify);

?>