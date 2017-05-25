<?

/** Запускальщик проекта */

define('PROJECT_PATH', realpath(__DIR__ . '/..'));

$path = function ($path) { return '/disser/' . $path; };

$config = require_once PROJECT_PATH . '/config.php';

foreach ($config['rooms'] as $room => $rackCount) {
    for ($i = 1; $i <= $rackCount; $i++) {
        for ($j = 1; $j <= 3; $j++) {
            for ($k = 1; $k <= 5; $k++) {
                $config['cells'][] = "{$room}.{$i}.{$j}.{$k}";
            }
        }
    }
}
