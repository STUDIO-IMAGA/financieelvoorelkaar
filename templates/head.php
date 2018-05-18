<?php use Roots\Sage\Assets; ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="<?= Assets\asset_path('images/favicon.png') ?>" />
  <?php wp_head(); ?>
  <?php if ( is_page( 'routeplanner' ) ): ?>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?language=nl&key=<?= GOOGLE_MAPS_API; ?>"></script>
  <?php endif; ?>
</head>
