<?php

    define('DB_HOST','localhost'); 
    define('DB_PORT','5432'); 
    define('DB_USER','postgres'); 
    define('DB_PASS','postgres'); 
    define('DB_NAME','db');

    $connectionString = 'host='.DB_HOST.
                            " port=".DB_PORT.
                            " dbname=".DB_NAME.
                            " user=".DB_USER.
                            " password=".DB_PASS;

    /* Estabelecer a conexão */
    $condb = pg_connect($connectionString);
        if(!$condb) {
            echo "Erro ao conectar ao banco de dados.";
        }
?>