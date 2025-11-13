<?php

    require_once 'db.php';  

    $sql_perguntas = "SELECT id, texto_pergunta FROM perguntas WHERE status = TRUE ORDER BY id";
    $result = pg_query($condb, $sql_perguntas);

    if (!$result) {
        die("Erro ao executar consultas: " . pg_last_error($condb));
    }

    $perguntas = pg_fetch_all($result) ?: [];
    
?>