<?php

    session_start(); 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Página de Avaliação</title>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo!</h1>
        <p>Toque abaixo para iniciar sua avaliação.</p>
        <form action="../src/avaliacao.php" method="get">
            <button type="submit">Iniciar Avaliação</button>
        </form>
    </div>
    <footer>
        Sua avaliação espontânea é anônima, nenhuma informação pessoal é solicitada ou armazenada.
    </footer>
</body>
</html>   
