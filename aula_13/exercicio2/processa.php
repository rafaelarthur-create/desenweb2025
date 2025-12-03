<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Resultado</title>
</head>
<body>
    <?php

        class Pessoa {
            public $nome;
            public $idade;

            public function __construct($n, $i) {
                $this->nome = $n;
                $this->idade = $i;
            }

            public function toJSON() {
                return json_encode(
                    array(
                        "nome" => $this->nome,
                        "idade" => $this->idade
                    )
                );
            }
        }

        $nome = $_POST['nome_pessoa'];
        $idade = $_POST['idade_pessoa'];

        $p = new Pessoa($nome, $idade);
        echo $p->toJSON();

    ?>
</body>
</html>