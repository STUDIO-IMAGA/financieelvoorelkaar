<?php use Roots\Sage\Assets; ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Financieel voor elkaar, voor al uw financiële zaken! Bel 0512-549494 of mail naar info@financieelvoorelkaar.nl"/>
	<meta name="robots" content="noopd, noydir" />

	<meta property="og:title" content="Financieel voor elkaar | Financieel voor elkaar" />
	<meta property="og:description" content="Financieel voor elkaar, voor al uw financiële zaken! Bel 0512-549494 of mail naar info@financieelvoorelkaar.nl" />
	<meta property="og:image" content="<?= Assets\asset_path('images/favicon.png') ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="Financieel voor elkaar" />
	<meta property="og:url" content="https://www.financieelvoorelkaar.nl/" />

	<meta name="twitter:card" content="summary" />
	<meta name="twitter:url" content="https://www.financieelvoorelkaar.nl/" />
	<meta name="twitter:title" content="Financieel voor elkaar | Financieel voor elkaar" />
	<meta name="twitter:description" content="Financieel voor elkaar, voor al uw financiële zaken! Bel 0512-549494 of mail naar info@financieelvoorelkaar.nl" />
	<meta name="twitter:image" content="<?= Assets\asset_path('images/favicon.png') ?>" />
	<meta name="twitter:creator:id" content="" />

	<link rel="canonical" href="https://www.financieelvoorelkaar.nl/" />
  <link rel="icon" type="image/x-icon" href="<?= Assets\asset_path('images/favicon.png') ?>" />
  <?php wp_head(); ?>
  <?php if ( is_page( 'routeplanner' ) ): ?>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?language=nl&key=<?= GOOGLE_MAPS_API; ?>"></script>
  <?php endif; ?>
  <script type="text/javascript">
  window.onload = function () {
    trackExitLinks();
    trackPdfLinks()
};
var trackExitLinks = function () {
        var a = /^(https?:\/\/[^\/]+).*$/;
        var b = window.location.href.replace(a, "$1");
        var c = new RegExp("^" + b.replace(/\./, "\\."));
        var d = document.querySelectorAll("a");
        for (var e = 0; e < d.length; e++) {
            var f = d[e].href;
            if (f == "" || c.test(f) || !/^http/.test(f)) {
                continue
            } else if (d[e].className.indexOf("gtb") != -1) {
                firstPiece = f.indexOf(".");
                newhref = f.substring(firstPiece + 1);
                secondPiece = newhref.indexOf(".");
                newhref = f.substring(firstPiece + 1, firstPiece + secondPiece + 1);
                if(d[e].hasAttribute("onclick") == 0){
                    d[e].setAttribute("onclick", "_gaq.push(['_trackEvent', 'Advertentie', '" + newhref + " ( " + f + " )', '" + window.location.href + "']);")
                }
            } else {
                if(d[e].hasAttribute("onclick") == 0){
                    d[e].setAttribute("onclick", "_gaq.push(['_trackEvent', 'external-link', '" + f + "', '"+window.location.href+"']);")
                }
            }
        }
    };
var trackPdfLinks = function () {
        var a = document.querySelectorAll("a");
        for (var b = 0; b < a.length; b++) {
            var c = a[b].href;
            if (c.indexOf("pdf") != -1 && a[b].hasAttribute("onclick") == 0) {
                a[b].setAttribute("onclick", "_gaq.push(['_trackEvent', 'download', 'pdf', '" + c + "']);")
            }
            if (c.indexOf("zip") != -1 && a[b].hasAttribute("onclick") == 0) {
                a[b].setAttribute("onclick", "_gaq.push(['_trackEvent', 'download', 'zip', '" + c + "']);")
            }
            if (c.indexOf("rar") != -1 && a[b].hasAttribute("onclick") == 0) {
                a[b].setAttribute("onclick", "_gaq.push(['_trackEvent', 'download', 'rar', '" + c + "']);")
            }
            if (c.indexOf("doc") != -1 && a[b].hasAttribute("onclick") == 0) {
                a[b].setAttribute("onclick", "_gaq.push(['_trackEvent', 'download', 'doc', '" + c + "']);")
            }
        }
    }
  </script>
  <script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-52624427-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
