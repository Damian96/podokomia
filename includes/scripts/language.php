<?php
class CookieLanguage {
    public $languages = [
        'el',
        'en',
    ];
    public $value = 'el';

    function __construct() {
        if(!isset($_GET['pd_lang']) || empty($_GET['pd_lang']) || !in_array($_GET['pd_lang'], $this->languages)) {
            if(!isset($_COOKIE['pd_lang']) || empty($_COOKIE['pd_lang']) || !in_array($_COOKIE['pd_lang'], $this->languages)) {
                $this->value = 'el';
                setcookie('pd_lang', $this->value, time() + 86400 * 5);
            } else {
                $this->value = $_COOKIE['pd_lang'];
            }
            define('COOKIE', $this->value);
        } else {
            $this->value = $_GET['pd_lang'];
            $filteredUrl = Functions::getUrlCurrently(['pd_lang']);
            setcookie('pd_lang', $this->value, time() + 86400 * 5);
            define('COOKIE', $this->value);
            header('location:' . $filteredUrl);
        }
    }
}
?>