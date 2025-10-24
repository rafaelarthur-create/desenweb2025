<?php

    //Função que converte os valores recebidos para int, tratando casos de valores nulos ou vazios.
    function tratarValor($base,$altura) {
        return [(int)($base), 
                (int)($altura)];
    } 

    //Função que calculará a área de um retângulo.
    function calculaAreaRetangulo($base,$altura) {
        return ($base * $altura);
    }

?>