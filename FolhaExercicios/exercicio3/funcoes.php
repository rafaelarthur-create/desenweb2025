<?php

    //Função que converte os valores recebidos para int, tratando casos de valores nulos ou vazios.
    function tratarValor($lado) {
        return (int)$lado;
    } 

    //Função que calculará a área do quadrado.
    function calculadoLadoQuadrado($lado) {
        return ($lado * $lado);
    }
    
?>