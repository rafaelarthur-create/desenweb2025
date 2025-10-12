<?php

    require_once 'funcoes.php';

    $lado = $_POST['lado'];
    $lado = tratarValor($_POST['lado'] ?? null);

    $resultado = calculadoLadoQuadrado($lado);

    echo "A área do quadrado de lado $lado metros é $resultado metros quadrados.";

?>