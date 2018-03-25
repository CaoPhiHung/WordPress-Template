<?php

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
        echo "Login successful, redirecting...";
        setcookie( 'username', $_POST['username'], time() + 3600, '/');
        wp_redirect( home_url()); // redirect to home page
        exit;
    }
}

//hook function process_form_data into admin_post_$action
//it allow us a handle for Post or Get request
add_action( 'admin_post_nopriv_process_form', 'process_form_data' );
add_action( 'admin_post_process_form', 'process_form_data' );

//register menus theme and add custom footer menu
function theme_init(){
    register_nav_menus( array(
        'footer_menu' => 'My Custom Footer Menu',
    ) );

}
/* hook function theme_init into init*/
add_action('init', 'theme_init');

/* register the script and enqueues */
function print_script(){
    /* wp_enqueue_script( string $handle, string $src = '', array $deps = array(), 
    string|bool|null $ver = false, bool $in_footer = false ) */
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/slideshow.js', array(), false, true);
}
/* hook function print_script into the wp_enqueue_scripts function */
add_action('wp_enqueue_scripts', 'print_script');

//add custom post type
//register custom post type
function custom_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => __( 'Courses', 'Post Type General Name', 'PhiHung-Cao' ),
            'singular_name'       => __( 'Course', 'Post Type Singular Name', 'PhiHung-Cao' ),
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
            // Features of custom post type supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions'),
            // You can associate this custom post type with a taxonomy or custom taxonomy. 
            // Here i associate with custom taxonomy location
            'taxonomies'          => array( 'location' ),
            /* A hierarchical custom post type is like Pages and can have
            * Parent and child items. A non-hierarchical custom post type
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
     
    /* Hook into the 'init' action so that the function*/
     
add_action( 'init', 'custom_post_type');


/*
 * Add custom taxonomies
 */
function add_custom_taxonomies() {
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('location', 'courses', array(
      // Hierarchical taxonomy (like categories)
      'hierarchical' => true,
      // This array of options controls the labels displayed in the WordPress Admin UI
      //_x function mean: location can be translate to taxonomy gernral name
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

  /* hook function add_custon_taxonomies into init action */
  add_action( 'init', 'add_custom_taxonomies');

  /* custom header */
  function custom_header_setup(){
      add_theme_support( 'custom-header', array(
        'default-image' => '',
        'default-text-color' => '00000',
        'width' => 1140, // set default video width
        'height' => 641, // set defaul video height
        'flex-height' => true,
        'video' => true, //show header video media
      ) );
  }

  /* hook function custom_header_setup into init action */
  add_action( 'init', 'custom_header_setup', 0 );
?>