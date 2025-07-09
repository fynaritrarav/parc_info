<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    $host = $_SERVER['HTTP_HOST'];

    define('ROOT', $root . '/parc_info/');
    define('HOST', 'http://' . $host . '/parc_info/');

    define('CONFIG', ROOT . 'config/');
    define('CORE', ROOT . 'core/');

    define('MODELS', ROOT . 'app/models/');
    define('VIEWS', ROOT . 'app/views/');
    define('CONTROLLERS', ROOT . 'app/controllers/');
    define('ROUTER', ROOT . 'routes/routes.php');

    define('ASSETS', 'http://' . HOST . '/public/assets');

    define('DB_HOSTNAME', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'parcinfomvc');

?>