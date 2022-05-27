<?php

$url = $_SERVER['REQUEST_URI'];

include 'pages/menu.php';

echo match ($url) {
    '/' => include 'pages/home.php',
    '/login' => include 'pages/login.php',
    '/cadastro' => include 'pages/cadastro.php',
    default => include 'pages/404.php'
};