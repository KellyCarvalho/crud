<?php
include "config.php";
include "navbar.php";
include "deletar.php";



$select ="select * from usuario";
$usuarios = $acesso_login_bd->query($select);


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Clientes</title>
  </head>
  <body>

  <div class="">
  <h1>Clientes</h1>

<table class="table caption-top">

<thead>
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Nome</th>
    <th scope="col">Telefone</th>
    <th scope="col">CPF</th>
    <th scope="col">RG</th>
    <th scope="col">Estado</th>
    <th scope="col">Status</th>

    <th scope="col">Ações</th>
    <th scope="col"></th>
    
  </tr>
</thead>
<tbody>
  <tr>
  <?php 
  while($usuario = $usuarios ->fetch()){?>
  <th scope="row"><?php echo $usuario["id"]; ?></th>
 <th scope="row"><?php echo $usuario["nome"]; ?></th>
 <th scope="row"><?php echo $usuario["telefone"]; ?></th>
 <th scope="row"><?php echo $usuario["cpf"]; ?></th>
 <th scope="row"><?php echo $usuario["rg"]; ?></th>
 <th scope="row"><?php echo $usuario["Estado"]; ?></th>
 <th scope="row">
 <?php if($usuario["situacao"]==0){?>
<?php echo "Desativado"; ?>
 <?php }else{
echo "Ativo";
 }?>

 <th scope="row"><a href="deletar.php?id=<?php echo $usuario["id"]?>" class="btn btn-danger">Deletar</a></th>
 <th scope="row"><a href="preencherFormulario.php?id=<?php echo $usuario["id"]?>" class="btn btn-primary">Editar</a></th>
</th>

   
  </tr>


 <?php } ?> 

 

</tbody>
</table>
  </div>
  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>