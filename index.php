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
      <div class="col-12 col-md-10 py-5">
        <?php if (!have_posts()) : ?>
          <div class="alert alert-warning">
            <?php _e('Er zijn nog geen berichten.', 'sage'); ?>
          </div>
          <?php get_search_form(); ?>
        <?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        <?php endwhile; ?>

      </div>
    </div>
  </div>
</section>
