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
        <p class="lead">Ieder hypotheekadvies is uniek. Of je nu start of doorstroomt op de woningmarkt. Financieel Voor Elkaar heeft voor ieder moment in je leven een duidelijk verhaal. Wij voorzien je ook van een degelijk financieel advies, zodat je écht een hypotheekadvies krijgt dat bij jou past.</p>
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
          <p>Het kopen van een woning is vaak een droom die werkelijkheid wordt. Wij kunnen je helpen deze droom te realiseren.</p>
        </div>
        <div class="promo-footer">
          <a href="/diensten/life-planning/" class="btn btn-sm btn-purple px-4">Lees meer</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 py-4 bg-orange-95 promo-item">
        <h4><img class="img-fluid" src="<?= Assets\asset_path('images/oranje-inkomensrisico-wit.png'); ?>"  width="32"/> Verzekeringen</h4>
        <div class="promo-body">
          <p>Samen met jou kijken wij naar het totaalplaatje van jou financiële situatie en met welke risico's je in de toekomst te maken kan hebben.</p>
          <p></p>
        </div>
        <div class="promo-footer">
          <a href="/diensten/inkomensrisico/" class="btn btn-sm btn-purple px-4">Lees meer</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 py-4 bg-orange promo-item pr-lg-6">
        <h4><img class="img-fluid" src="<?= Assets\asset_path('images/oranje-pensioen-wit.png'); ?>"  width="32"/> Pensioen</h4>
        <div class="promo-body">
          <p>Eerder stoppen met werken? Studiekapitaal opbouwen voor je kinderen? Wij adviseren je over de financiële planning die klopt bij jou toekomstdoelen.</p>
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
        <h2 class="display-3 text-purple">Een goed hypotheekadvies is echt persoonlijk</h2>
        <p class="lead">Niet alleen je (toekomstig) huis staat centraal, jij staat centraal en wij zorgen ervoor dat jouw nieuwe woning perfect in je financiële plaatje past. Dát is onze grote kracht. Alleen wij combineren in de regio Drachten/Heerenveen experts op Financieel, Fiscaal en Juridisch gebied. Maar niet alleen bij een hypotheekadvies. Ook tijdens de gehele looptijd van je hypotheek staan we altijd voor je klaar. Stap gerust eens bij ons binnen aan de Gauke Boelensstraat 120 in Drachten.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6">
        <img class="img-fluid mb-3" src="<?= Assets\asset_path("images/fve-2.jpg"); ?>"/>
      </div>
      <div class="col-12 col-md-6">
        <h2 class="display-4 text-purple">Hulp en advies bij elke stap</h2>
        <p class="lead">Het afsluiten van een hypotheek is één van de belangrijkste momenten in je leven. We helpen je bij elke stap en vergeten je niet nadat je hypotheek is afgesloten. Tijdens de gehele looptijd van je hypotheek staan we altijd voor je klaar. Bij elk belangrijk moment van je leven kun je zo op ons terugvallen en gerust zijn dat je jouw unieke situatie financieel perfect geregeld hebt.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
        <h2 class="display-3 text-purple">Nationale Hypotheek Garantie</h2>
        <img class="img-fluid float-right" src="<?= Assets\asset_path('images/nhg.png'); ?>" alt="Nationale Hypotheek Garantie" width="140">
        <p class="lead">Met de Nationale Hypotheek Garantie (NHG) ben je verzekerd van een verantwoorde en betaalbare hypotheek. Afgezien daarvan beperk je met de NHG je financiële risico’s van jouw eigen koopwoning. Nu, maar ook in de toekomst. Onze adviseurs vertellen je er graag meer over.</p>
      </div>
    </div>
    <div class="row justify-content-center py-5">
      <div class="col-12 col-md-10">
        <h2 class="display-3 text-purple">Erkend hypotheek- en financieel adviseurs</h2>
        <img class="img-fluid float-right" src="<?= Assets\asset_path('images/afm.png'); ?>" alt="Nationale Hypotheek Garantie" width="140">
        <p class="lead">Jij bent bij ons in goede handen. Onze financieel adviseurs zijn officieel erkend, voldoen aan strenge opleidings- en ervaringsvereisten en beschikken over alle benodigde papieren en vergunningen. Je kunt dit zelf nalezen op onze pagina bij de <a href="https://www.afm.nl/nl-nl/professionals/registers/vergunningenregisters/financiele-dienstverleners/details?id=1B4E7AFE-643A-E311-894A-005056BE011D" target="_blank" alt="Autoriteit Financiële Markten">Autoriteit Financiële Markten</a>.</p>
      </div>
    </div>
  </div>
</section>

<? get_template_part('templates/quotes'); ?>
