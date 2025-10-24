<?php

    //Consultando o arquivo de funções.
    require_once 'funcoes.php';

    //Recebendo o valor do formulário e aplicando a variável correspondente.
    $valor_avista = $_POST['valor_avista'];
    //Criado um array $parcelas para inserir as quantidades de cada parcela.
    $parcelas = [24,36,48,60];
    //Criado um array $taxas para informar as parcelas e taxas que cada parcela possui.
    $taxas = [
        24 => 0.015,
        36 => 0.020,
        48 => 0.025,
        60 => 0.03
    ];

    //Caso o valor venha nulo, será tratado pela função 'tratarValor'.
    $valor_avista = tratarValor($valor_avista);

    //Aberto um 'foreach' devido ao array $taxas, informando principalmente as variáveis $parcelas e $taxa.
    foreach ($taxas as $parcelas => $taxa){
        //Cálculo para gerar o valor com juros.
        $valor_juros_parcelas = ($valor_avista + ($valor_avista * $taxa));
        //Exibe valores calculados formatados.
        echo "Parcela $parcelas: "  . formatarMoeda($valor_juros_parcelas) . ' - ' . ($taxa*100) . '%' . '<br>';
    }
?>