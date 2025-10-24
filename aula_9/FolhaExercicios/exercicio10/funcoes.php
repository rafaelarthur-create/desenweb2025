<?php

    function listarPastas($pastas, $nivel = 0) {
        foreach ($pastas as $chave => $valor ) {
            if (is_array($valor)) {
                echo str_repeat('- ', $nivel) . ' ' . $chave . '<br>';
                listarPastas($valor, $nivel + 1);
            } else {
                echo str_repeat('- ', $nivel) . ' ' . $valor . '<br>';
            }
        }
    }

?>