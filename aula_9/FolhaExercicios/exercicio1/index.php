<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>Questão 1</h1>
    <h3>Informe três valores: </h3>
    <form action="dados.php" method="post">
        <fieldset>
            <label>Valor 1°: </label>
            <input type="number" name="valor1">
        </fieldset>
        <fieldset>
            <label>Valor 2°: </label>
            <input type="number" name="valor2">
        </fieldset>
        <fieldset>
            <label>Valor 3°: </label>
            <input type="number" name="valor3">
        </fieldset>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>