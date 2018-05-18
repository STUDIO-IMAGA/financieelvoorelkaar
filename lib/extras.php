<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'imaga') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


/*
 * Custom Google Maps driven directions
 */
add_shortcode('routeplanner', function(){
  $html = '
  <div id="routeplanner">
    <div class="row">
      <div class="col-12">
        <div id="map"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="row pt-3">
          <div class="col-12">
            <p>Voer hier uw adres in</p>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <input class="form-control mr-3" type="text" id="wherefrom" />
          </div>
          <div class="col-4">
            <button class="btn btn-primary btn-block"id="wherefrom-submit">Plan Route</button>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div id="route-directions"></div>
          </div>
        </div>
      </div>
    </div>
  </div>';

  echo $html;
});

/*
 * Custom Search URL prettifier
 */
add_action( 'init', function(){

    $GLOBALS['wp_rewrite']->search_base = 'zoeken';

});

add_action( 'template_redirect', function() {

  global $wp_rewrite;

  if ( !isset( $wp_rewrite ) || !is_object( $wp_rewrite ) || !$wp_rewrite->using_permalinks() ) {
    return;
  }

  $search_base = $wp_rewrite->search_base;

  if ( is_search() && !is_admin() && strpos( $_SERVER['REQUEST_URI'], "/{$search_base}/" ) === false ) {
    wp_redirect( home_url( "/{$search_base}/" . urlencode( get_query_var( 's' ) ) ) );
    exit();
  }
});
