<?

/** Запускальщик проекта */

define('PROJECT_PATH', realpath(__DIR__ . '/..'));

$config = require_once PROJECT_PATH . '/config.php';

$path = function ($path) { return '/disser/' . $path; };
