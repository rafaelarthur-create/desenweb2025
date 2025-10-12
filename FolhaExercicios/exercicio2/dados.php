<?php

    require_once 'funcoes.php';

    $valor1 = $_POST['valor1'];
    $valor1 = tratarValor($_POST['valor1'] ?? null);

    $resultadoPar = calculaPar($valor1);

    echo $valor1;
    if ($resultadoPar) {
        echo "<br><br> Valor divisível por 2.";
    } else {
        echo "<br><br> O valor não é divisível por 2.";
    }

?>