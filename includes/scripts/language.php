<?php
    $languages = [
        'el',
        'en',
    ];

    if(!isset($_COOKIE['pd_lang']) || empty($_COOKIE['pd_lang']) || !in_array($_COOKIE['pd_lang'], $languages)) {
        $cookieValue = 'el';
        setcookie('pd_lang', $cookieValue, time() + 86400 * 5);
    } else {
        $cookieValue = $_COOKIE['pd_lang'];
    }

    $action = basename(getActionFile(constant('FILE')), '.php');
    $title = getTitle($cookieValue, $action);
    define('TITLE', $title)

?>