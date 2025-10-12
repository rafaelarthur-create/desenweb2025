<?php
   
    function tratarValor($valor1) {
        return (int)$valor1;
    } 

    function calculaPar($valor1) {
        if ($valor1 % 2 == 0) {
            return true;
        }
        return false;
    }
?>