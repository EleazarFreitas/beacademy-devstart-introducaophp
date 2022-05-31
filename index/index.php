<?php

$url = explode('?', $_SERVER['REQUEST_URI']);

include 'pages/head.php';
include 'pages/menu.php';
include 'pages/acoes.php';

echo match ($url[0]) {
    '/' => home(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/editar' => editar(),
    '/excluir' => excluir(),
    '/login' => login(),
    default => erro404()
};

include 'pages/footer.php';