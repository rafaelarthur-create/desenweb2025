<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática - 3</title>
</head>
<body>
    <?php
        $salario1 = 2000;
        $salario2 = 2000;

        $salario2 = $salario1;
        $salario2++;

        $salario1 *= 1.1;

        echo "Valor do salário 1: $salario1";
        echo "<br>";

        echo "Valor salário 2: $salario2";
        echo "<br>";

        echo "<br>";
        if ($salario1 > $salario2) {
            echo "O Valor do salário 1 é maior que o valor da salário 2";
        }  
        elseif ($salario1 < $salario2) {
            echo "O Valor da salário 1 é menor que o valor da salário 2";
        } 
        else {
            echo "Os valores são iguais";
        }

    ?>
    
</body>
</html>