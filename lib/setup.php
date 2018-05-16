<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  load_theme_textdomain('sage', get_template_directory() . '/lang');
  add_theme_support('title-tag');
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage')
  ]);
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);
  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('sage/css', Assets\asset_path('styles/main.css'), false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

/**
 * Manage google fonts of load_google_font()
 * set GOOGLE_FONTS constant in functions.php
 */
function load_google_fonts() {

  if( ! defined( 'GOOGLE_FONTS' ) ) return;
    wp_register_style('imaga/google-fonts', 'http://fonts.googleapis.com/css?family=' . GOOGLE_FONTS );
    wp_enqueue_style( 'imaga/google-fonts');
}
add_action( 'wp_head', __NAMESPACE__ . '\\load_google_fonts' , 1);
