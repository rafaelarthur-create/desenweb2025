<?php

    $divisor = $_GET['divisor'];
    $dividendo = $_GET['dividendo'];

    $valorComDesconto = $divisor / $dividendo;

    echo "Valor: $divisor <br>";
    echo "Desconto: $dividendo <br>";
    echo "Valor com desconto: $valorComDesconto";

?>