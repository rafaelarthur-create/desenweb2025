<?php

    require_once 'funcoes.php';

    $base = $_POST['base'];
    $altura = $_POST['altura'];
    [$base,$altura] = tratarValor($_POST['base'] ?? null, 
                                  $_POST['altura'] ?? null);

    $resultado = calculaAreaRetangulo($base,$altura);

    if($resultado > 10) {
        echo "<h1>A área do retângulo de lados $base e $altura metros é $resultado metros quadrados.</h1>";
    } else {
        echo "<h3>A área do retângulo de lados $base e $altura metros é $resultado metros quadrados.</h3>";
    }
?>