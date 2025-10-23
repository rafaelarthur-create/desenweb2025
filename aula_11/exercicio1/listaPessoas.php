<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <?php
        
        define('DB_HOST','localhost'); 
        define('DB_PORT','5432'); 
        define('DB_USER','postgres'); 
        define('DB_PASS','postgres'); 
        define('DB_NAME','local');

        $connectionString = 'host='.DB_HOST." port=".DB_PORT." dbname=".DB_NAME." user=".DB_USER." password=".DB_PASS;

        /* Estabelecer a conexão */
        $condb = pg_connect($connectionString);
            if(!$condb) {
                echo "Erro ao conectar ao banco de dados.";
            } else {
                echo "Conexão bem sucedida. <br>";
            }
        
        $query = "SELECT PESNOME,PESSOBRENOME,PESEMAIL,PESPASSWORD,PESCIDADE,PESESTADO FROM TBPESSOA";
        $result = pg_query($condb, $query);

        echo "<h2>Lista de Cadastros</h2>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                </tr>";

            //Exibir os resultados
            while($row = pg_fetch_assoc($result)) {
                echo "<tr>";
                        echo '<td>' . htmlspecialchars($row['pesnome']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['pessobrenome']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['pesemail']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['pespassword']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['pescidade']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['pesestado']) . '</td>';
                echo "</tr>";
            }

        echo "</table>";

    ?>
</body>
</html>