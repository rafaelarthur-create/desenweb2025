<?php

    $disciplina = array("Inglês II","Algoritmos II","Programação Web I");
    $professor = array("Jeancarlo Visentainer","Fernando Bastos","Cleber Nardelli");
    for ($i = 0; $i < count($disciplina); $i++) {
        echo "$disciplina[$i] - $professor[$i] ";
        echo "<br>";
    }

?>
