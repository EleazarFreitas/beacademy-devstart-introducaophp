<?php

$url = $_SERVER['REQUEST_URI'];

echo match ($url) {
    '/' => '<h1>Página Inicial</h1>',
    '/login' => '<h1>Login</h1>',
    '/cadastro' => '<h1>Cadastro</h1>',
    default => 'Página não encontrada'
};