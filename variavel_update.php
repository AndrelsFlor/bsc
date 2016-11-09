<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/estilo.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" />
		<title>Cadastro de Variável - BSC</title>

	</head>
	<body>
		<?php
			include_once 'nav_bar.php';
			require_once('classes/tarefas.php');
			require_once('classes/variaveis.php');

			$variavel = new Variaveis();
			$tarefa = new Tarefas();
			$id = $_GET['id'];
			$valor = $variavel->select($id);
		?>

<div class="container">

			<h1 class="col-lg-6 col-lg-offset-4">Cadastro de Variável</h1>

	<form class="col-lg-8 col-lg-offset-2" id="formObjetivo">

	<div class="form-group">
		<label class="control-label" for="txt_nome">Nome</label>
		<input class="form-control" id="txt_nome" name="nome" type="text" value="<?php echo $valor->variavel;?>"/>
	</div>

	

	<div class="form-group">
		<div class="row">
		<div class="col-lg-5">
	  <label class="control-label " for="txt_media">Meta</label>
	  <div class="input-group">
		<input type="text" class="form-control" id="txt_media" name="txt_media" value="<?php echo $valor->meta?>" >
		<span class="input-group-addon">%</span>
		</div></div></div></div>

	<div class="form-group">
		<label class="control-label" for="txt_nome">Atingido</label>
		<input class="form-control" id="txt_nome" name="atingido" type="text" value="<?php echo $valor->peso;?>"/>
	</div>

	<div class="form-group">
	<div class="row">
	<div class="col-lg-5">

	

	<div class="form-group">
		<label class="control-label" for="selectTarefa">Tarefa à qual se aplica</label><br>
		<select id = "selectTarefa" name="selectTarefa">
			<?php
				foreach($tarefa->selectAll() as $valor){

			?>
			<option value="<?php echo $valor->Id; ?>"><?php echo $valor->Nome;?></option>
			<?php

				}
			?>

		</select>
	</div>

	<div class="form-group">
		<button class="btn btn-danger  btn-lg" name="btn_cancelar" type="button">Cancelar</button>
		<button class="btn btn-success pull-right  btn-lg" name="btn_salvar" type="submit">Salvar</button>
	</div>
	<input type="hidden" value="updateVar" name="acao">
	<input type="hidden" value="<?php echo $id;?>" name="id">
</form>



</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.pt-BR.min.js"></script>



	<script>
	    $(document).ready(function(){
	      var date_input=$('input[name="txt_dataInicio"],input[name="txt_dataFinal"]');
	      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
	      var options={
			  format: "dd/mm/yyyy",
  			language: "pt-BR",
  			orientation: "auto",
  			daysOfWeekDisabled: "0,6",
  			todayHighlight: true,
	        autoclose: true,
	      };
	      date_input.datepicker(options);

	      $("#formObjetivo").submit(function(e){
	      	e.preventDefault();
	      	var data = $(this).serialize();
	      	$.ajax({
	      		url:"main.php",
	      		type:"POST",
	      		data:data,
	      		success:function(){
	      			alert("Variável alterada com sucesso!");
	      			$("#formObjetivo").trigger("reset");
	      		}

	      	});
	      });


	  });

	</script>

	</body>
</html>
