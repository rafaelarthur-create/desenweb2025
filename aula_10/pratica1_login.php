<?php
    session_start();
    
    if(!isset($_SESSION['usuario'])) {

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];    
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        $_SESSION['datahora'] = date('d/m/Y H:i:s');
        $_SESSION['inicio_requisicao'] = date('d/m/Y H:i:s');
        
        echo "Sessão iniciada e usuário registrado.";
    } else {
        $temposecao = time();
        $_SESSION['ultima_requisicao'] = date('d/m/Y H:i:s');
        $usuario = $_SESSION['usuario'];

        if ($temposecao > 200) {
            if(!isset($_COOKIE['usuario'])) {
            setcookie('usuario', $_SESSION['usuario'], time() + (60*5), "/");
            setcookie('inicio_requisicao', $_SESSION['inicio_requisicao'], time() + (60 * 5), "/");
            }
        }
        echo "Usuário já logado: " . $usuario . "<br>";
        echo "Início da sessão: " . $_SESSION['datahora'] . "<br>";
        echo "Ultima requisição: " . $_SESSION['ultima_requisicao'] . "<br>";
        echo "<a href='pratica1_login.php'>Recarregar</a>";
    } 
    
?>