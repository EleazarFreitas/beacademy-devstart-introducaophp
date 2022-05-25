<form method="post">
    <input type="text" name="NAME" placeholder="Nome Completo">
    <br>
    <input type="text" name="idade" placeholder="Idade">
    <br>
    <input type="text" name="profissao" placeholder="Profissão">
    <br>
    <br>
    <button name="verificar">Verificar Dados</button>
</form>

<?php

$dados = "Nome: {$_POST['NAME']} \n Idade: {$_POST['idade']} \n Profissão: {$_POST['profissao']}";

if (isset($_POST['verificar'])) {
    echo nl2br ($dados);
}