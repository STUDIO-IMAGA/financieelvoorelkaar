<article <?php post_class('card mb-5'); ?>>
  <div class="card-body">
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
  </div>
</article>
