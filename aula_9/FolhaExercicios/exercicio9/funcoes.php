<?php

    //Função que converte o valor recebido para float, tratando caso o valor for nulo ou vazio.
    function tratarValor($valor_avista) {
        return (float)$valor_avista;
    }

    //Função que formata o valor em reais, com duas casas decimais.
    function formatarMoeda($valor) {
        return "R$ " . number_format($valor, 2,',','.');    
    }

?>