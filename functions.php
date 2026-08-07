<?php

/**
 * Mangata Gallo theme functions and definitions.
 *
 * @package Mangata Gallo
 */

if (! defined('ABSPATH')) {
  exit; // Заборонити прямий доступ до файлу.
}

function mangata_theme_register_blocks()
{
  register_block_type(get_theme_file_path('/build/blocks/banner'));
}
add_action('init', 'mangata_theme_register_blocks');