<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container mt-5">
    <h1>Calculadora</h1>
    <hr>
    <form method="post">
    <input type="text" name="numberOne" placeholder="Número 1" class="form-control w-25">
    <br>
    <input type="text" name="numberTwo" placeholder="Número 2" class="form-control w-25">
    <div class="mt-5">
    <button name="soma" class="btn btn-dark">Somar</button>
    <button name="subtracao" class="btn btn-dark">Subtrair</button>
    <button name="multiplicacao" class="btn btn-dark">Multiplicar</button>
    <button name="divisao" class="btn btn-dark">Dividir</button>
    </div>
    </form>
    <h2>
        <?php
            if ($_POST) {
                if (isset($_POST['soma'])) {
                    echo $_POST['numberOne'] + $_POST['numberTwo'];
                }
                if (isset($_POST['subtracao'])) {
                    echo $_POST['numberOne'] - $_POST['numberTwo'];
                }
                if (isset($_POST['multiplicacao'])) {
                    echo $_POST['numberOne'] * $_POST['numberTwo'];
                }
                if (isset($_POST['divisao'])) {
                    echo $_POST['numberOne'] / $_POST['numberTwo'];
                }
            }
        ?>
    </h2>
</div>
