<?php

    session_start();

    if(!isset($_SESSION['usuario'])) {
        $_SESSION['usuario'] = 'Visitante';
    }

    echo "Olá, ". $_SESSION['usuario']."! Você não está logado.";
    echo "<a href='02_session_continua.php'> Clique aqui para continuar</a>";
    

?>