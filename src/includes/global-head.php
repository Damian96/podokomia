<!-- <?php echo $functions->getDescription(constant('LANG')); ?> !-->
<meta charset="UTF-8">
<title><?php echo constant('TITLE')?></title>
<link rel="icon" href="<?php echo constant('BASEURL') ?>/favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <Search Engines Tags> -->
<meta name="description" content="<?php echo $functions->getDescription(constant('LANG')); ?>">
<meta name="keywords" content="<?php echo $functions->getKeywords(constant('LANG')); ?>">
<meta name="googlebot" content="index,follow">
<meta name="googlebot-image" content="noindex">
<!-- </Search Engines Tags> -->
<!-- <Global CSS> -->
<link rel="stylesheet" href="<?php echo constant('BASEURL') ?>/css/layout.css">
<!-- </Global CSS -->
<!-- <Single Page CSS> -->
<link rel="stylesheet" href="<?php echo constant('BASEURL') ?>/css/<?php echo constant('ACTION')?>.css">
<!-- </Single Page CSS> -->
<!-- <Module CSS> -->
<link rel="stylesheet" href="<?php echo constant('BASEURL') ?>/css/slideshow.css">
<?php if (in_array(constant('ACTION'), ['services', 'articles'], TRUE)): ?>
<link rel="stylesheet" type="text/css" href="<?php echo constant('BASEURL') ?>/css/modal-image.css">
<?php endif ?>
<!-- <Module CSS> -->
<!-- <Bootstrap CSS> !-->
<link rel="stylesheet" href="<?php echo constant('BASEURL') ?>/css/bootstrap.css" type="text/css">
<!-- </Bootstrap CSS> !-->
<!-- <Google Font CSS> -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<!-- </Google Font CSS> -->
<!-- <Icons CSS> -->
<link rel="stylesheet" href="<?php echo constant('BASEURL') ?>/css/podokomia.css" type="text/css">
<!--[if IE]>
<link rel="stylesheet" href="<?php echo constant('BASEURL') ?>/css/podokomia-ie7.css" type="text/css">
<![endif]-->
<!-- </Icons CSS> !-->
<!-- <Responsive CSS> -->
<!-- <link rel="stylesheet" media="(max-width : 769px)" href="<?php echo BASEURL; ?>/css/extra-small.css">
<link rel="stylesheet" media="(max-width : 320px)" href="<?php echo constant('BASEURL') ?>/css/max-320.css">
<link rel="stylesheet" media="(min-width : 321px) and (max-width : 480px)" href="<?php echo constant('BASEURL') ?>/css/320-480.css">
<link rel="stylesheet" media="(min-width : 481px) and (max-width : 768px)" href="<?php echo constant('BASEURL') ?>/css/480-768.css"> !-->
<link rel="stylesheet" media="(min-width : 769px) and (max-width : 980px)" href="<?php echo constant('BASEURL') ?>/css/768-980.css">
<link rel="stylesheet" media="(min-width : 981px) and (max-width : 1220px)" href="<?php echo constant('BASEURL') ?>/css/980-1220.css">
<link rel="stylesheet" media="(min-width : 1221px) and (max-width : 1440px)" href="<?php echo constant('BASEURL') ?>/css/1220-1440.css">
<link rel="stylesheet" media="(min-width : 1441px) and (max-width : 1824px)" href="<?php echo constant('BASEURL') ?>/css/1440-1824.css">
<link rel="stylesheet" media="(min-width : 1825px)" href="<?php echo constant('BASEURL') ?>/css/min-1824.css">
<!-- </Responsive CSS> -->
<!-- <Google Analytics Script> -->
<?php if ($functions->isLocal()): ?>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag('js',new Date());gtag('config','UA-74692550-9');</script>
<?php endif ?>
<!-- </Google Analytics Script> -->
<!-- <Javascript> -->
<!-- <script src="<?php echo BASEURL . '/js/onLoad.js' ?>"></script> -->
<script src="<?php echo BASEURL . '/js/servicesMod.js' ?>"></script>
<script src="<?php echo BASEURL . '/js/slideshow.js' ?>"></script>
<!-- </Javascript> -->
<!-- <Twitter Timeline JS> !-->
<script type="text/javascript">
window.twttr=function(a,b,c){var d,e=a.getElementsByTagName(b)[0],f=window.twttr||{};return a.getElementById(c)?f:(d=a.createElement(b),d.id=c,d.src="https://platform.twitter.com/widgets.js",e.parentNode.insertBefore(d,e),f._e=[],f.ready=function(a){f._e.push(a)},f)}(document,"script","twitter-wjs");
</script>
<!-- </Twitter Timeline JS> -->