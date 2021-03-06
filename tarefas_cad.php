<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/estilo.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" />
		<title>Cadastro de Tarefas - BSC</title>

	</head>
	<body>
		<?php
			include_once 'nav_bar.php';
			require_once("classes/objetivo.php");

			$objetivo = new Objetivo();
		?>



<div class="container">

			<h1 class="col-lg-6 col-lg-offset-4">Cadastro de Tarefas</h1>

	<form class="col-lg-8 col-lg-offset-2" id="formTarefasCad">

	<div class="form-group">
		<label class="control-label" for="txt_nome">Nome</label>
		<input class="form-control" id="txt_nome" name="nome" type="text"/>
	</div>

	<div class="form-group">
		<label class="control-label " for="txt_descricao">Descrição</label>
		<textarea class="form-control" cols="40" id="txt_descricao" name="txt_descricao" rows="3" style="resize:none;"></textarea>
	</div>

	<div class="form-group">
		<div class="row">
		<div class="col-lg-5">
	  <label class="control-label " for="txt_meta">Meta</label>
	  <div class="input-group">
		<input type="text" class="form-control" id="txt_meta" name="txt_meta" >
		</div></div></div></div>


		<div class="form-group">
		<div class="row">
		<div class="col-lg-5">

		

	<div class="form-group">
	<div class="row">
	<div class="col-lg-5">

	<label for="txt_dataInicio">Data de Início</label>
	<div class="input-group date">
  	<input type="text" class="form-control" id="txt_dataInicio" name="txt_dataInicio" >
  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div>
	</div>

	<div class="col-lg-5 col-lg-offset-1">
  <label for="txt_dataInicio">Data Final</label>
  <div class="input-group date">
	<input type="text" class="form-control" id="txt_dataFinal" name="txt_dataFinal" >
	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div>
	</div></div></div>

	<div class="form-group">
		Objetivo:
		<select id="selectObjetivo" name="selectObjetivo">
			<?php
				foreach($objetivo->selectAll() as $valor){

			?>
			<option value="<?php echo $valor->Id;?>"><?php echo $valor->Nome;?></option>
			<?php

				}
			?>

		</select>

	</div>

	<div class="form-group">
		<input type="hidden" name="acao" value="tarefasCad">
		<button class="btn btn-danger  btn-lg" name="btn_cancelar" type="button">Cancelar</button>
		<button class="btn btn-success pull-right  btn-lg" name="btn_salvar" type="submit">Salvar</button>
	</div>


</form>


</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.pt-BR.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"></script>



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

	      $("#formTarefasCad").submit(function(e){
	      	e.preventDefault();
	      	var dados = $(this).serialize();
	      	$.ajax({
	      		url:"main.php",
	      		type:"POST",
	      		data:dados,
	      		success:function(){
	      			alert("Tarefa cadastrada com sucesso!");
	      			$("#formTarefasCad").trigger("reset");
	      		}
	      	});
	      });


	  });


	</script>

	</body>
</html>
