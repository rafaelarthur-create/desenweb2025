<?php
    
    //Consultando o arquivo de funções.
    require_once 'funcoes.php';

    //Recebendo os valores do formulário e aplicando as variáveis correspondentes.
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    //Caso algum dos valores venha nulo, todos serão tratados pela função 'tratarValor'.
    [$base,$altura] = tratarValor($_POST['base'] ?? null, 
                                  $_POST['altura'] ?? null);

    //Atribuindo à variável os valores retornados pelas funções de cálculo.
    $resultado = calculaAreaRetangulo($base,$altura);

    //Utlizando a variável $resultado para aplicar as condições e escrever a frase correspondente.
    if($resultado > 10) {
        echo "<h1>A área do retângulo de lados $base e $altura metros é $resultado metros quadrados.</h1>";
    } else {
        echo "<h3>A área do retângulo de lados $base e $altura metros é $resultado metros quadrados.</h3>";
    }
?>