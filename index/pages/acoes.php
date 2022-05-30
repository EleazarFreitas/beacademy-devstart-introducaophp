<?php
function home () {
    include 'pages/home.php';
};
function cadastro () {
    if ($_POST){
        $name = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $arquivo = fopen ('dados/contatos.csv','a+');
        fwrite ($arquivo, "{$name};{$email};{$telefone}".PHP_EOL);
        fclose ($arquivo);

        $mensagem = 'Pronto! Cadastro realizado.';

        include 'pages/mensagem.php';

    }
    include 'pages/cadastro.php';
};
function login () {
    include 'pages/login.php';
};
function listar () {
    $contatos = file('dados/contatos.csv');
    include 'pages/listar.php';
};
function erro404 () {
    include 'pages/404.php';
};