<?php use Roots\Sage\Assets; ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Financieel voor elkaar, voor al uw financi�le zaken! Bel 0512-549494 of mail naar info@financieelvoorelkaar.nl"/>
	<meta name="robots" content="noopd, noydir" />

	<meta property="og:title" content="Financieel voor elkaar | Financieel voor elkaar" />
	<meta property="og:description" content="Financieel voor elkaar, voor al uw financi�le zaken! Bel 0512-549494 of mail naar info@financieelvoorelkaar.nl" />
	<meta property="og:image" content="<?= Assets\asset_path('images/favicon.png') ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="Financieel voor elkaar" />
	<meta property="og:url" content="https://www.financieelvoorelkaar.nl/" />

	<meta name="twitter:card" content="summary" />
	<meta name="twitter:url" content="https://www.financieelvoorelkaar.nl/" />
	<meta name="twitter:title" content="Financieel voor elkaar | Financieel voor elkaar" />
	<meta name="twitter:description" content="Financieel voor elkaar, voor al uw financi�le zaken! Bel 0512-549494 of mail naar info@financieelvoorelkaar.nl" />
	<meta name="twitter:image" content="<?= Assets\asset_path('images/favicon.png') ?>" />
	<meta name="twitter:creator:id" content="" />

	<link rel="canonical" href="https://www.financieelvoorelkaar.nl/" />
  <link rel="icon" type="image/x-icon" href="<?= Assets\asset_path('images/favicon.png') ?>" />
  <?php wp_head(); ?>
  <?php if ( is_page( 'routeplanner' ) ): ?>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?language=nl&key=<?= GOOGLE_MAPS_API; ?>"></script>
  <?php endif; ?>
  <script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-52624427-1']);
    _gaq.push (['_gat._anonymizeIp']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
