<?php
define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . "/public");
define("APP", ROOT . "/app");
define("CORE", ROOT . "/vendor/core");
define("HELPERS", ROOT . "/vendor/core/helpers");
define("CACHE", ROOT . "/tmp/cache");
define("LOGS", ROOT . "/tmp/logs");
define("CONFIG", ROOT . "/config");
define("LAYOUT", "default");
define("PATH", ROOT . "http://sitename");
define("ADMIN", ROOT . "http://sitename/admin");
define("NO_IMG", ROOT . "/public/images/no_image.jpg");

require_once ROOT . "/vendor/autoload.php";
