<?php
class Functions {
	public static function getReverseAction($lang, $name) {
		if($lang === 'el') {
			if($name === 'αρχική') {
				return 'homepage';
			} else if($name === 'υπηρεσίες') {
				return 'services';
			} else if($name === 'άρθρα') {
				return 'articles';
			} else if($name === 'επικοινωνία') {
				return 'contact';
			}
		} else if($lang === 'en') {
			if($name === 'homepage') {
				return 'αρχική';
			} else if($name === 'services') {
				return 'υπηρεσίες';
			} else if($name === 'articles') {
				return 'άρθρα';
			} else if($name === 'contact') {
				return 'επικοινωνία';
			}
		} else {
			return 'αρχική';
		}
	}
	
    public static function getTitle($lang, $act) {
        if($lang == 'en') {
            return ucfirst($act) . ' - Cattle Hoof Trimming';
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
        if(isset($_GET['action']) && !empty($_GET['action'])) {
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
        }
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

    function getUrlCurrently($filter = array()) {
        $pageURL = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on" ? "https://" : "http://";

        $pageURL .= $_SERVER["SERVER_NAME"];

        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= ":".$_SERVER["SERVER_PORT"];
        }

        $pageURL .= $_SERVER["REQUEST_URI"];


        if (strlen($_SERVER["QUERY_STRING"]) > 0) {
            $pageURL = rtrim(substr($pageURL, 0, -strlen($_SERVER["QUERY_STRING"])), '?');
        }

        $query = $_GET;
        foreach ($filter as $key) {
            unset($query[$key]);
        }

        if (sizeof($query) > 0) {
            $pageURL .= '?' . http_build_query($query);
        }

        return $pageURL;
    }
}
?>