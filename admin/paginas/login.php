<?php

    if ($_POST) {
        $login = $_POST["login"] ?? NULL;
        $senha = $_POST["senha"] ?? NULL;
        
        $sql = "select id, nome, login, senha from usuario where login = :login and ativo = 'S'";
        $consulta = $pdo ->prepare ($sql);
        $consulta->bindParam(":login", $login);
        $consulta->execute();

        $dados = $consulta->fetch(PDO::FETCH_OBJ);

        var_dump($dados);

    }
?>
<div class="login">
    <h1 class="text-center">Efetuar Login</h1>
    <form method="POST">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login"
        class="form-control" required
        placeholder="Por favor preencha este campo">
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha"
        class="form-control" required
        placeholder="Por favor preencha este campo">
        <br>
        <button type="submit" class="btn btn-success w-100">Efetuar Login</button>

    </form>
</div>