<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<?php
$aluno1 = [
    'nome' => 'Eleazar',
    'idade' => 31,
    'profissao' => 'Estudante',
    'email' => 'eleazarsf@gmail.com',
    'telefone' => '81-9-0000-0000'
];
$aluno2 = [
    'nome' => 'Fulano',
    'idade' => '00',
    'profissao' => 'Matemático',
    'email' => 'fulano@email.com',
    'telefone' => '00-9-0000-0000'
];
$aluno3 = [
    'nome' => 'Beltrano',
    'idade' => '00',
    'profissao' => 'Maestro',
    'email' => 'beltrano@email.com',
    'telefone' => '00-9-0000-0000'
];
$aluno4 = [
    'nome' => 'Sicrano',
    'idade' => '00',
    'profissao' => 'Jogador de Vôlei',
    'email' => 'sicranovolei@email.com',
    'telefone' => '00-9-0000-0000'
];
$alunos = [$aluno1,$aluno2,$aluno3,$aluno4];
?>
<div class="container mt-5">
    <h1>Alunos</h1>
    <hr>
    <table class="table mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Profissão</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                foreach ($alunos as $cadaDado) {
                    echo '<tr>';
                        echo "<td>{$cadaDado['nome']}</td>";
                        echo "<td>{$cadaDado['idade']}</td>";
                        echo "<td>{$cadaDado['profissao']}</td>";
                        echo "<td>{$cadaDado['email']}</td>";
                        echo "<td>{$cadaDado['telefone']}</td>";
                    echo '</tr>';
                };
                ?>
            </tr>
        </tbody>
    </table>
</div>