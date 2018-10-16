
<?php use Roots\Sage\Assets; ?>
<?php use Roots\Sage\Navigation; ?>

<header role="banner" class="header">
  <section class="bg-orange">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6 text-center text-md-left pb-1">
          <a class="badge badge-orange mr-3" href="tel:0512-549494"><i class="fa fa-phone"></i> 0512-549494</a>
          <a class="badge badge-purple" href="/contact/bel-mij-terug">Bel mij terug</a>
        </div>
        <div class="col-6">
          <div class="collapse" id="search-panel">
            <form action="/" method="get" class="form-inline justify-content-end">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Zoek op de website" name="s" id="search" value="<?php the_search_query(); ?>" aria-label="Zoeken op de website">
                <div class="input-group-append">
                  <button class="btn btn-purple" type="submit">Zoeken</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php echo Assets\asset_path("images/brand.png"); ?>" width="190" class="img-fluid" alt="<?php bloginfo('name'); ?>">
      </a>

      <?php echo Navigation\toggler('primary_navigation'); ?>

      <?php echo Navigation\navigation( 'primary_navigation', 'primary_navigation', 'collapse navbar-collapse order-last', 'ml-auto nav navbar-nav'); ?>

      <button class="btn btn-primary ml-3 order-md-last" type="button" data-toggle="collapse" data-target="#search-panel" aria-expanded="false" aria-controls="search-panel">
        <i class="fa fa-search"></i>
      </button>

    </div>
  </nav>

</header>
