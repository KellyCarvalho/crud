<?php
    include 'config.php';
if (isset($_POST["atualizar"])) {


    try {
$id=$_POST['id'];
$nome= $_POST['nome'];
$cpf= $_POST['cpf'];
$rg= $_POST['rg'];
$endereco= $_POST['endereco'];
$estado= $_POST["estado"];
$situacao= $_POST["situacao"];
$nascimento= $_POST['nascimento'];
$genero=$_POST['genero'];


if(isCpf($cpf)){
    $update ="update usuario set nome='$nome',endereco='$endereco',estado='$estado',situacao='$situacao',genero='$genero' where id='$id'";
    $acesso_login_bd->query($update);
    header("location: listarDados.php");
}else{
    
}
} catch (PDOException $e) {
      
    }


}else{
   
}


function isCpf($cpf){
    $primeiroDigito=0;
    $segundoDigito=0;
    
    $cpf=preg_replace("/[^0-9]/","",$cpf);

    for($i =0, $x=10;$i<=8;$i++,$x--){
        $primeiroDigito+=$cpf[$i]*$x;


    }

    for($i=0,$x=11;$i<=9;$i++,$x--){
        if(str_repeat($i,11)==$cpf){
           return false;
        }
        $segundoDigito+=$cpf[$i]*$x;
    }

   $verificarPrimeiroDigito = (($primeiroDigito%11)<2) ? 0 : 11-($primeiroDigito%11);
   $verificarSegundoDigito = (($segundoDigito%11)<2) ? 0 : 11-($segundoDigito%11);

   if($verificarPrimeiroDigito<>$cpf[9]&$verificarSegundoDigito<>$cpf[10]){
    return false;
   }


   return true;
   
  
 
}
?>