<?php
class Language {

    public $languages = [
        'gr',
        'en',
    ];
    public $activeLanguage = 'gr';

    function __construct($actionLanguage = '', $functions) {

        if (isset($_GET['language']) && !empty($_GET['language']) && in_array($_GET['language'], $this->languages, true))
            $this->activeLanguage = $_GET['language'];
        else {

            if (!empty($actionLanguage))
                $this->activeLanguage = $actionLanguage;
            else if (isset($_COOKIE['language']) && !empty($_COOKIE['language']) && in_array($_COOKIE['language'], $this->languages, true))
                $this->activeLanguage = $_COOKIE['language'];

        }

        setcookie('language', $this->activeLanguage, time() + 432000, $functions->isLocal() ? '/podokomia/build' : '/');

    }

    function getLanguage() {
        return $this->activeLanguage;
    }

}
?>