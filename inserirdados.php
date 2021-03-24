    <?php
 
$erro =false;
$CPF = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($dados) {
    $dados =array_map('strip_tags',$dados);
    $dados =array_map('trim',$dados);


    if(strlen($dados['cpf'])<11){
            $erro=true;
            $_SESSION['msg']="CPF inválido menos de 11 caracteres";
        }
}


if(!$erro){

    if(isset($_POST["salvar"])){

        $nome= $_POST['nome'];
         
        $cpf= $_POST['cpf'];
        $rg= $_POST['rg'];
        $endereco= $_POST['endereco'];
        $estado= $_POST["estado"];
        $situacao= $_POST["situacao"];
        $nascimento= $_POST['nascimento'];
        $telefone=$_POST['telefone'];
        $genero=$_POST['genero'];

    if(isCpf($cpf)){
        $insert ="insert into usuario(nome,cpf,rg,endereco,estado,situacao,nascimento,telefone,genero) values('$nome','$cpf','$rg','$endereco','$estado','$situacao','$nascimento','$telefone','$genero')";
       
       $sucesso= $acesso_login_bd->query($insert);  

        if($sucesso){
            $_SESSION['msg']="Usuário cadastrado com sucesso";
            header("location: listarDados.php");
        }else{
            $_SESSION['msg']="Ocorreu um erro";
        }
      
   

        
        
    }else{
       
        echo "<script>alert('CPF inválido')</script>";
        
    }
      

       
   
      
     

    }else{
  
    }



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