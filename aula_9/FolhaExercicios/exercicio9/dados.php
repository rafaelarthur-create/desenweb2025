<?php

    //Consultando o arquivo de funções.
    require_once 'funcoes.php';

    //Recebendo o valor do formulário e aplicando a variável correspondente.
    $valor_avista = $_POST['valor_avista'];
    //Criado um array $parcelas para inserir as quantidades de cada parcela.
    $parcelas = [24,36,48,60];
    //Quantidades de parcelas disponíveis.
    $taxas = [
        24 => 0.02,
        36 => 0.023,
        48 => 0.026,
        60 => 0.029
    ];

    //Caso o valor venha nulo ou zerado, será tratado pela função 'tratarValor'.
    $valor_avista = tratarValor($valor_avista);

    foreach ($taxas as $parcelas => $taxa){
        //Cálculo do montante.
        $montante = $valor_avista * pow(1 + $taxa, $parcelas);
        //Cálculo para gerar a parcela individual.
        $parcela_individual = $montante / $parcelas;
        //Exibe valores calculados formatados.
        echo "Parcela $parcelas - "  . 'Montante: ' .formatarMoeda($montante) . ' - ' . ($taxa*100) . '% - ' . 'Parcela individual: '. formatarMoeda($parcela_individual) . '<br>';
    }
?>