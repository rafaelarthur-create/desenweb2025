<?php
   
    //Função que converte os valores recebidos para int, tratando casos de valores nulos ou vazios.
    function tratarValor($valor1) {
        return (int)$valor1;
    } 

    //Função que idenficará se divisível por 2, retornará true ou false.
    function calculaPar($valor1) {
        if ($valor1 % 2 == 0) {
            return true;
        }
        return false;
    }
?>