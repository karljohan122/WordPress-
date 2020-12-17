/**
 * Plugin Name: Very First Plugin
 * Plugin URI: http://karljohanlinnas.ikt.ee/
 * Description: This is the very first plugin I've ever created.
 * Version: 1.0
 * Author: Karl Johan Linnas
 * Author URI: http://karljohanlinnas.ikt.ee/
**/
<?php 
add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Tänan lugemast!</p>';
}