<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container mt-5">
    <?php

    $frutas = ['abacate','pera','ameixa','uva','manga','caju'];

    echo '<h1>lista de frutas</h1><br>';

    foreach ($frutas as $fruta) {
        echo "<ul><li>{$fruta}</li></ul>";
    };

    ?>

    <h1 class="mt-5">Tabela de bandas e músicas conhecidas por mim</h1>
    <hr>
    <table class="table mt-5">
        <thead>
            <tr class="table-dark">
                <th colspan="4">Bandas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $bandas = [['Radiohead','Todas'],['Keane','Todas'],['Coldplay','Quase todas'],['Muse','Quase todas']];
                    foreach ($bandas as $banda) {
                        echo "<td>{$banda[0]}</td>";
                    };
                ?>
            </tr>
            <tr class="table-dark"><th colspan="4">Músicas conhecidas</th></tr>
            <tr>
                <?php
                    $bandas = [['Radiohead','Todas'],['Keane','Todas'],['Coldplay','Quase todas'],['Muse','Quase todas']];
                    foreach ($bandas as $banda) {
                        echo "<td>{$banda[1]}</td>";
                    };
                ?>                       
            </tr>
        </tbody>
    </table>
</div>