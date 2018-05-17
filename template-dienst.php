<?php
/**
 * Template Name: Dienst Template
 */

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

        <img class="img-fluid mb-4" src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

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
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>
