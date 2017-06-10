<?php

function getTitle($lang, $act) {
    if($lang == 'en') {
        return ucfirst($act) . ' - Podokomia';
    } else {
        switch($act) {
            case 'homepage':
                return 'Αρχική Σελίδα - Podokomia';
            case 'services':
                return 'Υπηρεσίες - Podokomia';
            case 'articles':
                return 'Άρθρα';
            case 'contact':
                return 'Επικοινωνία - Podokomia';
            default:
                return 'Podokomia';
        }
    }
}

function searchContentFile($base, $name) {
    $filename = glob($base . '/includes/internalization/el/' . $name . '.php');
    if($filename && (count($filename) == 1)) {
        return basename($filename[0]);
    } else {
        return 'homepage.php';
    }
}

function getActionFile($baseP) {
    $action = 'homepage';
    if(isset($_GET['action']) && !empty($_GET['action'])) {
        $action = strtolower($_GET['action']);
    }
    return searchContentFile($baseP, $action);
}

function clearPrevCookies() {
    if(isset($_COOKIE['pd.lang'])) {
        unset($_COOKIE['pd.lang']);
    }
    if(isset($_COOKIE['pref_lang'])) {
        unset($_COOKIE['pref_lang']);
    }
}

?>