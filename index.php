<?php
    require_once('includes/scripts/functions.php');
    clearPrevCookies();

    $contentFile = getActionFile(dirname(__FILE__));

    define('FILE', $contentFile);
    define('ACTION', basename($contentFile, '.php'));

    include 'includes/scripts/language.php';

    defined('TITLE') or define('TITLE', 'Podokomia');
    $basePath = 'includes/internalization/' . $_COOKIE['pd_lang'] . '/';
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
    <script src="includes/js/change-lang.min.js"></script>
    <script src="includes/js/slideshow.min.js"></script>
    <script src="includes/js/onLoad.min.js"></script>
</body>
</html>