<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <h1>Questão 6</h1>
    <table border="1" width="100%">
        <th colspan="6"><h3>Lista de Preços/KG</h3></th>
        <tr>
            <th>Maçã</th>
            <th>Melancia</th>
            <th>Laranja</th>
            <th>Repolho</th>
            <th>Cenoura</th>
            <th>Batatinha</th>
        </tr>
        <tr>
            <th>R$ 11.99 KG</th>
            <th>R$ 5.99 KG</th>
            <th>R$ 10.00 KG</th>
            <th>R$ 3.99 KG</th>
            <th>R$ 3.49 KG</th>
            <th>R$ 3.95 KG</th>
        </tr>
    </table>
    <br>
    <br>
    <form action="dados.php" method="post">
        <fieldset>
            <label>Valor inicial: </label>
            <input type="number" name="valor_inicial">
        </fieldset>
        <fieldset>
            <label>Quantidade de Maçãs: </label>
            <input type="number" name="qtdade_maca" step="0.01" min="0.1">
            <a>(g/kg)</a>
        </fieldset>
        <fieldset>
            <label>Quantidade de Melancias: </label>
            <input type="number" name="qtdade_melancia" step="0.01" min="0.1">
            <a>(g/kg)</a>
        </fieldset>
        <fieldset>
            <label>Quantidade de Laranjas: </label>
            <input type="number" name="qtdade_laranja" step="0.01" min="0.1">
            <a>(g/kg)</a>
        </fieldset>
        <fieldset>
            <label>Quantidade de Repolhos: </label>
            <input type="number" name="qtdade_repolho" step="0.01" min="0.1">
            <a>(g/kg)</a>
        </fieldset>
        <fieldset>
            <label>Quantidade de Cenouras: </label>
            <input type="number" name="qtdade_cenoura" step="0.01" min="0.1">
            <a>(g/kg)</a>
        </fieldset>
        <fieldset>
            <label>Quantidade de Batatinhas: </label>
            <input type="number" name="qtdade_batatinha" step="0.01" min="0.1">
            <a>(g/kg)</a>
        </fieldset>
        <br>
        <input type="reset" value="Limpar lista">
        <input type="submit" value="Finalizar compra">
    </form>
</body>
</html>