<!-- ===================== metatags ===================== -->
<meta charset="utf-8">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">

<!-- ===================== css ===================== -->
<link rel="stylesheet" href="css/taccargo-theme/jquery-ui-1.9.2.custom.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/colorbox.css" />
<link rel="stylesheet" href="css/layout.css" type="text/css">
<!-- ===================== scripts ===================== -->
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
<script src="js/jquery.colorbox-min.js" type="text/javascript"></script
<noscript>
<link rel="stylesheet" href="css/adapt/mobile.min.css" />
</noscript>
<script>
// Edit to suit your needs.
var ADAPT_CONFIG = {
  // Where is your CSS?
  path: 'css/adapt/',

  // false = Only run once, when page first loads.
  // true = Change on window resize and page tilt.
  dynamic: true,

  // First range entry is the minimum.
  // Last range entry is the maximum.
  // Separate ranges by "to" keyword.
  range: [
    '0px    to 760px  = mobile.css',
    '760px  to 980px  = 720.css',
    '980px  to 1280px = 960.css',
    '1280px to 1600px = 1200.css',
    '1600px to 1940px = 1560.css',
    '1940px to 2540px = 1920.css',
    '2540px           = 2520.css'
  ]
};
</script>
<script src="js/adapt.min.js"></script>
<script src="js/scripts.js" type="text/javascript"></script>
<!-- <script src="js/scripts.js" type="text/javascript"></script> -->
<!-- ===================== favicon ===================== -->
<link href=imagens/favicon.ico rel="shortcut icon" />
<!-- ===================== Head ===================== -->
<title>TacCargo</title>
<?php

    $menu['empresa'] = "";
    $menu['servicos'] = "";
    $menu['cotacoes'] = "";
    $menu['coletas'] = "";
    $menu['links'] = "";
    $menu['contato'] = ""; ?>