<?php
    require_once('includes/scripts/functions.php');
    require_once('includes/scripts/language.php');

	$functions = new Functions();

    $functions->clearOldCookies();
	define('ACTION', $functions->getActionFile());
    define('FILE', ACTION . '.php');
	define('BASEURL', $functions->getBaseUrl());
	define('BASEPATH', $functions->getBasePath());

	if(isset($_GET['action']) && !empty($_GET['action']) && in_array($_GET['action'], $functions->actions)) {

		$language = new Language($functions->getActionLanguage($_GET['action']));

	} else {

		$language = new Language('gr');

	}

	define('LANG', $language->getLanguage());
	define('COOKIE', constant('LANG'));
	define('TITLE', $functions->getTitle(LANG, ACTION));

	$basePath = BASEPATH . '/includes/internalization/' . LANG . '/';
?>
<!DOCTYPE html>
<html lang="<?php echo LANG === 'gr' ? 'el' : 'en' ?>">
<?php require_once($basePath . "head.php"); ?>
<body>
	<div id="wrapper" class="col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
<?php require_once($basePath . "header.php"); ?>
        <script src="<?php echo BASEURL . '/js/slideshow.min.js' ?>"></script>
		<main id="main" class="<?php echo ACTION ?>">
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
<?php	if(in_array(constant('ACTION'), ['services', 'articles'], TRUE))
			require_once(constant('BASEPATH') . '/includes/image-modal.php'); ?>
<?php require_once($basePath . "footer.php"); ?>
	<script src="<?php echo BASEURL . '/js/servicesMod.min.js' ?>"></script>
	<script src="<?php echo BASEURL . '/js/onLoad.min.js' ?>"></script>
</body>
</html>