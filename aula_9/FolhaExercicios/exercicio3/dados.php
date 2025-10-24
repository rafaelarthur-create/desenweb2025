<?php

    //Consultando o arquivo de funções.
    require_once 'funcoes.php';

    //Recebendo os valores do formulário e aplicando as variáveis correspondentes.
    $lado = $_POST['lado'];
    //Caso algum dos valores venha nulo, todos serão tratados pela função 'tratarValor'.
    $lado = tratarValor($_POST['lado'] ?? null);

    //Atribuindo à variável os valores retornados pelas funções de cálculo.
    $resultado = calculadoLadoQuadrado($lado);

    //Escrevendo a frase.
    echo "A área do quadrado de lado $lado metros é $resultado metros quadrados.";

?>