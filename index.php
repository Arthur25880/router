<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// SEM PREOCUPAR COM A PASTA NA ROTA POIS TEM A $BASE
$base = '/router';

if (str_starts_with($uri, $base)) {
    $uri = substr($uri, strlen($base));
}

if ($uri === '') {
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