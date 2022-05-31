<form class="shadow p-5 rounded" method="post">
    <div>
        <h1 class="pb-3">Editar Contato</h1>
        <label class="form-label">Nome</label>
        <br>
        <input value="<?php echo $dados[0]; ?>" name="nome" type="text" class="form-control">
        <br>
        <label class="form-label">E-mail</label>
        <input value="<?php echo $dados[1]; ?>" name="email" type="email" class="form-control">
        <br>
        <label class="form-label">Telefone</label>
        <input value="<?php echo $dados[2]; ?>" name="telefone" type="text" class="form-control">
        <br>
        <button class="btn btn-dark">Editar</button>
    </div>
</form>