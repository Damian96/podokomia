<?php
    require_once('includes/scripts/functions.php');
    require_once('includes/scripts/language.php');

    Functions::clearPrevCookies();
    $contentFile = Functions::getActionFile(dirname(__FILE__));
    define('FILE', $contentFile);
    define('ACTION', basename($contentFile, '.php'));
	define('LINK', Functions::getBaseUrl());

	if(isset($_GET['action']) && !empty($_GET['action'])) {
		define('LANG', Functions::getLanguage($_GET['action']));
	} else {
		define('LANG', Functions::getLanguage('αρχική'));
	}
	
	$title = Functions::getTitle(LANG, ACTION);
    define('TITLE', $title);

	$basePath = 'includes/internalization/' . LANG . '/';
?>
<!DOCTYPE html>
<html lang="<?=LANG?>">
<?php require_once($basePath . "head.php"); ?>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/el_GR/sdk.js#xfbml=1&version=v2.9";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div id="wrapper" class="col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
<?php require_once($basePath . "header.php"); ?>
        <script src="<?= LINK . '/js/slideshow.min.js' ?>"></script>
		<main id="main" class="<?= ACTION ?>">
			<aside id="sibebar" class="col-sm-3 col-md-3 col-lg-3">
<?php require_once($basePath . "sidebar.php"); ?>
			</aside>
			<div id="content" class="col-sm-12 col-md-9 col-lg-9">			
<?php require_once($basePath . constant('FILE')); ?>
			
			</div>
		</main>
	</div>
<?php require_once($basePath . "footer.php"); ?>
	<script src="<?= LINK . '/js/servicesMod.min.js' ?>"></script>
	<script src="<?= LINK . '/js/onLoad.min.js' ?>"></script>
</body>
</html>