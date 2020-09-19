<?php
    $server = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "login";
try{
    $conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro){
    echo "Falha na conexão {$erro->getMessage()}";
    $conexao = null;
}
?>