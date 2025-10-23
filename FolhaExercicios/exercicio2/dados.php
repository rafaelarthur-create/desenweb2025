<?php

    //Consultando o arquivo de funções.
    require_once 'funcoes.php';

    //Recebendo os valores do formulário e aplicando as variáveis correspondentes.
    $valor1 = $_POST['valor1'];
    //Caso algum dos valores venha nulo, todos serão tratados pela função 'tratarValor'.
    $valor1 = tratarValor($_POST['valor1'] ?? null);

    //Atribuindo à variável os valores retornados pelas funções de cálculo.
    $resultadoPar = calculaPar($valor1);

    
    echo $valor1;
    //Escrevendo a condição do valor.
    if ($resultadoPar) {
        echo "<br><br> Valor divisível por 2.";
    } else {
        echo "<br><br> O valor não é divisível por 2.";
    }

?>