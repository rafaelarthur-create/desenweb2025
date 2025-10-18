<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cadastros</title>
</head>
<body>
    <?php

        define('DB_HOST','localhost'); 
        define('DB_PORT','5432'); 
        define('DB_USER','postgres'); 
        define('DB_PASS','postgres'); 
        define('DB_NAME','local');

        $connectionString = 'host='.DB_HOST.
                            " port=".DB_PORT.
                            " dbname=".DB_NAME.
                            " user=".DB_USER.
                            " password=".DB_PASS;

        /* Estabelecer a conexão */
        $condb = pg_connect($connectionString);
            if(!$condb) {
                echo "Erro ao conectar ao banco de dados.";
            } else {
                echo "Conexão bem sucedida. <br>";
        }

        
    ?>
</body>
</html>