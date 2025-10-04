<?php

    $valor = $_GET['valor'];
    $desconto = $_GET['desconto'];

    $valorComDesconto = $valor / $desconto;

    echo "Valor: $valor <br>";
    echo "Desconto: $desconto <br>";
    echo "Valor com desconto: $valorComDesconto";

?>