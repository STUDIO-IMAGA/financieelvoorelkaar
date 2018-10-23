<?php use Roots\Sage\Navigation; ?>
<?php use Roots\Sage\Assets; ?>

<section class="promotionbar bg-light">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-12 col-sm-6 col-md-3 text-center">
        <img class="img-fluid" src="<?= Assets\asset_path('images/fve-agb-banner.png'); ?>" alt="Financieel Voor Elkaar is onderdeel van Arie Brien Group">
      </div>

      <div class="col-12 col-sm-6 col-md-3 text-center">
        <img class="img-fluid" src="<?= Assets\asset_path('images/mue-banner.png'); ?>" alt="Modern Uit Elkaar, gericht op de toekomst">
      </div>

      <div class="col-12 col-sm-6 col-md-3 text-center">
        <img class="img-fluid" src="<?= Assets\asset_path('images/nhg.svg'); ?>" alt="Nationale Hypotheek Garantie">
      </div>

    </div>
  </div>
</section>

<footer class="content-footer bg-gray-900">
  <div class="container text-white">
    <div class="row">
      <div class="col-12">
        <small>
          <nav class="navbar navbar-expand navbar-dark px-0 py-0">
            <span class="navbar-text mr-3">&copy; Financieel voor elkaar</span>
            <?php echo Navigation\navigation( 'footer_navigation', 'footer_navigation', 'collapse navbar-collapse', 'nav navbar-nav'); ?>
          </nav>
        </small>
      </div>
    </div>
  </div>
</footer>
