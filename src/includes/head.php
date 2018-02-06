<!-- <?php echo $functions->getDescription(LANG); ?> !-->
<meta charset="UTF-8">
<title><?php echo $functions->getTitle(LANG, ACTION) ?></title>
<link rel="icon" href="<?php echo BASEURL ?>/favicon.ico" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <Search Engines Tags> -->
<meta name="description" content="<?php echo $functions->getDescription(LANG); ?>">
<meta name="keywords" content="<?php echo $functions->getKeywords(LANG); ?>">
<meta name="googlebot" content="index,follow">
<meta name="googlebot-image" content="noindex">
<!-- </Search Engines Tags> -->
<!-- <Global CSS> -->
<link rel="stylesheet" href="<?php echo BASEURL ?>/css/layout.css">
<!-- </Global CSS -->
<!-- <Single Page CSS> -->
<link rel="stylesheet" href="<?php echo BASEURL ?>/css/<?php echo ACTION?>.css">
<!-- </Single Page CSS> -->
<!-- <Module CSS> -->
<?php if (in_array(ACTION, ['services', 'articles'], TRUE)): ?>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/css/modal-image.css">
<?php endif ?>
<!-- <Module CSS> -->
<!-- <Bootstrap 3.3.7 CSS> !-->
<link rel="stylesheet" href="<?php echo BASEURL ?>/css/bootstrap.css" type="text/css">
<!-- </Bootstrap CSS> !-->
<!-- </JQuery 1.12.4> !-->
<script src="<?php echo BASEURL ?>/js/jquery.min.js" type="text/javascript"></script>
<!-- </JQuery> !-->
<!-- </Bootstrap 3.3.7 JS> !-->
<script src="<?php echo BASEURL ?>/js/bootstrap.min.js" type="text/javascript"></script>
<!-- </Bootstrap JS> !-->
<!-- <Google Font CSS> -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<!-- </Google Font CSS> -->
<!-- <Icons CSS> -->
<!--[if IE]>
<link rel="stylesheet" href="<?php echo BASEURL ?>/css/pk-icons-ie7.css" type="text/css">
<![endif]-->
<!--[if !IE]>
<link rel="stylesheet" href="<?php echo BASEURL ?>/css/pk-icons.css" type="text/css">
<![endif]-->
<!-- </Icons CSS> !-->
<!-- <Responsive CSS> -->
<link rel="stylesheet" media="(max-width : 768px)" href="<?php echo BASEURL; ?>/css/extra-small.css">
<link rel="stylesheet" media="(min-width : 769px) and (max-width : 992px)" href="<?php echo BASEURL; ?>/css/small.css">
<link rel="stylesheet" media="(min-width : 992px) and (max-width : 1200px)" href="<?php echo BASEURL; ?>/css/medium.css">
<!-- </Responsive CSS> -->
<!-- <Google Analytics Script> -->
<?php if (!$functions->isLocal()): ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-74692550-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-74692550-9');
</script>
<?php endif ?>
<!-- </Google Analytics Script> -->
<!-- <Javascript> -->
<?php if (ACTION === 'services' || ACTION === 'articles'): ?>
<script src="<?php echo BASEURL . '/js/image-modal.js' ?>"></script>
<?php endif ?>
<!-- </Javascript> -->
<!-- <Twitter Timeline JS> !-->
<script type="text/javascript">
if(window.innerWidth >= 768) {
  window.twttr=function(a,b,c){var d,e=a.getElementsByTagName(b)[0],f=window.twttr||{};return a.getElementById(c)?f:(d=a.createElement(b),d.id=c,d.src="https://platform.twitter.com/widgets.js",e.parentNode.insertBefore(d,e),f._e=[],f.ready=function(a){f._e.push(a)},f)}(document,"script","twitter-wjs");
}
</script>
<!-- </Twitter Timeline JS> -->