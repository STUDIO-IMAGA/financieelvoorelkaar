
<?php use Roots\Sage\Assets; ?>
<?php use Roots\Sage\Navigation; ?>

<header role="banner" class="header">

  <div class="collapse" id="search-panel">
    <div class="container">
      <div class="row">
        <div class="col-12 py-3">
          <form action="/" method="get" class="form-inline justify-content-end">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Zoek op de website" name="s" id="search" value="<?php the_search_query(); ?>" aria-label="Zoeken op de website">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Zoeken</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 text-center text-md-right pt-2">
        <a class="btn btn-md btn-link text-black" href="tel:0512-549494"><i class="fa fa-phone"></i> 0512-549494</a>
        <a class="btn btn-md btn-purple" href="/contact/bel-mij-terug">Bel mij terug</a>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">

      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php echo Assets\asset_path("images/brand.png"); ?>" width="290" class="img-fluid" alt="<?php bloginfo('name'); ?>">
      </a>

      <?php echo Navigation\toggler('primary_navigation'); ?>

      <?php echo Navigation\navigation( 'primary_navigation', 'primary_navigation'); ?>

      <button class="btn btn-primary ml-3" type="button" data-toggle="collapse" data-target="#search-panel" aria-expanded="false" aria-controls="search-panel">
        <i class="fa fa-search"></i>
      </button>

    </div>
  </nav>

</header>
