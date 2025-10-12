<?php

    require_once 'funcoes.php';

    $valor_avista = $_POST['valor_avista'];
    $valor_parcela_com_juros = $_POST['valor_parcela_com_juros'];
    $qtdade_parcela = $_POST['qtdade_parcela'];
    [$valor_avista,$qtdade_parcela,$valor_parcela_com_juros] = tratarValor($valor_avista,$qtdade_parcela,$valor_parcela_com_juros);

    $valor_com_juros = calculaValorComJuros($valor_parcela_com_juros,$qtdade_parcela);
    $valor_gasto_juros = calculaValorGastoComJuros($valor_com_juros,$valor_avista);

    echo "Valor que será gasto com juros: <b>". formatarMoeda($valor_gasto_juros) . '</b> <br>';
?>