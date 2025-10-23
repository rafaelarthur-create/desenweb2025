<?php

    //Função que converte os valores recebidos para int, tratando casos de valores nulos ou vazios.
    function tratarValor($base,$altura) {
        return [(int)($base), 
                (int)($altura)];
    } 

    //Função calculará a área do triângulo retângulo.
    function calculaAreaTrianguloRetangulo($base,$altura) {
        return ($base * $altura) / 2;
    }

?>