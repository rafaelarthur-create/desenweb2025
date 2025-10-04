<?php
    //Inclusao do arquivo de funções.
    require_once 'funcoes.php';

    $notas = array(10,9,8,8,7);
    $frequencia = array(1,1,1,1,0);
    
    $mediaNotas = calculaMediaNotas($notas);
    $frequencia = calculaFrequencia($frequencia);

    if(verificaRetornoFrequencia($frequencia,70)) {
        echo "Aprovado por frequência! <br>";
    } else{
        echo "Reprovado por frequência! <br>";
    }

    if(verificaRetornoStatusNotas($notas,7)) {
        echo "Aprovado por nota! <br>";
    } else{
        echo "Reprovado por nota! <br>";
    }
?>