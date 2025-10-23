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

        //Consultando o arquivo de funções.
        require_once "funcoes.php";

        //Recebendo os valores do formulário e aplicando as variáveis correspondentes.
        $valor_inicial = $_POST['valor_inicial'];
        $qtd_maca = $_POST['qtdade_maca'];
        $qtd_melancia = $_POST['qtdade_melancia'];
        $qtd_laranja = $_POST['qtdade_laranja'];
        $qtd_repolho = $_POST['qtdade_repolho'];
        $qtd_cenoura = $_POST['qtdade_cenoura'];
        $qtd_batatinha = $_POST['qtdade_batatinha'];
        
        //Caso algum dos valores venha nulo, todos serão tratados pela função 'tratarValor'.
        [$valor_inicial,$qtd_maca,$qtd_melancia,$qtd_laranja,$qtd_repolho,$qtd_cenoura,$qtd_batatinha] = tratarValor(
            $valor_inicial,
            $qtd_maca,
            $qtd_melancia,
            $qtd_laranja,
            $qtd_repolho,
            $qtd_cenoura,
            $qtd_batatinha
        );

        //Criando um array chamado $itens que conterá a descrição do produto, preço(já inserido direto no array) e quantidade de cada produto.
        $itens = [
            'Maçã' => [11.99, $qtd_maca],
            'Melancia' => [5.99, $qtd_melancia],
            'Laranja' => [10.00, $qtd_laranja],
            'Repolho' => [3.99, $qtd_repolho],
            'Cenoura' => [3.49, $qtd_cenoura],
            'Batatinha' => [11.99, $qtd_batatinha]
        ];
        
        //Apresentará de início o valor inicial, com uma função de formatação estabelecida no 'funcoes.php'.
        echo "Valor inicial: " . formatarMoeda($valor_inicial) . '<br><br>';
        //Apresentação dos itens comprados para o usuário.
        echo "Itens comprados: <br><br>";
        //Criado uma váriavel total para depois armazenar o total da compra.
        $total = 0;
        //Aberto um 'foreach' devido ao array $itens, informando principalmente as variáveis $preco e $qtdade.
        foreach ($itens as $nome => [$preco, $qtdade]) {

            //Aplicado o float na variável $qtdade para receber em números reais.
            $qtdade = (float)$qtdade;

            //Aberto uma condição quando a quantidade for maior que 0, para puxar a formatação em gramas ou quilos.
            if ($qtdade > 0) {

                //Se $qtdade for menor que 1, então $unidade recebe 'g'; caso contrário, recebe 'kg'.
                $unidade = $qtdade < 1 ? 'g' : 'kg';

                //Se $qtdade for menor que 1, então fará o cálculo que receberá 'g'; caso contrário, recebe 'kg'.
                $qtdadeformatada = $qtdade < 1 ? ($qtdade * 1000) .  'g' : $qtdade . ' kg';

                //Escreverá o nome do produto, o valor e a quantidade formatada.
                echo "$nome: " . formatarMoeda((calculaValor($preco, $qtdade))) . ' - ' . $qtdadeformatada . '<br>';
                
                //Criada a variável $total para armazenar o valor total da compra.
                $total += (calculaValor($preco, $qtdade));
            }
        }
        
        echo "<br>";
        //Escreverá o total da compra, aplicando uma função de formatação estabelecida no 'funcoes.php'.
        echo "Total da Compra: " . formatarMoeda($total) . '<br>';
        //Escreverá o valor restante, através de uma função 'calculaValorRestante' e formatação estabelecida no 'funcoes.php'.
        echo "Valor restante: " . formatarMoeda((calculaValorRestante($valor_inicial,$total))) . '<br><br>';
        
        //Aplicando as condições e devidas formatações.
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