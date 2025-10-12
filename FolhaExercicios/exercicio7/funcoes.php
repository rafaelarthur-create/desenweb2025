<?php

    function tratarValor($valor_avista,$qtdade_parcela,$valor_parcela_com_juros) {
        return [(float)($valor_avista),
                (float)($qtdade_parcela),
                (float)($valor_parcela_com_juros)];
    }

    function calculaValorComJuros($valor_parcela, $qtdade_parcela) {
        return ($valor_parcela * $qtdade_parcela);
    }

    function calculaValorGastoComJuros($valor_com_juros, $valor_avista) {
        return ($valor_com_juros - $valor_avista);
    }

    function formatarMoeda($valor) {
        return "R$ " . number_format($valor, 2,',','.');    
    }

?>