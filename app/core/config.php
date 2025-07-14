<?php 

defined('ROOTPATH') OR exit('Access Denied!');

if((empty($_SERVER['SERVER_NAME']) && php_sapi_name() == 'cli') || (!empty($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'localhost'))
{
	/** database config **/
	define('DBNAME', 'phphrame_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost/phphrame-doc/public');

}else
{
	/** database config **/
	define('DBNAME', 'phphrame_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'phphrame_db');
	define('DBPASS', 'Nj4aWkKHtM2En7pDM2nk');
	define('DBDRIVER', '');

	define('ROOT', 'https://www.phphrame.com.ng');

}
// {
// 	/** database config **/
// 	define('DBNAME', 'icei_38544032_phphrame');
// 	define('DBHOST', 'sql112.iceiy.com');
// 	define('DBUSER', 'icei_38544032');
// 	define('DBPASS', 'YKkWJ9wzgxAr');
// 	define('DBDRIVER', '');

// 	define('ROOT', 'http://phphrame.iceiy.com/');

// }

define('APP_NAME', "PHPhrame Framework");
define('APP_DESC', "Documentation for the PHP MVC Framework with OOP");
define('APP_AUTHOR', "Oni Adesola Ayomide & Mama Meshac Eberenna");

/** true means show errors **/
define('DEBUG', true);
