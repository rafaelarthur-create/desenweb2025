<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        
        //Consultando o arquivo de funções.
        require_once 'funcoes.php';

        //Recebendo os valores do formulário e aplicando as variáveis correspondentes.
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];

        //Caso algum dos valores venha nulo, todos serão tratados pela função 'tratarValor'.
        [$valor1,$valor2,$valor3] = tratarValor($_POST['valor1'] ?? null,
                                                $_POST['valor2'] ?? null,
                                                $_POST['valor3'] ?? null);
        
        //Aplicando a soma das variáveis.
        $somaValores = $valor1 + $valor2 + $valor3;
        echo "<br>";

        //Atribuindo às variáveis os valores retornados pelas funções de cálculo.
        $resultadoAzul = calculaCorAzul($valor1);
        $resultadoVerde = calculaCorVerde($valor2, $valor3);
        $resultadoVermelho = calculaCorVermelho($valor1, $valor2, $valor3);
        
        if($resultadoAzul) {
            echo "<div id='resultadoAzul'>
                    <a><b>Resultado:</b> $somaValores</a>
                </div>";    
        } elseif($resultadoVerde) {
            echo "<div id='resultadoVerde'>
                    <a><b>Resultado:</b> $somaValores</a>
                </div>"; 
        } elseif($resultadoVermelho) {
            echo "<div id='resultadoVermelho'>
                    <a><b>Resultado:</b> $somaValores</a>
                </div>"; 
        } else {
        echo "<a><b>Resultado:</b> $somaValores</a>";  
        }
        
    ?>
</body>
</html>
