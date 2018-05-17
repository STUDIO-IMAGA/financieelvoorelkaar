<?php
/**
 * Template Name: Diensten Template
 */

use Roots\Sage\Assets;
?>

<?php if ( function_exists('yoast_breadcrumb') ) : ?>
  <section class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <?php yoast_breadcrumb(); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-3 order-2 order-md-1 py-3">

        <h3>Diensten</h3>
        <?php
          wp_nav_menu(
            array(
              'theme_location'    => 'services_navigation',
              'depth'             => 2,
              'container'         => 'div',
            )
          );
        ?>

      </div>

      <div class="col-12 col-md-9 order-1 order-md-2 py-3">
        <h1><?php the_title(); ?></h1>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3 text-center">
            <a href="/diensten/hypotheek" title="Hypotheek">
              <img class="img-fluid" src="<?= Assets\asset_path('images/oranje-hypotheek.png'); ?>" alt="Hypotheek">
              <h4>Hypotheek</h4>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 text-center">
            <a href="/diensten/pensioen" title="Hypotheek">
              <img class="img-fluid" src="<?= Assets\asset_path('images/oranje-pensioen.png'); ?>" alt="Pensioen">
              <h4>Pensioen</h4>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 text-center">
            <a href="/diensten/inkomensrisico" title="Hypotheek">
              <img class="img-fluid" src="<?= Assets\asset_path('images/oranje-inkomensrisico.png'); ?>" alt="Inkomensrisico">
              <h4>Inkomensrisico</h4>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 text-center">
            <a href="/diensten/life-planning" title="Hypotheek">
              <img class="img-fluid" src="<?= Assets\asset_path('images/oranje-life-planning.png'); ?>" alt="Life Planning">
              <h4>Life Planning</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
