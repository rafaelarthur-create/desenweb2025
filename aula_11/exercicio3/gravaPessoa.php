<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviando Dados JSON</title>
</head>
<body>
    <?php

        if(isset($_POST)) {
            $pessoaJson = json_encode($_POST) . PHP_EOL;
            file_put_contents('cadastro_pessoa.json', $pessoaJson, FILE_APPEND);
        }

    ?>    
</body>
</html>
