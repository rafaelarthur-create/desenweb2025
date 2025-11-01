<?php

    require_once "01_pessoa.php";

    $pessoaRafael = new Pessoa();
    $pessoaRafael->nome = "Rafael";
    $pessoaRafael->sobreNome = "Arthur";

    echo $pessoaRafael->getNomeCompleto();

    /*
    $nome = "Rafael";
    $sobreNome = "Arthur";

    function getNomeCompleto($nome, $sobreNome) {
        return $nome . " " . $sobreNome;
    }

    echo getNomeCompleto();
    */
?>