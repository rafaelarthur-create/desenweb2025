<?php
   
   function tratarValor($valor1,$valor2,$valor3) {
        
        return [(int)($valor1),
                (int)($valor2),
                (int)($valor3)];
    } 

   function calculaCorAzul($valor1) {
        return ($valor1 >= 10);
    }

   function calculaCorVerde($valor2, $valor3) {
        return ($valor2 < $valor3);  
    }
    
   function calculaCorVermelho($valor1, $valor2, $valor3) {
        return ($valor3 < $valor1 && $valor3 < $valor2);  
    } 
    
?>

   