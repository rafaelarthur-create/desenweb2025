<?php

    require_once 'funcoes.php';

    $valor_avista = $_POST['valor_avista'];
    $parcelas = [24,36,48,60];
    $taxas = [
        24 => 0.015,
        36 => 0.020,
        48 => 0.025,
        60 => 0.03
    ];

    $valor_avista = tratarValor($valor_avista);

    foreach ($taxas as $parcelas => $taxa){
        $valor_juros_parcelas = ($valor_avista + ($valor_avista * $taxa));
        echo "Parcela $parcelas: "  . formatarMoeda($valor_juros_parcelas) . ' - ' . ($taxa*100) . '%' . '<br>';
    }
?>