<?php
    require_once('includes/scripts/functions.php');
    require_once('includes/scripts/language.php');

	$functions = new Functions();

    $functions->clearOldCookies();
    $contentFile = $functions->getActionFile();
    define('FILE', $contentFile . '.php');
    define('ACTION', $contentFile);
	define('BASEURL', $functions->getBaseUrl());
	define('BASEPATH', $functions->getBasePath());

	if(isset($_GET['action']) && !empty($_GET['action']) && in_array($_GET['action'], $functions->actions)) {

		$language = new Language($functions->getActionLanguage($_GET['action']));

	} else {

		$language = new Language('gr');

	}

	define('LANG', $language->getLanguage());
	define('COOKIE', constant('LANG'));
	define('TITLE', $functions->getTitle(constant('LANG'), constant('ACTION')));

	$basePath = './includes/internalization/' . constant('LANG') . '/';
?>
<!DOCTYPE html>
<html lang="<?=LANG?>">
<?php require_once($basePath . "head.php"); ?>
<body>
	<div id="wrapper" class="col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
<?php require_once($basePath . "header.php"); ?>
        <script src="<?= BASEURL . '/js/slideshow.min.js' ?>"></script>
		<main id="main" class="<?= ACTION ?>">
			<aside id="sibebar" class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
<?php require_once($basePath . "sidebar.php"); ?>

				<div id="fb-root"></div>
				<script type="text/javascript">(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/el_GR/sdk.js#xfbml=1&version=v2.9";
				fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
			</aside>
			<div id="content" class="col-xm-12 col-sm-12 col-md-9 col-lg-9">
<?php require_once($basePath . constant('FILE')); ?>

			</div>
		</main>
	</div>
<?php require_once($basePath . "footer.php"); ?>
	<script src="<?= BASEURL . '/js/servicesMod.min.js' ?>"></script>
	<script src="<?= BASEURL . '/js/onLoad.min.js' ?>"></script>
</body>
</html>