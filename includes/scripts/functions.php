<?php
/**
 * The main helper-function class.
 * @property string[] ACTIONS All the possible actions/pages of the site.
 */
class Functions {
    const ACTIONS = [
        'index',
        'αρχική',
        'υπηρεσίες',
        'άρθρα',
        'επικοινωνία',
        'homepage',
        'services',
        'articles',
        'contact',
    ];
    
	/**
	 * Makes the page title according to the current language and action/page.
	 * @param  string $lang The language.
	 * @param  string $action The action/page.
	 * @return string The formatted title.
	 */
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
	
	/**
	 * Makes the language links according to the specified action/page in all languages.
	 * @param  string $name The current action/page.
	 * @return array The actions/pages of the links.
	 */
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

    /**
     * Searches the /podokomia/inludes/internalization/en/ according with the specified name.
     * @param  string $name The filename to search.
     * @return string The filename that has been found or if not 'homepage.php';
     */
    public static function searchContentFile($name) {
        $filename = glob(self::getBasePath() . '/includes/internalization/en/' . $name . '.php');
        if($filename && (count($filename) == 1)) {
            return basename($filename[0]);
        } else {
            return 'homepage.php';
        }
    }

    /**
     * Gets the specified action according to the given $_GET['action'] variable.
     * @return string The proper action name to be used.
     */
    public static function getActionFile() {
		if(!isset($_GET) || !isset($_GET['action']) || empty($_GET['action']) || !in_array($_GET['action'], self::ACTIONS, true)) {
			return 'homepage';
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
		return $action;
    }
	
	/**
	 * Gets the current page language according to the given action.
	 * @param  string|NULL $action The action to be tested.
	 * @return string The correct language.
	 */
	public static function getLanguage($action) {
		$language = 'el';
		if(empty($action) || !in_array($action, self::ACTIONS, true)) {
			return $language;
		}
		if(($action === 'αρχική') || ($action === 'υπηρεσίες') || ($action === 'άρθρα') || ($action === 'επικοινωνία')) {
			$language = 'el';
		} else if(($action === 'index') || ($action === 'homepage') || ($action === 'services') || ($action === 'articles') || ($action === 'contact')) {
			$language = 'en';
		}
		return $language;
	}

    /**
     * Clears all the cookies that are used until today.
     */
    public static function clearPrevCookies() {
        if(!isset($_COOKIE)) {
            return;
        }
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
	
	/**
	 * Gets the current domain base URL.
	 * @return string The base URL.
	 */
	public static function getBaseUrl() {
		$pageURL = (isset($_SERVER["HTTPS"]) && ($_SERVER["HTTPS"] == "on")) ? "https://" : "http://";

        $pageURL .= $_SERVER["SERVER_NAME"];

        if($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= ":" . $_SERVER["SERVER_PORT"];
        }
		
		if(($_SERVER['SERVER_NAME'] === 'localhost') || (strpos($_SERVER['SERVER_NAME'], '192.168.1') > -1)) {
			$pageURL .= '/podokomia';
		}
	
		return $pageURL;
	}
    
    /**
     * Gets the current server base path.
     * @return string The base path.
     */
    public static function getBasePath() {
        if(($_SERVER['SERVER_NAME'] === 'localhost') || (strpos($_SERVER['SERVER_NAME'], '192.168.1') > -1)) {
            return $_SERVER['DOCUMENT_ROOT'] . '/podokomia';
        }
        return $_SERVER['DOCUMENT_ROOT'];
    }
}
?>