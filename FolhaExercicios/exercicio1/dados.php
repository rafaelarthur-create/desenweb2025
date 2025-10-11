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
            
        require_once 'funcoes.php';

        echo $_POST['valor1'] . "<br>";
        echo $_POST['valor2'] . "<br>";
        echo $_POST['valor3'] . "<br>";
        
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];
        $valor1 = tratarValor($_POST['valor1'] ?? null);
        $valor2 = tratarValor($_POST['valor2'] ?? null);
        $valor3 = tratarValor($_POST['valor3'] ?? null);

        $somaValores = $valor1 + $valor2 + $valor3;
        echo "<br>";

        $resultadoAzul = calculaCorAzul($valor1);
        $resultadoVerde = calculaCorVerde($valor2, $valor3);
        $resultadoVermelho = calculaCorVermelho($valor1, $valor2, $valor3);
        
        if($resultadoAzul) {
            echo "<div id='resultadoAzul'>
                    $somaValores
                </div>";    
        } elseif($resultadoVerde) {
            echo "<div id='resultadoVerde'>
                    $somaValores
                </div>"; 
        } elseif($resultadoVermelho) {
            echo "<div id='resultadoVermelho'>
                    $somaValores
                </div>"; 
        } else {
        echo $somaValores;  
        }
        
    ?>
</body>
</html>
