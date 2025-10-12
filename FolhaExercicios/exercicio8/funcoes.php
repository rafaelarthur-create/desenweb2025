<?php

    function tratarValor($valor_avista) {
        return (float)$valor_avista;
    }

    function formatarMoeda($valor) {
        return "R$ " . number_format($valor, 2,',','.');    
    }

?>