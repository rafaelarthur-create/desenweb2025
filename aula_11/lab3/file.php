<?php

    define('arquivo', 'dados.txt');
    define('arquivo2', 'dados2.txt');

    if(file_exists(arquivo)) {
        echo "O arquivo existe.<br>";
    
        $conteudo = file_get_contents(arquivo);
        echo "Conteudo do arquivo:<br>";
        echo nl2br($conteudo);

        //Escrever o novo arquivo
        $conteudoNovo = serialize($conteudo);
        file_put_contents(arquivo2, $conteudoNovo);
        echo "<br>Conteudo escrito no novo arquivo 'dados2.txt'.";
    }

?>