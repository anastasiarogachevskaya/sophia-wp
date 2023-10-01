<?php 
function redirect_all_to_front_page() {
    if (!is_front_page()) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('template_redirect', 'redirect_all_to_front_page');
?>