<form method="post">

<input type="text" name="numberOne" placeholder="Número 1">
<input type="text" name="numberTwo" placeholder="Número 2">

<br>

<button name="soma">Somar</button>
<button name="subtracao">Subtrair</button>
<button name="multiplicacao">Multiplicar</button>
<button name="divisao">Dividir</button>

</form>

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