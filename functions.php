<?php


// Featured Image
function simple_theme_setup(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'simple_theme_setup');

// Excert Length

function set_excerpt_length() {
  return 30;
}

add_filter('excerpt_length', 'set_excerpt_length');

?>
