<?php

$url = $_SERVER['REQUEST_URI'];

echo match ($url) {
    '/' => '<h1>Página Inicial</h1>',
    '/login' => include 'login.php',
    '/cadastro' => include 'cadastro.php',
    default => include '404.php'
};