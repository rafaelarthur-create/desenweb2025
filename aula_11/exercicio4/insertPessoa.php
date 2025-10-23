<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviando Dados</title>
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

        /* Executar uma consulta */
        $result = pg_query($condb, "SELECT COUNT(*) AS QTDTABS FROM pg_tables");
            while($row = pg_fetch_assoc($result)) {
                echo "Número de tabelas no banco de dados: " . $row['qtdtabs'];
            }
        }
        
        $email = $_POST['email_pessoa'];
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Email inválido! Informe do forma correta com o '@', novamente.");
        }
        
        $aDados = array($_POST['nome_pessoa'],
                        $_POST['sobrenome_pessoa'],
                        $_POST['email_pessoa'],
                        $_POST['senha_pessoa'],
                        $_POST['cidade_pessoa'],
                        $_POST['estado_pessoa']);

        $result = pg_query_params($condb, "INSERT INTO TBPESSOA (PESNOME, PESSOBRENOME, PESEMAIL, PESPASSWORD, PESCIDADE, PESESTADO)
                                                VALUES ($1, $2, $3, $4, $5, $6)",
                                            $aDados);

        if($result) {
            echo "<br> Dados inseridos com sucesso na tabela TBPESSOA!";
        }

    ?>    
</body>
</html>
