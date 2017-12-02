<meta charset="UTF-8">
<title><?php echo constant('TITLE')?></title>
<link rel="icon" href="<?php echo constant('BASEURL') ?>/favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="geo.placename" content="&Theta;&epsilon;&sigma;&sigma;&alpha;&lambda;&omicron;&nu;ί&kappa;&eta;">
<meta name="geo.position" content="40.62;22.96">
<meta name="ICBM" content="40.62, 22.96">
<!-- <Global CSS> -->
<link rel="stylesheet" href="<?php echo constant('BASEURL') ?>/css/layout.min.css">
<!-- </Global CSS -->
<!-- <Single Page CSS> -->
<link rel="stylesheet" href="<?php echo constant('BASEURL') ?>/css/<?php echo constant('ACTION')?>.min.css">
<!-- </Single Page CSS> -->
<!-- <Module CSS> -->
<link rel="stylesheet" href="<?php echo constant('BASEURL') ?>/css/slideshow.min.css">
<?php if(in_array(constant('ACTION'), ['services', 'articles'], TRUE)) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo constant('BASEURL') ?>/css/modal-image.min.css">
<?php } ?>
<!-- <Module CSS> -->
<!-- <Plugins CSS> -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link rel="stylesheet" href="<?php echo constant('BASEURL') ?>/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo constant('BASEURL') ?>/css/icons.min.css" type="text/css">
<!-- <Responsive CSS> -->
<link rel="stylesheet" media="(max-width : 320px)" href="<?php echo constant('BASEURL') ?>/css/max-320.min.css">
<link rel="stylesheet" media="(min-width : 321px) and (max-width : 480px)" href="<?php echo constant('BASEURL') ?>/css/320-480.min.css">
<link rel="stylesheet" media="(min-width : 481px) and (max-width : 768px)" href="<?php echo constant('BASEURL') ?>/css/480-768.min.css">
<link rel="stylesheet" media="(min-width : 769px) and (max-width : 980px)" href="<?php echo constant('BASEURL') ?>/css/768-980.min.css">
<link rel="stylesheet" media="(min-width : 981px) and (max-width : 1220px)" href="<?php echo constant('BASEURL') ?>/css/980-1220.min.css">
<link rel="stylesheet" media="(min-width : 1221px) and (max-width : 1440px)" href="<?php echo constant('BASEURL') ?>/css/1220-1440.min.css">
<link rel="stylesheet" media="(min-width : 1441px) and (max-width : 1824px)" href="<?php echo constant('BASEURL') ?>/css/1440-1824.min.css">
<link rel="stylesheet" media="(min-width : 1825px)" href="<?php echo constant('BASEURL') ?>/css/min-1824.min.css">
<!-- </Responsive CSS> -->
<script src="<?php echo constant('BASEURL') ?>/js/twitter-widj.min.js"></script>
<!-- <Google Analytics Script> -->
<?php if(($_SERVER['SERVER_NAME'] !== 'localhost') && (strpos($_SERVER['SERVER_NAME'], '192.168.1') == -1)) { ?>
<script>!function(a,b,c,d,e,f,g){a.GoogleAnalyticsObject=e,a[e]=a[e]||function(){(a[e].q=a[e].q||[]).push(arguments)},a[e].l=1*new Date,f=b.createElement(c),g=b.getElementsByTagName(c)[0],f.async=1,f.src=d,g.parentNode.insertBefore(f,g)}(window,document,"script","https://www.google-analytics.com/analytics.js","ga"),ga("create","UA-74692550-9","auto"),ga("send","pageview");</script>
<?php } ?>
<!-- </Google Analytics Script> -->
<!-- <Javascript> -->
<script src="<?php echo BASEURL . '/js/onLoad.min.js' ?>"></script>
<script src="<?php echo BASEURL . '/js/servicesMod.min.js' ?>"></script>
<script src="<?php echo BASEURL . '/js/slideshow.min.js' ?>"></script>
<!-- </Javascript> -->