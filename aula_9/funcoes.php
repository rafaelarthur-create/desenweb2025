<?php

    function calculaMediaNotas($notas) {
        $somaNotas = 0;
        for($i=0; $i < count($notas); $i++) {
            $somaNotas += $notas[$i];
        }

        $mediaNotas = $somaNotas / count($notas);

        return $mediaNotas;
    };

    function verificaRetornoStatusNotas($mediaNotas) {
        if ($mediaNotas >= 7){
            return true;
        }
        return false;
    }

    function calculaFrequencia($aulas) {
        $totalFrequencia = 0;
        for($i=0; $i < count($aulas); $i++) {
           $totalFrequencia += $aulas[$i];
        }
        
        $frequencia = ($totalFrequencia / count($aulas)) * 100;
        return $frequencia;
    }

    function verificaRetornoFrequencia($frequencia) {
        if ($frequencia >= 70) {
            return true;
        }
        return false;
    }
?>