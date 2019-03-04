<?php use Roots\Sage\Assets; ?>

<?php while (have_posts()) : the_post(); ?>
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
        <div class="col-12 col-md-10 bg-white py-4 px-4 px-md-5">
          <h1 class="display-2 text-purple mb-4"><?the_title();?></h1>
          <?the_content();?>
        </div>
      </div>
    </div>
  </section>

  <? get_template_part('templates/call-to-action');?>

  <? get_template_part('templates/quotes'); ?>

<?php endwhile; ?>
