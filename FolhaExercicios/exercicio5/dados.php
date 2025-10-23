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
    $resultado = calculaAreaTrianguloRetangulo($base,$altura);

    //Escrevendo o resultado.
    echo "<a><b>Resultado =</b> $resultado m²</a>";
    
?>