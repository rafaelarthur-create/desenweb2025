<?php

    //Função que converte os valores recebidos para float, tratando casos de valores nulos ou vazios.
    function tratarValor($valor_avista,$qtdade_parcela,$valor_parcela_com_juros) {
        return [(float)($valor_avista),
                (float)($qtdade_parcela),
                (float)($valor_parcela_com_juros)];
    }

    //Função que calculará e retornará o valor com juros.
    function calculaValorComJuros($valor_parcela, $qtdade_parcela) {
        return ($valor_parcela * $qtdade_parcela);
    }

    //Função que calculará e retornará o valor gasto com juros.
    function calculaValorGastoComJuros($valor_com_juros, $valor_avista) {
        return ($valor_com_juros - $valor_avista);
    }

    //Função que formata o valor em reais, com duas casas decimais.
    function formatarMoeda($valor) {
        return "R$ " . number_format($valor, 2,',','.');    
    }

?>