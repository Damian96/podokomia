<?php
    require_once('includes/scripts/functions.php');
    require_once('includes/scripts/language.php');

    Functions::clearPrevCookies();
    $cookieLanguage = new CookieLanguage();

    $contentFile = Functions::getActionFile(dirname(__FILE__));
    define('FILE', $contentFile);
    define('ACTION', basename($contentFile, '.php'));
	
    $action = basename($contentFile, '.php');
	$action = $action === 'homepage' ? 'index' : $action;
    $title = Functions::getTitle($cookieLanguage->value, $action);
    define('TITLE', $title);

    $basePath = 'includes/internalization/' . $cookieLanguage->value . '/';
?>
<!DOCTYPE html>
<html lang="<?=$cookieLanguage->value?>">
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
		<main id="main" class="<?= $action ?>">
			<aside id="sibebar" class="col-sm-3 col-md-3 col-lg-3">
<?php require_once($basePath . "sidebar.php"); ?>
			</aside>
			<div id="content" class="col-sm-12 col-md-9 col-lg-9">			
<?php require_once($basePath . constant('FILE')); ?>
			
			</div>
		</main>
	</div>
<?php require_once($basePath . "footer.php"); ?>
	
	<script src="includes/js/change-lang.js"></script>
	<script src="includes/js/slideshow.js"></script>
	<script src="includes/js/onLoad.js"></script>
</body>
</html>