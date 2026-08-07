<?php

function theme_files() {
   wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600&family=Roboto:wght@400;500;700&display=swap');
  // wp_enqueue_style('extra_styles', get_theme_file_uri( '/build/index.css' ));
  wp_enqueue_style('main_styles', get_theme_file_uri( '/build/style-index.css' ));
}

add_action('wp_enqueue_scripts', 'theme_files');