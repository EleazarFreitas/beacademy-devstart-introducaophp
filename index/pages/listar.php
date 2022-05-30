<h1>Listar Contatos</h1>
<table class="table mt-5">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <Th>Telefone</Th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($contatos as $cadaContato) {
                $partes = explode(';',$cadaContato);
                echo '<tr>';
                    echo "<td>{$partes[0]}</td>";
                    echo "<td>{$partes[1]}</td>";
                    echo "<td>{$partes[2]}</td>";
                echo '</tr>';
            }
        ?>
    </tbody>
</table>