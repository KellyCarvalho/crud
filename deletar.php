<?php 
include 'config.php';
if (isset($_GET["id"])) {
  echo "ok";
  $id = intval($_GET["id"]);
$deletar = "Delete from usuario where id='$id' ";
$acesso_login_bd->query($deletar);

if($deletar);
header('Location: listarDados.php');

}else{
    //echo "Não estou rebendo nada";
}






?>



