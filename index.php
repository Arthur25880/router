<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// DESCOBRINDO A PASTA DO PROJETO
$base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

if ($base !== '' && str_starts_with($uri, $base)) {
    $uri = substr($uri, strlen($base));
}

if ($uri === '' || $uri === false) {
    $uri = '/';
}

switch ($uri) {
    case '/':
        require 'pages/home.php';
        break;

    case '/sobre':
        require 'pages/sobre.php';
        break;

    case '/contato':
        require 'pages/contato.php';
        break;

    default:
        http_response_code(404);
        echo "404 - Página não encontrada";
}