<?php
function child_theme() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'child-style', get_stylesheet_uri(). '/style.css'  );
}
add_action( 'wp_enqueue_scripts', 'child_theme' );
?>