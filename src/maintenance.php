<?php
	require_once('includes/scripts/functions.php');

	$functions = new Functions();

	define('BASEURL', $functions->getBaseUrl());

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="robots" content="noindex,nofollow">
		<title>Podokomia - Maintenance</title>
		<link rel="stylesheet" href="<?php echo BASEURL ?>/css/maintenance.css"/>
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	</head>
	<body>
		<img id="maintenance-sign" src="<?php echo BASEURL ?>/images/maintenance.png">
		<div id="maintenance-message">The site is currently under maintenance.<br>
		Come back in a while and maybe it will be ready.</div>
	</body>
</html>