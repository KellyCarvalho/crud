<?php
    
include 'config.php';
    
        $select ="select * from usuario";
       
        $usuarios = $acesso_login_bd->query($select);

        foreach($usuarios->fetchAll() as $usuario){
          echo $usuario["nome"];
 
           
           
        }
        


    ?>