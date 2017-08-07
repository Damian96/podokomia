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
                setcookie('pd_lang', $this->value, time() + 432000);
            } else {
                $this->value = $_COOKIE['pd_lang'];
            }
            define('COOKIE', $this->value);
        } else {
            $this->value = $_GET['pd_lang'];
            setcookie('pd_lang', $this->value, time() + 432000);
            define('COOKIE', $this->value);
			$url = Functions::getBaseUrl() . '/index.php';
			$url .= (isset($_GET['action']) && !empty($_GET['action'])) ? '?action=' . $_GET['action'] : '';
			$url .= '&pd_lang' . $this->value;
            header("location:$url");
        }
    }
}
?>