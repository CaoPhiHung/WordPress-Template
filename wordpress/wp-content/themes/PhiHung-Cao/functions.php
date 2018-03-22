<?php
add_action( 'admin_post_nopriv_process_form', 'process_form_data' );
add_action( 'admin_post_process_form', 'process_form_data' );
function process_form_data() {
  // form processing code here
    $info = array();
    $info['user_login'] = $_POST['username'];
    $info['user_password'] = $_POST['password'];
    $info['remember'] = true;

    $user_signon = wp_signon( $info, false );
    if ( is_wp_error($user_signon) ){
        http_response_code(403);
        echo "Wrong username or password.";
    } else {
        echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful, redirecting...')));
        setcookie( 'username', $_POST['username'], time() + 3600, '/');
        wp_redirect( home_url());
        exit;
    }
    
    
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
// function create_posttype() {
 
//     register_post_type( 'course',
//     // CPT Options
//         array(
//             'labels' => array(
//                 'name' => __( 'Course' ),
//                 'singular_name' => __( 'Couse' )
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => array('slug' => 'course'),
//         )
//     );
// }
// // Hooking up our function to theme setup
// add_action( 'init', 'create_posttype' );

function custom_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Courses', 'Post Type General Name', 'PhiHung-Cao' ),
            'singular_name'       => _x( 'Course', 'Post Type Singular Name', 'PhiHung-Cao' ),
            'menu_name'           => __( 'Courses', 'PhiHung-Cao' ),
            'parent_item_colon'   => __( 'Parent Course', 'PhiHung-Cao' ),
            'all_items'           => __( 'All Courses', 'PhiHung-Cao' ),
            'view_item'           => __( 'View Course', 'PhiHung-Cao' ),
            'add_new_item'        => __( 'Add New Course', 'PhiHung-Cao' ),
            'add_new'             => __( 'Add New', 'PhiHung-Cao' ),
            'edit_item'           => __( 'Edit Course', 'PhiHung-Cao' ),
            'update_item'         => __( 'Update Course', 'PhiHung-Cao' ),
            'search_items'        => __( 'Search Course', 'PhiHung-Cao' ),
            'not_found'           => __( 'Not Found', 'PhiHung-Cao' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'PhiHung-Cao' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'Courses', 'PhiHung-Cao' ),
            'description'         => __( 'Course news and reviews', 'PhiHung-Cao' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions'),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'location' ),
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
        register_post_type( 'Courses', $args );
     
    }
     
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
     
add_action( 'init', 'custom_post_type', 0 );


/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('location', 'courses', array(
      // Hierarchical taxonomy (like categories)
      'hierarchical' => true,
      // This array of options controls the labels displayed in the WordPress Admin UI
      'labels' => array(
        'name' => _x( 'Locations', 'taxonomy general name' ),
        'singular_name' => _x( 'Location', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Locations' ),
        'all_items' => __( 'All Locations' ),
        'parent_item' => __( 'Parent Location' ),
        'parent_item_colon' => __( 'Parent Location:' ),
        'edit_item' => __( 'Edit Location' ),
        'update_item' => __( 'Update Location' ),
        'add_new_item' => __( 'Add New Location' ),
        'new_item_name' => __( 'New Location Name' ),
        'menu_name' => __( 'Locations' ),
      ),

      // Control the slugs used for this taxonomy
      'rewrite' => array(
        'slug' => 'locations', // This controls the base slug that will display before each term
        'with_front' => false, // Don't display the category base before "/locations/"
        'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
      ),
    ));
  }
  add_action( 'init', 'add_custom_taxonomies', 0 );
?>