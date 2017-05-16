<?
define('PROJECT_PATH', realpath(__DIR__ . '/..'));
define('BOOTSTRAP_DIR', realpath(PROJECT_PATH . '/vendor/twbs/bootstrap/dist'));

$cssFile = BOOTSTRAP_DIR . '/css/bootstrap.min.css';
if (!file_exists($cssFile)) {
    throw new Exception("Bootstrap CSS not found in '{$cssFile}'");
}
$newCssFile = PROJECT_PATH . '/web/bootstrap/min.css';
if (!file_exists($newCssFile)) {
    $dir = dirname($newCssFile);
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    copy($cssFile, $newCssFile);
}

?>
