<?php get_template_part('templates/page', 'header'); ?>

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

<section id="nieuws">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 pt-3 pb-5">
        <?php if (!have_posts()) : ?>
          <div class="alert alert-warning">
            <?php _e('Er zijn nog geen berichten.', 'sage'); ?>
          </div>
          <form action="/" method="get" class="form-inline justify-content-end">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Zoek op de website" name="s" id="search" value="<?php the_search_query(); ?>" aria-label="Zoeken op de website">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Zoeken</button>
              </div>
            </div>
          </form>
        <?php else: ?>
          <h1 class="display-4 text-center">Zoek resultaten</h1>
          <form action="/" method="get" class="mt-3 mb-4">
            <div class="row">
              <div class="col-8">
                <input class="form-control" type="text" placeholder="Zoek op de website" name="s" id="search" value="<?php the_search_query(); ?>" aria-label="Zoeken op de website">
              </div>
              <div class="col-4">
                <button class="btn btn-primary btn-block" type="submit">Zoeken</button>
              </div>
            </div>
          </form>
        <?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>
          <div class="row mb-4">
            <div class="col-12">
              <h2><a class="text-black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <small><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></small>
              <?php the_excerpt(); ?>
              <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Meer lezen</a>
            </div>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
  </div>
</section>

<?php the_posts_navigation(); ?>
