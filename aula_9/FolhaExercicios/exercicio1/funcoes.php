<?php
   
   //Função que converte os valores recebidos para int, tratando casos de valores nulos ou vazios.
   function tratarValor($valor1,$valor2,$valor3) { 
        return [(int)($valor1),
                (int)($valor2),
                (int)($valor3)];
    } 

   //Identificar e retornar o valor Azul.
   function calculaCorAzul($valor1) {
        return ($valor1 >= 10);
    }

   //Identificar e retornar o valor Verde.
   function calculaCorVerde($valor2, $valor3) {
        return ($valor2 < $valor3);  
    }
   
   //Identificar e retornar o valor Vermelho.
   function calculaCorVermelho($valor1, $valor2, $valor3) {
        return ($valor3 < $valor1 && $valor3 < $valor2);  
    } 
    
?>

   