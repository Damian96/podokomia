<?php
/**
 * The main helper-function class.
 * @property string[] ACTIONS All the possible actions/pages of the site.
 */
class Functions {

	function __construct() {

		$this->actions = [
			'index',
			'αρχική',
			'αρχικη',
			'υπηρεσίες',
			'υπηρεσιες',
			'άρθρα',
			'αρθρα',
			'επικοινωνία',
			'επικοινωνια',
			'homepage',
			'services',
			'articles',
			'contact',
		];

	}

	/**
	 * Makes the page title according to the current language and action/page.
	 * @param  string $lang The language.
	 * @param  string $action The action/page.
	 * @return string The formatted title.
	 */
	public function getTitle($lang, $action) {

		$suffix = ($lang === 'gr') ? ' - Ποδοκομία Αγελάδων' : ' - Cattle Hoof Trimming';

		if ($action === 'homepage') {

			return (($lang === 'gr') ? 'Αρχική' : 'Homepage') . $suffix;

		} else if ($action === 'services') {

			return (($lang === 'gr') ? 'Υπηρεσίες' : 'Services') . $suffix;

		} else if ($action === 'articles') {

			return (($lang === 'gr') ? 'Άρθρα' : 'Articles') . $suffix;

		} else if ($action === 'contact') {

			return (($lang === 'gr') ? 'Επικοινωνία' : 'Contact') . $suffix;

		} else {

			return $suffix;

		}

	}

    /**
     * Searches the /podokomia/inludes/internalization/en/ according with the specified name.
     * @param  string $name The filename to search.
     * @return string The filename that has been found or if not 'homepage.php';
     */
    public function searchContentFile($name) {

		$filename = glob(self::getBasePath() . '/includes/internalization/en/' . $name . '.php');

        if ($filename && (count($filename) == 1)) {

			return basename($filename[0]);

        } else {

			return 'homepage.php';

		}

    }

    /**
     * Gets the specified action according to the given $_GET['action'] variable.
     * @return string The proper action name to be used.
     */
    public function getActionFile() {

		if (!isset($_GET) || !isset($_GET['action']) || !in_array($_GET['action'], $this->actions, true)) {

			return 'homepage';

		} else if (($_GET['action'] === 'υπηρεσίες') || ($_GET['action'] === 'υπηρεσιες') || ($_GET['action'] === 'services')) {

			return 'services';

		} else if (($_GET['action'] === 'άρθρα') || ($_GET['action'] === 'αρθρα') || ($_GET['action'] === 'articles')) {

			return 'articles';

		} else if (($_GET['action'] === 'επικοινωνία') || ($_GET['action'] === 'επικοινωνια') || ($_GET['action'] === 'contact')) {

			return 'contact';

		} else {

			return 'homepage';

		}
    }

	/**
	 * Gets the current page language according to the given action.
	 * @param  string|NULL $action The original action to be tested.
	 * @return string The correct language, or an empty string in case of an empty action.
	 */
	public function getActionLanguage($action) {

		if (empty($action) || !in_array($action, $this->actions, true)) {

			return 'gr';

		} else if (($action === 'αρχική') || ($action === 'υπηρεσίες') || ($action === 'άρθρα') || ($action === 'επικοινωνία')) {

			return 'gr';

		} else if (($action === 'αρχικη') || ($action === 'υπηρεσιες') || ($action === 'αρθρα') || ($action === 'επικοινωνια')) {

			return 'gr';

		} else if (($action === 'homepage') || ($action === 'services') || ($action === 'articles') || ($action === 'contact')) {

			return 'en';

		} else {

			return '';

		}

	}


	/**
	 * Returns the appropriate language flag link according to the current page and language.
	 * If the parameters are invalid an empty string is returned.
	 * @param string $action The current action (page)
	 * @param string $language The current language
	 */
	public function getLanguageLink($action, $language) {

		if (!empty($action) && in_array($action, $this->actions, true) && in_array($language, ['gr', 'en'], true)) {

			if (($action === 'homepage') || ($action === 'index') || ($action === 'αρχική') || ($action === 'αρχικη')) {

				return $language == 'gr' ? 'homepage' : 'αρχική';

			} else if (($action === 'services') || ($action === 'υπηρεσίες') || ($action === 'υπηρεσιες')) {

				return $language == 'gr' ? 'services' : 'υπηρεσίες';

			} else if (($action === 'articles') || ($action === 'άρθρα') || ($action === 'αρθρα')) {

				return $language == 'gr' ? 'articles' : 'άρθρα';

			} else if (($action === 'contact') || ($action === 'επικοινωνία') || ($action === 'επικοινωνια')) {

				return $language == 'gr' ? 'contact' : 'επικοινωνία';
			}

		}

		return '';

	}

	public function getDescription($language) {
		if ($language === 'gr')
			return "Βασίλης Ζαφειράκης κτηνίατρος  παραγωγικών ζώων, νύχια / εξονυχισμό αγελάδων, Θεσσαλονίκη. κτηνιατρος μεγαλων και παραγωγικων ζωων θεσσαλονικη";
		elseif ($language === 'en')
			return "Vasilis Zafeirakis is a Veterinarian that lives in Thessaloniki, Greece and works as a Cattle Hoof Trimmer";
	}

	public function getKeywords($language) {
		if($language === 'gr')
			return "νύχια αγελάδων,κτηνίατρος αγελάδων,κτηνίατρος μεγάλων ζώων,κτηνίατρος θεσσαλονίκη,κτηνίατρος παραγωγικών μονάδων,nixia ageladwn,kthniatros,kthniatros megalwn zwwn";
	}
    /**
     * Clears all the cookies that are used until today.
     */
    public function clearOldCookies() {

        if (!isset($_COOKIE))
			return;

        if (isset($_COOKIE['pd.lang']))
			unset($_COOKIE['pd.lang']);

        if (isset($_COOKIE['pref_lang']))
			unset($_COOKIE['pref_lang']);

        if (isset($_COOKIE['prefLang']))
			unset($_COOKIE['prefLang']);

		if (isset($_COOKIE['pd_lang']))
			unset($_COOKIE['pd_lang']);

    }

	/**
	 * Gets the current domain base URL.
	 * @return string The base URL.
	 */
	public function getBaseUrl() {

		$pageURL = (isset($_SERVER["HTTPS"]) && ($_SERVER["HTTPS"] == "on")) ? "https://" : "http://";

        $pageURL .= $_SERVER["SERVER_NAME"];

        if ($_SERVER["SERVER_PORT"] != "80") {

			$pageURL .= ":" . $_SERVER["SERVER_PORT"];

        }

		if ($this->isLocal()) {

			$pageURL .= '/podokomia/build';

		}

		return $pageURL;
	}

    /**
     * Gets the current server base path.
     * @return string The base path.
     */
    public function getBasePath() {

        if (($_SERVER['SERVER_NAME'] === 'localhost') || (strpos($_SERVER['SERVER_NAME'], '192.168.1') > -1)) {

			return $_SERVER['DOCUMENT_ROOT'] . '/podokomia/build';

		}

		return $_SERVER['DOCUMENT_ROOT'];

	}

	public function isLocal() {
		return $_SERVER['SERVER_NAME'] === 'localhost' || strpos($_SERVER['SERVER_NAME'], '192.168.1') > -1;
	}
}
?>