/**
 * Plugin Name: Very First Plugin
 * Plugin URI: http://karljohanlinnas.ikt.ee/
 * Description: This is the very first plugin I've ever created.
 * Version: 1.0
 * Author: Karl Johan Linnas
 * Author URI: http://karljohanlinnas.ikt.ee/
**/
<?php 
function tutsplus_register_taxonomy() {    
     
    // books
    $labels = array(
        'name' => __( 'Genres' , 'tutsplus' ),
        'singular_name' => __( 'Genre', 'tutsplus' ),
        'search_items' => __( 'Search Genres' , 'tutsplus' ),
        'all_items' => __( 'All Genres' , 'tutsplus' ),
        'edit_item' => __( 'Edit Genre' , 'tutsplus' ),
        'update_item' => __( 'Update Genres' , 'tutsplus' ),
        'add_new_item' => __( 'Add New Genre' , 'tutsplus' ),
        'new_item_name' => __( 'New Genre Name' , 'tutsplus' ),
        'menu_name' => __( 'Genres' , 'tutsplus' ),
    );
     
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'sort' => true,
        'args' => array( 'orderby' => 'term_order' ),
        'rewrite' => array( 'slug' => 'genres' ),
        'show_admin_column' => true,
        'show_in_rest' => true
 
    );
     
    register_taxonomy( 'tutsplus_genre', array( 'tutsplus_movie' ), $args);
     
}
add_action( 'init', 'tutsplus_register_taxonomy' );