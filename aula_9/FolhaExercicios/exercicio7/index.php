<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <h1>Questão 7</h1>
    <form action="dados.php" method="post">
        <fieldset>
            <label>Valor do veículo à vista: </label>
            <input type="number" name="valor_avista" step="0.01">
        </fieldset>
        <fieldset>
            <label>Quantidade de parcelas: </label>
            <input type="number" name="qtdade_parcela" step="0.01">
        </fieldset>
        <fieldset>
            <label>Valor da parcela com Juros: </label>
            <input type="number" name="valor_parcela_com_juros" step="0.01">
        </fieldset>
        <br>
        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>