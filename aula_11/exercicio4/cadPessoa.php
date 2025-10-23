<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoas</title>
</head>
<body>
    <h1>Prática 1</h1>
    <form action="insertPessoa.php" method="post">
        <fieldset>
            <label>Nome: </label>
            <input type="text" name="nome_pessoa" required>
        </fieldset>
        <fieldset>
            <label>Sobrenome: </label>
            <input type="text" name="sobrenome_pessoa" required>
        </fieldset>
        <fieldset>
            <label>Email: </label>
            <input type="email" name="email_pessoa" required>
        </fieldset>
        <fieldset>
            <label>Senha: </label>
            <input type="text" name="senha_pessoa" required>
        </fieldset>
        <fieldset>
            <label>Cidade: </label>
            <input type="text" name="cidade_pessoa" required>
        </fieldset>
        <fieldset>
            <label>Estado: </label>
            <input type="text" name="estado_pessoa" required>
        </fieldset>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
    <br>
    <h3>Filtrar cadastros</h3>
    <form action="listaPessoas.php" method="get">
        <fieldset>
            <label>Nome Cadastrado: </label>
            <input type="text" name="pesnome" value='<?php echo isset($_GET["pesnome"]) ? htmlspecialchars($_GET["pesnome"]) : ""; ?>'>
            <input type="submit" value="Pesquisar">
        </fieldset>
        <br>  
    </form>
</body>
</html>