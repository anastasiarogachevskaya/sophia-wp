<?php 
function redirect_all_to_front_page() {
    if (!is_front_page()) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('template_redirect', 'redirect_all_to_front_page');

function sophia_landing_enqueue_scripts() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');

    // Check if we're in development mode
    // For testing purposes, always enqueue from Vite's server
    wp_enqueue_script('sophia-landing-main-js', 'http://localhost:5173/assets/main.js', array(), null, true);
    wp_enqueue_style('sophia-landing-main-css', 'http://localhost:5173/assets/main.scss', array(), null);

    // if (defined('WP_DEBUG') && WP_DEBUG) {
    //     // Enqueue from Vite's server
    //     wp_enqueue_script('sophia-landing-main-js', 'http://127.0.0.1:5173/main.js', array(), null, true);
    //     wp_enqueue_style('sophia-landing-main-css', 'http://127.0.0.1:5173/style.css', array(), null);
    // } else {
    //     // Enqueue production files
    //     wp_enqueue_script('sophia-landing-main-js', get_template_directory_uri() . '/dist/main.js', array(), null, true);
    //     wp_enqueue_style('sophia-landing-main-css', get_template_directory_uri() . '/dist/style.css', array(), null);
    // }
}
add_action('wp_enqueue_scripts', 'sophia_landing_enqueue_scripts');


?>