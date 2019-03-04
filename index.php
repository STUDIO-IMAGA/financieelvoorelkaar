<div class="jumbotron jumbotron-fluid mb-0 pt-10 pb-8" <?= (get_the_post_thumbnail_url())?'style="background-image:url('.get_the_post_thumbnail_url().');"':'';?> >
  <div class="container">
    <div class="row">
      <div class="col-12">

      </div>
    </div>
  </div>
</div>

<section class="page-content">
  <div class="container pb-6">

    <div class="row justify-content-center">
      <div class="col-12 col-md-10 bg-white pt-4 px-4 px-md-5">
        <h1 class="display-2 text-purple">Nieuws</h1>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-md-10 bg-white py-4 px-4 px-md-5">

        <?php if (!have_posts()) : ?>
          <div class="alert alert-warning">
            <?php _e('Er zijn nog geen berichten.', 'sage'); ?>
          </div>
          <?php get_search_form(); ?>
        <?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>
          <article <?php post_class(); ?>>
              <div class="row align-items-center">
                <?php if ( has_post_thumbnail() ): ?>
                  <div class="col-12 col-md-3">
                    <img class="img-fluid" src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                  </div>
                <?php endif; ?>
                <div class="col-12 col-md">
                  <header>
                    <h2 class="entry-title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <p>Geplaatst op <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></p>
                  </header>
                  <div class="entry-summary">
                    <?php the_excerpt(); ?>
                  </div>
                </div>
              </div>
          </article>
        <?php endwhile; ?>

      </div>
    </div>
  </div>
</section>
