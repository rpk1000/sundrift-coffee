<?php
// filepath: wp-content/themes/sundrift/functions.php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'kadence', get_template_directory_uri() . '/style.css' ); // Enqueue the parent theme style
    wp_enqueue_style( 'sundrift', get_stylesheet_uri(), [ 'kadence' ] ); // Enqueue the child theme style, dependent on the parent theme style
});

/**
 * Insert favicons into the head section of the site.
 * Minor update to ensure favicons are loaded correctly.
 *
 * @since 1.0.0
 */
function sundrift_insert_favicons() {
	$theme_uri = get_stylesheet_directory_uri();
	?>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $theme_uri; ?>/assets/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $theme_uri; ?>/assets/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $theme_uri; ?>/assets/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo $theme_uri; ?>/assets/favicons/site.webmanifest">
	<?php
}
add_action('wp_head', 'sundrift_insert_favicons', 20);