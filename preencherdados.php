<?php 
include 'config.php';


include 'editardados.php';
        $id = intval($_GET["id"]);
        $select ="select * from usuario where id='$id'";
       
        $usuarios = $acesso_login_bd->query($select);

        foreach($usuarios->fetchAll() as $usuario){
            $nome=$usuario["nome"];
            $cpf=$usuario["cpf"];
            $telefone =$usuario["telefone"];
            $endereco=$usuario["endereco"];
            $rg=$usuario["rg"];
            $telefone=$usuario["telefone"];
            $estado=$usuario["Estado"];
            $nascimento=$usuario["nascimento"];
            $situacao=$usuario["situacao"];
            $genero=$usuario["genero"];
       
      
           
           
        }
        


    ?>