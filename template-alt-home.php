<?php
/**
 * Template Name: Alt-home
 */

use Roots\Sage\Assets;
?>
<div class="jumbotron jumbotron-fluid mb-0 pt-10 pb-8" <?= (get_the_post_thumbnail_url())?'style="background-image:url('.get_the_post_thumbnail_url().');"':'';?> >
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 bg-white-35">
        <h1 class="display-4 text-purple">Financieel Voor Elkaar</h1>
        <p class="lead">Klanten inzicht geven in hun financiële situatie, waarbij geld een middel is om ruimte te maken voor de eigen wensen, voor dátgene waar je diep van binnen gelukkig van wordt.

          Afspraken zijn mogelijk in Drachten en Heerenveen. Zie op onze contactpagina.

          Buiten kantooruren zijn afspraken in overleg ook mogelijk.

        </p>
      </div>
    </div>
  </div>
</div>

<section class="promo">
  <div class="container-fluid">
    <div class="row text-white">
      <div class="col-12 col-md-6 col-lg-3 py-4 bg-orange-85 promo-item">
        <h4><img class="img-fluid" src="<?= Assets\asset_path('images/oranje-hypotheek-wit.png'); ?>"  width="32"/> Hypotheek</h4>
        <div class="promo-body">
          <p>Het kopen van een woning is vaak een droom die werkelijkheid wordt.</p>
        </div>
        <div class="promo-footer">
          <a href="/diensten/hypotheek" class="btn btn-sm btn-purple px-4">Lees meer</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 py-4 bg-orange-90 promo-item">
        <h4><img class="img-fluid" src="<?= Assets\asset_path('images/oranje-pensioen-wit.png'); ?>"  width="32"/> Pensioen</h4>
        <div class="promo-body">
          <p>Het bereiken van de pensioengerechtigde leeftijd is voor velen een mijlpaal.</p>
        </div>
        <div class="promo-footer">
          <a href="/diensten/pensioen" class="btn btn-sm btn-purple px-4">Lees meer</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 py-4 bg-orange-95 promo-item">
        <h4><img class="img-fluid" src="<?= Assets\asset_path('images/oranje-inkomensrisico-wit.png'); ?>"  width="32"/> Inkomensrisico</h4>
        <div class="promo-body">
          <p>U als particulier raakt steeds meer zelf verantwoordelijk voor het afdekken van financiële gevolgen.</p>
        </div>
        <div class="promo-footer">
          <a href="/diensten/inkomensrisico/" class="btn btn-sm btn-purple px-4">Lees meer</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 py-4 bg-orange promo-item">
        <h4><img class="img-fluid" src="<?= Assets\asset_path('images/oranje-life-planning-wit.png'); ?>"  width="32"/> Life planning</h4>
        <div class="promo-body">
          <p>U moet immers wel uw hypotheeklasten betalen, of sparen voor de studie van uw kinderen, want anders… Maar anders wat?</p>
        </div>
        <div class="promo-footer">
          <a href="/diensten/life-planning/" class="btn btn-sm btn-purple px-4">Lees meer</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container py-6">
    <div class="row pb-5">
      <div class="col-12 text-center">
        <h1 class="display-4 text-purple">Financieel Voor Elkaar</h1>
        <p class="lead">Financieel voor elkaar is één van de ondernemingen van de Arie Brink Groep. Binnen deze groep zijn er verschillende disciplines. Elke onderneming binnen deze groep kijkt vanuit haar eigen expertise naar het life-event waar u op dat moment mee te maken heeft. Door de hechte onderlinge samenwerking is het mogelijk onze dienstverlening zo integraal mogelijk te maken.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6">
        <img class="img-fluid" src="<?= Assets\asset_path("images/fve-1.jpg"); ?>"/>
      </div>
      <div class="col-12 col-md-6">
        <p>Mocht u met zaken te maken krijgen waarbij er een scheiding speelt, dan kunt u een beroep doen op de kennis van de medewerkers van “Modern uit elkaar”. Zij hebben kennis van zaken op het juridische en fiscale vlak met betrekking tot scheidingen en hebben bovendien veel gesprekservaring opgedaan om tot oplossingen te komen, waarbij beide partijen weer verder kunnen.</p>
        <p>
          Financieel Consult
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
          </div>
        </p>
        <p>
          Online Support
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:63%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100">63%</div>
          </div>
        </p>
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
