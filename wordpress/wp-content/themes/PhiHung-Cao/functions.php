<?php

// function ajax_login_init(){

//     wp_register_script('ajax-login-script', get_template_directory_uri() . '/ajax-login-script.js', array('jquery') ); 
//     wp_enqueue_script('ajax-login-script');

//     wp_localize_script( 'ajax-login-script', 'ajax_login_object', array( 
//         'ajaxurl' => admin_url( 'admin-ajax.php' ),
//         'redirecturl' => home_url(),
//         'loadingmessage' => __('Sending user info, please wait...')
//     ));

//     // Enable the user with no privileges to run ajax_login() in AJAX
//     add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
// }

// // Execute the action only if the user isn't logged in
// if (!is_user_logged_in()) {
//     add_action('init', 'ajax_login_init');
// }

// function ajax_login(){

//     // First check the nonce, if it fails the function will break
//     check_ajax_referer( 'ajax-login-nonce', 'security' );

//     // Nonce is checked, get the POST data and sign user on


//     die();
// }
add_action( 'admin_post_nopriv_process_form', 'process_form_data' );
add_action( 'admin_post_process_form', 'process_form_data' );
function process_form_data() {
  // form processing code here
    $info = array();
    $info['user_login'] = $_POST['username'];
    $info['user_password'] = $_POST['password'];
    $info['remember'] = true;

    $user_signon = wp_signon( $info, false );
    // var_dump($user_signon);
    if ( is_wp_error($user_signon) ){
        echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
    } else {
        echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful, redirecting...')));
    }
    // var_dump(home_url());
    // wp_redirect( home_url() ); 

    // exit;
    setcookie( 'username', $_POST['username'], time() + 3600, '/');
    wp_redirect( home_url());
    exit;
}

function theme_init(){
    register_nav_menus( array(
        'header_menu' => 'Header menu',
        'footer_menu' => 'My Custom Footer Menu',
    ) );

}
add_action('init', 'theme_init');


function print_script(){
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/slideshow.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'print_script')
?>