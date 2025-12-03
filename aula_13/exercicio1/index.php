<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
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
        }

        $p1 = new Pessoa("João", 50);
        $p2 = new Pessoa("Maria", 45);
        $p3 = new Pessoa("Rafael", 20);
        $p4 = new Pessoa("Ana", 17);

        $aFamilia = array($p1, $p2, $p3, $p4);

        echo "Instâncias criadas e armazenadas no array. <br>";

        $arq = fopen("familia.txt", "w");

        foreach($aFamilia as $p) {
            fwrite($arq, $p->nome . " - Idade: " . $p->idade . PHP_EOL);
        }

        fclose($arq);

        echo "Arquivo TXT gerado com sucesso!";

    ?>
</body>
</html>