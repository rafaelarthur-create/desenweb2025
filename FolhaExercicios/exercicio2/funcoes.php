<?php
   
   function tratarValor($valor) {
        if ($valor === '' || $valor === null) {
            return 0;
        }
        return (int)$valor;
    } 

    function calculaPar($valor1) {
        if ($valor1 % 2 == 0) {
            return true;
        }
        return false;
    }
?>