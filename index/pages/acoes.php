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
function editar () {
    $id = $_GET['id'];
    $contatos = file('dados/contatos.csv');

    if ($_POST) {
        $name = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        unlink('dados/contatos.csv');
        $contatos[$id] = "{$name};{$email};{$telefone}".PHP_EOL;

        $arquivo = fopen('dados/contatos.csv', 'a+');
        foreach ($contatos as $cadaContato) {
            fwrite($arquivo, $cadaContato);
        };
        fclose($arquivo);

        $mensagem = 'Pronto! Contato atualizado.';
        include 'pages/mensagem.php';
    };

    $dados = explode(';', $contatos[$id]);
    include 'pages/editar.php';
};
function excluir () {
    $id = $_GET['id'];
    $contatos = file('dados/contatos.csv');
    unset($contatos[$id]);
    unlink('dados/contatos.csv');
    $arquivo = fopen('dados/contatos.csv', 'a+');
    foreach ($contatos as $cadaContato) {
        fwrite($arquivo, $cadaContato);
    };
    fclose($arquivo);
    $mensagem = 'Pronto! Arquivo excluído.';
    include 'pages/mensagem.php';
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