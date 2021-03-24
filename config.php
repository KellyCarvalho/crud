<?php

$conexao = "mysql:dbname=clientes;host=localhost";
$usuario="root";
$senha="";

try{

    $acesso_login_bd = new PDO($conexao,$usuario,$senha);


}catch(PDOException $e){

$erro= "Não conectou ".$e->getMessage();
}

?>