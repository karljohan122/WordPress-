<?php 
/**
 * Plugin Name: Very First Plugin
 * Plugin URI: http://karljohanlinnas.ikt.ee/
 * Description: Adds a "Thank you for reading" text under posts.
 * Version: 1.0
 * Author: Karl Johan Linnas
 * Author URI: http://karljohanlinnas.ikt.ee/
**/
add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<br> <p>Tänan lugemast!</p>';
}