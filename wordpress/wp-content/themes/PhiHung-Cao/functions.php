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
add_action('wp_enqueue_scripts', 'print_script');

//add custom post type
// Our custom post type function
function create_posttype() {
 
    register_post_type( 'movies',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Movies' ),
                'singular_name' => __( 'Movie' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'movies'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function custom_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Movies', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'Movies', 'twentythirteen' ),
            'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
            'all_items'           => __( 'All Movies', 'twentythirteen' ),
            'view_item'           => __( 'View Movie', 'twentythirteen' ),
            'add_new_item'        => __( 'Add New Movie', 'twentythirteen' ),
            'add_new'             => __( 'Add New', 'twentythirteen' ),
            'edit_item'           => __( 'Edit Movie', 'twentythirteen' ),
            'update_item'         => __( 'Update Movie', 'twentythirteen' ),
            'search_items'        => __( 'Search Movie', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'movies', 'twentythirteen' ),
            'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions'),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
         
        // Registering your Custom Post Type
        register_post_type( 'movies', $args );
     
    }
     
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
     
add_action( 'init', 'custom_post_type', 0 );

?>