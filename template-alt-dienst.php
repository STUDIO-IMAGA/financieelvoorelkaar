<?php
/**
 * Template Name: Alt-Dienst
 */

use Roots\Sage\Assets;
?>
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
        <div class="col-12 col-md-10 bg-white">
          <h1 class="display-4 text-purple"><?the_title();?></h1>
          <?the_content();?>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-purple-75">
    <div class="container">
      <div class="row py-6">
        <div class="col-6">
          <div class="quote">
            <div class="quote-text">
              "I choose Bank Progress because I know they share my values of putting community first. Not only do they make banking easy, I see them out volunteering and investing in our community."
            </div>
            <div class="quote-author">
              <div class="avatar">
                <img class="img-fluid img-round" src="<?= Assets\asset_path("images/avatar-1.jpg"); ?>"/>
              </div>
              <div class="author">
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <div class="name">
                  Jessica Lagerma
                </div>
                <div class="company">
                  Assistent Manager, Duroh Fiscaal
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="quote">
            <div class="quote-text">
              "I choose Bank Progress because I know they share my values of putting community first. Not only do they make banking easy, I see them out volunteering and investing in our community."
            </div>
            <div class="quote-author">
              <div class="avatar">
                <img class="img-fluid img-round" src="<?= Assets\asset_path("images/avatar-2.jpg"); ?>"/>
              </div>
              <div class="author">
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <div class="name">
                  Esmee Vlietstra
                </div>
                <div class="company">
                  Administratief medewerker, Balans Bewindvoering
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; ?>
