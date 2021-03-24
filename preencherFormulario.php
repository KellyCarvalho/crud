<?php
    
include 'config.php';
include 'navbar.php';
require 'preencherdados.php';
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




<input type="hidden" value="<?php echo $id ?>" name="id">
<div class="form-control">
<div class="col-auto">
<label class="form-label">Nome</label>

  </div>
  <div class="col-auto">
  <input class="form-control" id="input-lg" type="text" name="nome"value="<?php echo $nome ?>">
  </div>

  <div class="col-auto">
<label class="form-label">CPF</label>
  </div>

  <div class="col-auto">
  <input class="form-control" id="input-sm" placeholder="CPF" type="number" name="cpf" value="<?php echo $cpf ?>">

  </div>


<div class="col-auto">
  
  <label class="form-label">Endereço</label>

</div>

<div class="col-auto">
  
<input id="input-lg" class="form-control" type="text" name="endereco" value="<?php echo $endereco ?>">

</div>

<div class="col-auto">
<label class="form-label">Telefone</label>
  </div>

  <div class="col-auto">
  <input id="input-sm" type="tel" class="form-control" name="telefone" value="<?php echo $telefone ?>">

  </div>

  <div class="col-auto">
  <label class="col-form-label">RG</label>
</div>

<div class="col-auto">
<input id="input-sm" class="form-control" type="number" name="rg" value="<?php echo $rg ?>">

  </div>
  <div class="col-auto">
  <label class="form-label">CPF</label>

</div>

<div class="col-auto">
<input id="input-sm" class="form-control" placeholder="CPF" type="number" name="cpf" value="<?php echo $cpf ?>">

  </div>
  <div class="col-auto">
  <label>Estado</label>
</div>

<div id="input-sm" class="col-auto">

<select class="form-control" name="estado" id="uf" >
	<option ><?php echo $estado ?></option>
	<option value="Acre">Acre</option>
	<option value="Alagoas">Alagoas</option>
	<option value="Amapá">Amapá</option>
	<option value="Amazonas">Amazonas</option>
	<option value="Bahia">Bahia</option>
	<option value="Ceará">Ceará</option>
	<option value="Distrito Federal">Espírito Santo</option>
	<option value="Goiás">Goiás</option>
	<option value="Maranhão">Maranhão</option>
	<option value="Mato Grosso">Mato Grosso</option>
	<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
	<option value="Minas Gerais">Minas Gerais</option>
	<option value="Pará">Pará</option>
	<option value="Paraíba">Paraíba</option>
	<option value="Paraná">Paraná</option>
	<option value="Pernambuco">Pernambuco</option>
	<option value="Piauí">Piauí</option>
	<option value="Rio Grande do Norte">Rio Grande do Norte</option>
	<option value="Rio Grande do Sul">Rio Grande do Sul</option>
	<option value="Rondônia">Rondônia</option>
	<option value="Roraima">Roraima</option>
	<option value="Santa Catarina">Santa Catarina</option>
	<option value="São Paulo">São Paulo</option>
	<option value="Sergipe">Sergipe</option>
	<option value="Tocantins">Tocantins</option>
    </select>
  </div>

  <div class="col-auto">
  <label class="col-sm-2 col-form-label">Data de Nascimento</label>
</div>

<div class="col-auto">
<input id="input-sm" class="col-sm-2 col-form-label" type="date" name="nascimento" value="<?php echo $nascimento ?>"> 

  </div>



  <div class="col-auto">

<?php
	if($situacao==1){
		echo '<label class="col-sm-2 col-form-label">Ativo</label><input class="col-sm-2 col-form-label" type="radio" name="situacao" value="1" checked><label class="col-sm-2 col-form-label">Desativado</label><input class="col-sm-2 col-form-label" type="radio" name="situacao" value="0"> <br>';

	}else{
		echo '<label class="col-sm-2 col-form-label">Ativo</label><input class="col-sm-2 col-form-label" type="radio" name="situacao" value="1"><label class="col-sm-2 col-form-label">Desativado</label><input class="col-sm-2 col-form-label" type="radio" name="situacao" value="0" checked> ';

	}
?>
  
</div>


<div class="col-auto">
<label>Sexo</label>
<?php if($genero=="1"){ echo '<select name="genero">; <option value="1">Feminino</option><option value="2">Masculino</option></select>';}else{echo '<select name="genero"><option value="2">Masculino</option><option value="1">Feminino</option></select>';}?>

  <br>
<br>
<button class="btn btn-success" type="submit" name="atualizar">Atualizar</button>
</form>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>