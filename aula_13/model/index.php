<?php

    require_once 'pessoa.php';

    $pessoaDados = new Pessoa();
    $pessoaDados = setNome("Rafael");
    $pessoaDados = setSobreNome("Arthur");
    $pessoaDados = setDataNascimento(new DateTime("2005-11-13"));

    $contatoTelefone = new Contato(2, "Telefone residencial");
    $pessoaDados->addContato($contato);

    //escrever diretamente no arquivo;

?>