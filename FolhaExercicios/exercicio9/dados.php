<?php

    require_once 'funcoes.php';

    $valor_avista = $_POST['valor_avista'];
    $parcelas = [24,36,48,60];
    $taxas = [
        24 => 0.02,
        36 => 0.023,
        48 => 0.026,
        60 => 0.029
    ];

    $valor_avista = tratarValor($valor_avista);

    foreach ($taxas as $parcelas => $taxa){
        $montante = $valor_avista * pow(1 + $taxa, $parcelas);
        $parcela_individual = $montante / $parcelas;
        echo "Parcela $parcelas - "  . 'Montante: ' .formatarMoeda($montante) . ' - ' . ($taxa*100) . '% - ' . 'Parcela individual: '. formatarMoeda($parcela_individual) . '<br>';
    }
?>