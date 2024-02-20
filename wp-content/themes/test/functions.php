<?php
function test_register_styles()
{
   wp_enqueue_style('test-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
   wp_enqueue_style('test-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(), '1.0', 'all');
   wp_enqueue_style('test-bootstrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css", array(), '1.0', 'all');
   wp_enqueue_style('test-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), '1.0', 'all');
   wp_enqueue_style('test-flag-icon', "https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css", array(), '1.0', 'all');
   wp_enqueue_style('test-intl-tel', "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css", array(), '1.0', 'all');
   wp_enqueue_style('test-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'test_register_styles');

function test_register_scripts()
{
   wp_enqueue_script('test-script', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
   wp_enqueue_script('test-intl-tel-input', "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js", array(), '1.0', true);
   wp_enqueue_script('test-jquery', "https://code.jquery.com/jquery-3.6.0.min.js", array(), '1.0', true);
   wp_enqueue_script('test-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), '1.0', true);
   wp_enqueue_script('test-sweetalert2', "https://cdn.jsdelivr.net/npm/sweetalert2@11", array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'test_register_scripts');
