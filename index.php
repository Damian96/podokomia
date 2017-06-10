<?php
    require_once('includes/scripts/functions.php');
    require_once('includes/scripts/language.php');

    Functions::clearPrevCookies();
    $cookieLanguage = new CookieLanguage();

    $contentFile = Functions::getActionFile(dirname(__FILE__));
    define('FILE', $contentFile);
    define('ACTION', basename($contentFile, '.php'));

    $action = basename($contentFile, '.php');
    $title = Functions::getTitle($cookieLanguage->value, $action);
    define('TITLE', $title);

    $basePath = 'includes/internalization/' . $cookieLanguage->value . '/';
?>
<!DOCTYPE html>
<?php require_once($basePath . "head.php"); ?>
<body>
	<?php require_once($basePath . "header.php"); ?>
    <main id="main">
        <?php
            require_once($basePath . "sidebar.php");
            require_once($basePath . constant('FILE'));
        ?>
    </main>
    <?php require_once($basePath . "footer.php"); ?>
    <script src="includes/js/change-lang.js"></script>
    <script src="includes/js/slideshow.js"></script>
    <script src="includes/js/onLoad.js"></script>
</body>
</html>