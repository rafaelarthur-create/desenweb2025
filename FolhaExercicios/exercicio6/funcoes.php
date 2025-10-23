<?php

    //Função que converte os valores recebidos para float, tratando casos de valores nulos ou vazios.
    function tratarValor($valor_inicial,$qtd_maca,$qtd_melancia,$qtd_laranja,$qtd_repolho,$qtd_cenoura,$qtd_batatinha) {
        return [(float)($valor_inicial),
                (float)($qtd_maca),
                (float)($qtd_melancia),
                (float)($qtd_laranja),
                (float)($qtd_repolho),
                (float)($qtd_cenoura),
                (float)($qtd_batatinha)];
    }

    //Calculará e retornará o valor do produto considerando a quantidade.
    function calculaValor($preco,$qtd) {
        return ($preco * $qtd);
    }

    //Função que formata o valor em reais, com duas casas decimais.
    function formatarMoeda($valor) {
        return "R$ " . number_format($valor, 2,',','.');    
    }

    //Calculará e retornará o valor restante da compra.
    function calculaValorRestante($valor_inicial,$total) {
        return ($valor_inicial - $total);
    }

?>