<?php
function enqueue_current_theme_script() {
	wp_enqueue_script('namespace-current-script', get_stylesheet_directory_uri() . '/scripts/main.js');
}
add_action('wp_enqueue_scripts', 'enqueue_current_theme_script');
?>