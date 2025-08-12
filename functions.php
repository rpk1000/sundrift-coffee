<?php
// filepath: wp-content/themes/sundrift/functions.php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'kadence', get_template_directory_uri() . '/style.css' ); // Enqueue the parent theme style
    wp_enqueue_style( 'sundrift', get_stylesheet_uri(), [ 'kadence' ] ); // Enqueue the child theme style, dependent on the parent theme style
});