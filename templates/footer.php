<?php use Roots\Sage\Navigation; ?>
<?php use Roots\Sage\Assets; ?>

<section class="promotionbar">
  <div class="container">
    <div class="row">

      <div class="col-12 col-sm-6 col-md-3 ml-auto text-center py-3">
        <img class="img-fluid" src="<?= Assets\asset_path('images/fve-agb-banner.png'); ?>" alt="Financieel Voor Elkaar is onderdeel van Arie Brien Group">
      </div>

      <div class="col-12 col-sm-6 col-md-3 text-center py-3">
        <img class="img-fluid" src="<?= Assets\asset_path('images/mue-banner.png'); ?>" alt="Modern Uit Elkaar, gericht op de toekomst">
      </div>

    </div>
  </div>
</section>

<footer class="content-footer bg-purple py-2">
  <div class="container text-white">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand navbar-dark px-0">
          <span class="navbar-text">&copy; Financieel voor elkaar</span>
          <?php echo Navigation\navigation( 'footer_navigation', 'footer_navigation', 'collapse navbar-collapse', 'nav navbar-nav'); ?>
        </nav>
      </div>
    </div>
  </div>
</footer>
