<?php
 function test_register_styles(){
    wp_enqueue_style('test-style',get_template_directory_uri()."/style.css",array(),'1.0','all');
 }

 add_action('wp_enqueue_scripts','test_register_styles');
 ?>