<h1>Contatos</h1>
<table class="table mt-5">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <Th>Telefone</Th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($contatos as $posicao => $cadaContato) {
                $partes = explode(';',$cadaContato);
                echo '<tr>';
                    echo "<td>{$partes[0]}</td>";
                    echo "<td>{$partes[1]}</td>";
                    echo "<td>{$partes[2]}</td>";
                    echo "<td><a href='/excluir?id={$posicao}' class='btn btn-danger btn-sm'>Excluir</a></td>";
                echo '</tr>';
            }
        ?>
    </tbody>
</table>