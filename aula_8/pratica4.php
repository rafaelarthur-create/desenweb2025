<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática - 4</title>
</head>
<body>
    <?php
        $salario1 = 500;
        $salario2 = 1000;

        $salario2 = $salario1;
        $salario2++;

        $salario1 *= 1.1;

        echo "Valor do salário 1: $salario1";
        echo "<br>";

        echo "Valor salário 2: $salario2";
        echo "<br>";

        echo "<br>";
        for($i = 0; $i < 100; ++$i) {
            $salario1++;
            if ($i == 49) {
                break;
            }
        }

        echo "<br>";
        if ($salario1 < $salario2) {
            echo"Valor do salário 1 menor que o salário 2.";
        }
    ?>
    
</body>
</html>