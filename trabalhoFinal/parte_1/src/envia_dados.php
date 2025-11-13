<?php

    require_once 'db.php';  
    require_once 'consulta_pergunta.php';
    require_once 'funcoes.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $id_setor = 1;
        $id_disp = 1;
        $feedback = $_POST['feedback'] ?? null;

        foreach ($_POST['nota'] as $id_pergunta => $nota) {
            
            $parametros = [
                $id_setor,
                $id_pergunta,
                $id_disp,
                $nota,
                $feedback
            ];

            $sql = "INSERT INTO avaliacoes (id_setor, id_pergunta, id_disp, nota, feedback) 
                    VALUES ($1, $2, $3, $4, $5)";
            
            $resultado = pg_query_params($condb, $sql, $parametros);

            if (!$resultado) {
                echo "Erro ao inserir avaliação: " . pg_last_error($condb);
            }
        }
        header('Location: ../public/obrigado.php');
        exit;
    } else {
        echo "Acesso inválido.";
    }   
?>