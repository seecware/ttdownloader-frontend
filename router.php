<?php
$ruta = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$metodo = $_SERVER['REQUEST_METHOD'];
$content_route = __DIR__ . "/views";

if ($ruta !== '/' && file_exists(__DIR__ . $ruta)) {
    return false; // PHP servirá directamente el archivo
}

$ruta = rtrim($ruta, '/');
$routes = require __DIR__ . "/routes.php";

if (array_key_exists($ruta, $routes)) {
    $parent_content = $content_route . '/' . $routes[$ruta] . '.php';
} else {
    $parent_content = $content_route . '/404.php';
}

require __DIR__ . "/includes/layout.php";