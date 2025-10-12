<?php

    require_once 'funcoes.php';

    $base = $_POST['base'];
    $altura = $_POST['altura'];
    [$base,$altura] = tratarValor($_POST['base'] ?? null, 
                                  $_POST['altura'] ?? null);

    $resultado = calculaAreaTrianguloRetangulo($base,$altura);

    echo "<a><b>Resultado =</b> $resultado m²</a>";
    
?>