<?php

    function tratarValor($valor_inicial,$qtd_maca,$qtd_melancia,$qtd_laranja,$qtd_repolho,$qtd_cenoura,$qtd_batatinha) {
        return [(float)($valor_inicial),
                (float)($qtd_maca),
                (float)($qtd_melancia),
                (float)($qtd_laranja),
                (float)($qtd_repolho),
                (float)($qtd_cenoura),
                (float)($qtd_batatinha)];
    }

    function calculaValor($preco,$qtd) {
        return ($preco * $qtd);
    }

    function formatarMoeda($valor) {
        return "R$ " . number_format($valor, 2,',','.');    
    }

    function calculaValorRestante($valor_inicial,$total) {
        return ($valor_inicial - $total);
    }

?>