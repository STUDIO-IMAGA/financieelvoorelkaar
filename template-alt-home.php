<?php
/**
 * Template Name: Alt-home
 */

use Roots\Sage\Assets;
?>
<div class="jumbotron jumbotron-fluid mb-0 pt-md-10 pb-md-8" <?= (get_the_post_thumbnail_url())?'style="background-image:url('.get_the_post_thumbnail_url().');"':'';?> >
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-7 bg-white-35 px-4 py-2">
        <h1 class="display-3 text-purple">Hypotheekadvies met een <br>duidelijk verhaal</h1>
        <p class="lead">Ieder hypotheekadvies is uniek. Of je nu start of doorstroomt op de woningmarkt. Financieel Voor Elkaar heeft voor ieder moment in je leven een duidelijk verhaal. Daarnaast voorzien wij je van een hypotheek-voorstel en ook financieel advies.</p>
        <p><a class="btn btn-purple" href="#"><b>AFSPRAAK MAKEN</b><i class="fa fa-chevron-right ml-2"></i></a></p>
      </div>
    </div>
  </div>
</div>

<section class="promo">
  <div class="container-fluid">
    <div class="row text-white">
      <div class="col-12 col-md-6 col-lg-3 py-4 bg-orange-85 promo-item pl-lg-6">
        <h4><img class="img-fluid" src="<?= Assets\asset_path('images/oranje-hypotheek-wit.png'); ?>"  width="32"/> Hypotheekadvies</h4>
        <div class="promo-body">
          <p>Het kopen van een woning is vaak een droom die werkelijkheid wordt. Wij kunnen je helpen deze droom te realiseren.</p>
        </div>
        <div class="promo-footer">
          <a href="/diensten/hypotheek" class="btn btn-sm btn-purple px-4">Lees meer</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 py-4 bg-orange-90 promo-item">
        <h4><img class="img-fluid" src="<?= Assets\asset_path('images/oranje-life-planning-wit.png'); ?>"  width="32"/> Financiële Planning</h4>
        <div class="promo-body">
          <p>Samen met jou kijken wij naar het totaalplaajte van jou financiële toestand en met welke risico's je in de toekomst te maken kan hebben.</p>
        </div>
        <div class="promo-footer">
          <a href="/diensten/life-planning/" class="btn btn-sm btn-purple px-4">Lees meer</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 py-4 bg-orange-95 promo-item">
        <h4><img class="img-fluid" src="<?= Assets\asset_path('images/oranje-inkomensrisico-wit.png'); ?>"  width="32"/> Verzekeringen</h4>
        <div class="promo-body">
          <p>Jij als particulier raakt steeds meer zelf verantwoordelijk voor het afdekken van financiële gevolgen.</p>
          <p></p>
        </div>
        <div class="promo-footer">
          <a href="/diensten/inkomensrisico/" class="btn btn-sm btn-purple px-4">Lees meer</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 py-4 bg-orange promo-item pr-lg-6">
        <h4><img class="img-fluid" src="<?= Assets\asset_path('images/oranje-pensioen-wit.png'); ?>"  width="32"/> Pensioen</h4>
        <div class="promo-body">
          <p>Eerder stoppen met werken? Studiekapitaal opbouwen voor je kindderen? Wij adviseren je over de financiële planning die klopt bij jou toekomstdoelen.</p>
        </div>
        <div class="promo-footer">
          <a href="/diensten/pensioen" class="btn btn-sm btn-purple px-4">Lees meer</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container py-3 py-md-6">
    <div class="row justify-content-center pb-5">
      <div class="col-12 col-md-10">
        <h1 class="display-3 text-purple">Onze Visie</h1>
        <p class="lead">Niet uw (toekomstig) huis staat centraal, ù staat centraal en wij zorgen ervoor dat uw nieuwe woning perfect in uw financiële plaatje past. Dát is onze grote kracht. Alleen wij combineren in de regio Drachten/Heerenveen experts op Financieel, Fiscaal en Juridisch gebied. Maar niet alleen bij deze beslissing ook daarna tijdens de gehele looptijd van je hypotheek staan we altijd voor je klaar. Stap gerust eens bij ons binnen aan de Gauke Boelensstraat 120 in Drachten. Je kunt ook een afspraak maken op onze locatie in Heereveen aan de Lyceumstraat 2.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6">
        <img class="img-fluid mb-3" src="<?= Assets\asset_path("images/fve-2.jpg"); ?>"/>
      </div>
      <div class="col-12 col-md-6">
        <p>Mocht u met zaken te maken krijgen waarbij er een scheiding speelt, dan kunt u een beroep doen op de kennis van de medewerkers van “Modern uit elkaar”. Zij hebben kennis van zaken op het juridische en fiscale vlak met betrekking tot scheidingen en hebben bovendien veel gesprekservaring opgedaan om tot oplossingen te komen, waarbij beide partijen weer verder kunnen.</p>
        <p>
          Behaald hun financiële doelen
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 86%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">86%</div>
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

<? get_template_part('templates/quotes'); ?>
