<?php

$url = $_SERVER['REQUEST_URI'];

include 'pages/head.php';
include 'pages/menu.php';
include 'pages/acoes.php';

echo match ($url) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    default => erro404()
};

include 'pages/footer.php';