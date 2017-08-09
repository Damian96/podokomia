<?php
class Functions {
	public static function getTitle($lang, $action) {
		$suffix = ($lang === 'el') ? ' - Ποδοκομία Αγελάδων' : ' - Cattle Hoof Trimming';
		if($action === 'homepage') {
			return (($lang === 'el') ? 'Αρχική' : 'Homepage') . $suffix;
		} else if($action === 'services') {
			return (($lang === 'el') ? 'Υπηρεσίες' : 'Services') . $suffix;
		} else if($action === 'articles') {
			return (($lang === 'el') ? 'Άρθρα' : 'Articles') . $suffix;
		} else if($action === 'contact') {
			return (($lang === 'el') ? 'Επικοινωνία' : 'Contact') . $suffix;
		} else {
			return $suffix;
		}
	}
	
	public static function getLanguageLinks($name) {
		if(($name === 'υπηρεσίες') || ($name === 'services')) {
			return [
				'υπηρεσίες',
				'services',
			];
		} else if(($name === 'άρθρα') || ($name === 'articles')) {
			return [
				'άρθρα',
				'articles',
			];
		} else if(($name === 'επικοινωνία') || ($name === 'contact')) {
			return [
				'επικοινωνία',
				'contact',
			];
		} else {
			return [
				'αρχική',
				'homepage',
			];
		}
	}

    public static function searchContentFile($base, $name) {
        $filename = glob($base . '/includes/internalization/el/' . $name . '.php');
        if($filename && (count($filename) == 1)) {
            return basename($filename[0]);
        } else {
            return 'homepage.php';
        }
    }

    public static function getActionFile($baseP) {
        $action = 'homepage';
		if(!isset($_GET) || !isset($_GET['action']) || empty($_GET['action'])) {
			return 'homepage.php';
		}
		if(($_GET['action'] === 'αρχική') || ($_GET['action'] === 'homepage') || ($_GET['action'] === 'index')) {
			$action = 'homepage';
		} else if(($_GET['action'] === 'υπηρεσίες') || ($_GET['action'] === 'services')) {
			$action = 'services';
		} else if(($_GET['action'] === 'άρθρα') || ($_GET['action'] === 'articles')) {
			$action = 'articles';
		} else if(($_GET['action'] === 'επικοινωνία') || ($_GET['action'] === 'contact')) {
			$action = 'contact';
		}
		$action = strtolower($action);
        return self::searchContentFile($baseP, $action);
    }
	
	public static function getLanguage($action) {
		$language = 'el';
		if(empty($action)) {
			return $language;
		}
		if(($action === 'αρχική') || ($action === 'υπηρεσίες') || ($action === 'άρθρα') || ($action === 'επικοινωνία')) {
			$language = 'el';
		} else if(($action === 'index') || ($action === 'homepage') || ($action === 'services') || ($action === 'articles') || ($action === 'contact')) {
			$language = 'en';
		}
		return $language;
	}

    public static function clearPrevCookies() {
        if(isset($_COOKIE['pd.lang'])) {
            unset($_COOKIE['pd.lang']);
        }
        if(isset($_COOKIE['pref_lang'])) {
            unset($_COOKIE['pref_lang']);
        }
        if(isset($_COOKIE['prefLang'])) {
            unset($_COOKIE['prefLang']);
        }
    }
	
	public static function getBaseUrl() {
		$pageURL = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on" ? "https://" : "http://";

        $pageURL .= $_SERVER["SERVER_NAME"];

        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= ":".$_SERVER["SERVER_PORT"];
        }
		
		if(($_SERVER['SERVER_NAME'] === 'localhost') || (strpos($_SERVER['SERVER_NAME'], '192.168.1') > -1)) {
			$pageURL .= '/podokomia';
		}
	
		return $pageURL;
	}
    
    public static function getBasePath() {
        if(($_SERVER['SERVER_NAME'] === 'localhost') || (strpos($_SERVER['SERVER_NAME'], '192.168.1') > -1)) {
            return $_SERVER['DOCUMENT_ROOT'] . '/podokomia';
        }
        return $_SERVER['DOCUMENT_ROOT'];
    }
}
?>