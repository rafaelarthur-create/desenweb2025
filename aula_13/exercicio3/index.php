<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
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

        $p1 = new Pessoa("Pedro", 50);
        $p2 = new Pessoa("Maria", 45);
        $p3 = new Pessoa("Rafael", 20);
        $p4 = new Pessoa("Ana", 17);

        $aFamilia = array($p1, $p2, $p3, $p4);

        foreach($aFamilia as $p) {

            $linhaJSON = $p->toJSON() . PHP_EOL;

            file_put_contents("familia.json", $linhaJSON, FILE_APPEND);
        }

        echo "Arquivo JSON gerado com sucesso!";

    ?>
</body>
</html>