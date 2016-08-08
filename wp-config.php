<?php
/** 
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} 
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni 
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define('DB_NAME', 'bodoart');

/** MySQL felhasználónév */
define('DB_USER', 'bodoart');

/** MySQL jelszó. */
define('DB_PASSWORD', '+P2u\\Ecr[U2{eY)v');

/** MySQL  kiszolgáló neve */
define('DB_HOST', 'localhost');

/** Az adatbázis karakter kódolása */
define('DB_CHARSET', 'utf8mb4');

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról. 
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'hn]?m3vT%sd>0z+v)y@{U9BCO|T_eaUFtK!h,9|yExpp~g`#SKGR$H&Qp)RRbG}E');
define('SECURE_AUTH_KEY', 'E+;uubb4t|#bZ;7_ 21Z /oy!R/;sC~`JAUje:@o~woBdS,RZ?Ml}w9^445R~T^C');
define('LOGGED_IN_KEY', 'PLx7V-MkDF(J7<]Ts[ju8`:gp|Y2UTL&/f93>?.S[rFA,Y&hH3e-Zm_M&MG4Zh8t');
define('NONCE_KEY', '._gLid Prg6+8.=6/l5@qNI]Z5Q.ph*eOv62pcJdXEN.;/c#!(+sDe_g)RnWl1oj');
define('AUTH_SALT',        '/|_]KouYKQ|w~?-^ iKW2ohTFIONa4H&Xm*G_unzVzfU!:<i$a@m}pg k5.O![<,');
define('SECURE_AUTH_SALT', 'jocHO^XUBm<iqs>MB,pPbP7CK{!mTeoS|6J?D!Xfasg8XM.+Dh)P,X;|5$h^`y]!');
define('LOGGED_IN_SALT',   '`lM/|mP}&{8qJ1)7UMeNo%- nGy10:pJ,RI5@q@7ME^$6u)._`I&wn0oC6*tkuxJ');
define('NONCE_SALT',       'SO7>k(@DZS-f~@cA&>K=ubUQ| zXXX;AbEJ61.?:dm%Z+1UtEY2Zap!xb*sEa~+U');

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix  = 'bwp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során. 
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
