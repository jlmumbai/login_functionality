<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

 add_action( 'wp_enqueue_scripts', 'twentytwentyone_child_style' );
  function twentytwentyone_child_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
}

/**
 * Your code goes below.
 */

add_action('user_register', 'add_customerid');    
//add_action('show_user_profile', 'add_customerid');
//add_action('edit_user_profile', 'add_customerid');
//add_action('personal_options_update', 'add_customerid');    
//add_action('edit_user_profile_update','add_customerid');

function add_customerid( $user_id ) {
	do {
        $unique_id = uniqid();
    } while (!check_unique($unique_id));
	update_user_meta( $user_id, 'customer_id', $unique_id ); 
}

function check_unique($unique_id){
		$user_query = new WP_User_Query( array( 'meta_key' => 'customer_id', 'meta_value' => $unique_id ) );
		$users = $user_query->get_results();
		if (empty($users)) {
			return true;
		} else {
		   return false;
		}
}

add_shortcode( 'display_login_id', 'display_login_id' );
function display_login_id() {
	$current_user = wp_get_current_user();
	if ( $current_user ) {
		$unique_id = $current_user->customer_id;
		$username =  $current_user->user_firstname . ' ' . $current_user->user_lastname;
	}
	
	return "<p>Hello " . $username . ", your unique id is " . $unique_id . ".</p>";
}