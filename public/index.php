<?php

if (PHP_MAJOR_VERSION < 8) {
    die('Версия PHP должна быть выше 8');
}

require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS . '/functions.php';
require_once CONFIG . '/routes.php';

new \core\App();

debug(\core\Router::getRoutes());
