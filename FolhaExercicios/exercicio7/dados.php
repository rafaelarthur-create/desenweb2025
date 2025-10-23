<?php

    //Consultando o arquivo de funções.
    require_once 'funcoes.php';

    //Recebendo os valores do formulário e aplicando as variáveis correspondentes.
    $valor_avista = $_POST['valor_avista'];
    $valor_parcela_com_juros = $_POST['valor_parcela_com_juros'];
    $qtdade_parcela = $_POST['qtdade_parcela'];

    //Caso algum dos valores venha nulo, todos serão tratados pela função 'tratarValor'.
    [$valor_avista,$qtdade_parcela,$valor_parcela_com_juros] = tratarValor($valor_avista,$qtdade_parcela,$valor_parcela_com_juros);

    //Atribuindo às variáveis os valores retornados pelas funções de cálculo.
    $valor_com_juros = calculaValorComJuros($valor_parcela_com_juros,$qtdade_parcela);
    $valor_gasto_juros = calculaValorGastoComJuros($valor_com_juros,$valor_avista);

    //Escrevendo o resultado.
    echo "Valor que será gasto com juros: <b>". formatarMoeda($valor_gasto_juros) . '</b> <br>';
?>