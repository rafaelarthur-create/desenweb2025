<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

        require_once "funcoes.php";

        $valor_inicial = $_POST['valor_inicial'];
        $qtd_maca = $_POST['qtdade_maca'];
        $qtd_melancia = $_POST['qtdade_melancia'];
        $qtd_laranja = $_POST['qtdade_laranja'];
        $qtd_repolho = $_POST['qtdade_repolho'];
        $qtd_cenoura = $_POST['qtdade_cenoura'];
        $qtd_batatinha = $_POST['qtdade_batatinha'];
        
        [$valor_inicial,$qtd_maca,$qtd_melancia,$qtd_laranja,$qtd_repolho,$qtd_cenoura,$qtd_batatinha] = tratarValor(
            $valor_inicial,
            $qtd_maca,
            $qtd_melancia,
            $qtd_laranja,
            $qtd_repolho,
            $qtd_cenoura,
            $qtd_batatinha
        );

        $itens = [
            'Maçã' => [11.99, $qtd_maca],
            'Melancia' => [5.99, $qtd_melancia],
            'Laranja' => [10.00, $qtd_laranja],
            'Repolho' => [3.99, $qtd_repolho],
            'Cenoura' => [3.49, $qtd_cenoura],
            'Batatinha' => [11.99, $qtd_batatinha]
        ];
        
        echo "Valor inicial: " . formatarMoeda($valor_inicial) . '<br><br>';
        echo "Itens comprados: <br><br>";
        $total = 0;
        foreach ($itens as $nome => [$preco, $qtdade]) {
            $qtdade = (float)$qtdade;
            if ($qtdade > 0) {
                $unidade = $qtdade < 1 ? 'g' : 'kg';
                $qtdadeformatada = $qtdade < 1 ? ($qtdade * 1000) .  'g' : $qtdade . ' kg';

                echo "$nome: " . formatarMoeda((calculaValor($preco, $qtdade))) . ' - ' . $qtdadeformatada . '<br>'; 
                $total += (calculaValor($preco, $qtdade));
            }
        }
        
        echo "<br>";
        echo "Total da Compra: " . formatarMoeda($total) . '<br>';
        echo "Valor restante: " . formatarMoeda((calculaValorRestante($valor_inicial,$total))) . '<br><br>';

        if($valor_inicial < $total) {
            echo "<div id='resultadoVermelho'>
                    <a><b>Dinheiro não suficiente, Joãozinho ainda deve " . formatarMoeda((calculaValorRestante($valor_inicial,$total))) . '.</b></a>';
                 "</div>";
        } elseif ($valor_inicial > $total){
            echo "<div id='resultadoAzul'> 
                    <a><b>Dinheiro suficiente, Joãozinho ainda pode gastar " . formatarMoeda((calculaValorRestante($valor_inicial,$total))) . '.</b></a>';
                 "</div>";
        } else {
            echo "<div id='resultadoVerde'>
                    <a><b>Saldo para compras foi esgotado.</b></a>"; 
                 "</div>";  
        }

    ?>
</body>
</html>