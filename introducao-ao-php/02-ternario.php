<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container mt-5">
    <h1>Formulário</h1>
    <hr>
    <form method="post" class="w-50 mt-5">
        <input type="text" name="NAME" placeholder="Nome Completo" class="form-control">
        <br>
        <input type="text" name="idade" placeholder="Idade" class="form-control">
        <br>
        <input type="text" name="profissao" placeholder="Profissão" class="form-control">
        <br>
        <br>
        <button name="verificar" class="btn btn-dark">Verificar Dados</button>
    </form>
    <table class="table mt-5">
        <thead class="table-dark">
            <th>Nome</th>
            <th>Idade</th>
            <th>Profissão</th>
        </thead>
        <tbody>
            <?php
            if (isset($_POST['verificar'])) {
                echo "<td>{$_POST['NAME']}</td>";
                echo "<td>{$_POST['idade']}</td>";
                echo "<td>{$_POST['profissao']}</td>";
            };
            ?>
        </tbody>
    </table>
</div>