<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// PREOCUPANDO COM A PASTA EM CADA ROTA
switch ($uri) {
    case '/router':
    case '/router/':
        require 'pages/home.php';
        break;

    case '/router/sobre':
        require 'pages/sobre.php';
        break;

    case '/router/contato':
        require 'pages/contato.php';
        break;

    default:
        http_response_code(404);
        echo "404 - Página não encontrada";
}