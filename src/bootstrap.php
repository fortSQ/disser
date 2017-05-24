<?

/** Запускальщик проекта */

define('PROJECT_PATH', realpath(__DIR__ . '/..'));

$path = function ($path) { return '/disser/' . $path; };

$config = require_once PROJECT_PATH . '/config.php';

foreach (['A', 'B'] as $room) {
    for ($i = 1; $i <= 40; $i++) {
        for ($j = 1; $j <= 3; $j++) {
            for ($k = 1; $k <= 5; $k++) {
                if ($room == 'B' && $i > 10) {
                    continue;
                }

                $config['cells'][] = "{$room}.{$i}.{$j}.{$k}";
            }
        }
    }
}
