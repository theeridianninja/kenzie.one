<?php
include_once __DIR__ . '/elements/header.php';

define('INCLUDE_DIR', __DIR__ . '/pages/');

$rules = [
    'posts' => '#^/post/%[0-9A-Fa-f]{2}$#',
    'about' => '#^/about$#i',
    'home'  => '#^/$#'
];


$uri = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$requestUri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$uri = '/' . trim(str_replace($uri, '', $requestUri), '/');

foreach ($rules as $action => $rule) {
    if (preg_match($rule, $uri, $params)) {
        echo $action;
        include INCLUDE_DIR . $action . '.php';
        include_once __DIR__ . '/elements/footer.php';
        exit();
    }
}

include INCLUDE_DIR . '404.php';
include_once __DIR__ . '/elements/footer.php';

?>