<?php
class Language {

    public $languages = [
        'gr',
        'en',
    ];
    public $activeLanguage = 'gr';

    function __construct($actionLanguage) {

        if (!isset($_GET['language']) || empty($_GET['language']) || !in_array($_GET['language'], $this->languages)) {

            if (!empty($actionLanguage)) {

                $this->activeLanguage = $actionLanguage;

            } else if (!isset($_COOKIE['language']) || empty($_COOKIE['language']) || !in_array($_COOKIE['language'], $this->languages)) {

                $this->activeLanguage = $_COOKIE['language'];

            }

        } else if (!empty($_GET['language']) && in_array($_GET['language'], $this->languages)) {

            $this->activeLanguage = $_GET['language'];

        }

        setcookie('language', $this->activeLanguage, time() + 432000);

    }

    function getLanguage() {
        return $this->activeLanguage;
    }

}
?>