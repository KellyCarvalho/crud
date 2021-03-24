<?php
include "config.php";

include "navbar.php";

if(isset($_GET["id"])):
    $id = intval($_GET["id"]);
    endif;
    $select = "select from usuario";

$usuarios = $acesso_login_bd->query($select);

foreach($usuarios->fetchAll() as $usuario){
    echo $usuario["nome"];

     
     
  }

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
    <title>Editar</title>
  </head>
  <body>
 

<h1>Edição de Clientes</h1>

<form method="post">

<input type="hidden" value="">
<label class="col-form-label">Nome</label>

<input class="form-control" type="text" name="nome" >


<label class="col-form-label">CPF</label>

<input class="form-control" type="number" name="cpf" value="">



<label class="col-form-label">Endereço</label>

<input class="form-control" type="text" name="endereco" value="">

<label class="col-form-label">RG</label>

<input class="form-control" type="number" name="rg" value="">


<label class="col-form-label">Telefone</label>
<input type="tel" name="telefone" id="">


<label>Estado</label>
<select class="form-control" name="estado" id="uf">
	<option value="">Selecione</option>
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espírito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MT">Mato Grosso</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
    </select>
<br>


<label class="col-sm-2 col-form-label">Data de Nascimento</label>

<input class="col-sm-2 col-form-label" type="date" name="nascimento" value=""> 

<label class="col-sm-2 col-form-label">Ativo</label>
<input class="col-sm-2 col-form-label" type="radio" name="situacao" value="1" checked> 

<label class="col-sm-2 col-form-label">Desativado</label>
<input class="col-sm-2 col-form-label" type="radio" name="situacao" value="0" > 


<button type="submit" name="editar">Salvar</button>
</form>
<?php 

if(isset($_POST["editar"])<>null){

    header("Location: listarDados.php");
    die();
}


?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>