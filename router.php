<?php
$ruta = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$metodo = $_SERVER['REQUEST_METHOD'];
$content_route = __DIR__ . "/views";

if ($ruta !== '/' && file_exists(__DIR__ . $ruta)) {
    return false; // PHP servirá directamente el archivo
}

$ruta = rtrim($ruta, '/');

if ($ruta === '/home' || $ruta === '') {
    #Se agrega una variable que apunte al contenido deseado, en este caso: home,
    #Ya que dentro del require php no puede acceder a directorios arriba de su
    #ruta actual, por lo que se le pasa desde esta variable $parent_content, que
    #más adelante llamaremos root, para poder acceder a la estructura completa
    #del proyecto y tener más maniobrabilidad de una manera sensilla.
    $parent_content = $content_route . "/home.php";
    require __DIR__ . "/includes/layout.php";
} else {
    $parent_content =  $content_route . "/404.php";
    require __DIR__ . "/includes/layout.php";
}
