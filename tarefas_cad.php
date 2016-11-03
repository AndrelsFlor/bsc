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
		?>



<div class="container">

			<h1 class="col-lg-6 col-lg-offset-4">Cadastro de Tarefas</h1>

	<form class="col-lg-8 col-lg-offset-2">

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

		<label for="txt_var1">Variável 1</label>
		<div class="input-group date">
	  	<input type="text" class="form-control" id="txt_var1" name="txt_var1" >
	 	</div></div>

		<div class="col-lg-5 col-lg-offset-1">
	  <label for="txt_pesoVar1">Peso Variável 1</label>
	  <div class="input-group date">
		<input type="text" class="form-control" id="txt_pesoVar1" name="txt_pesoVar1" >
		</div></div></div></div>

		<div class="form-group">
		<div class="row">
		<div class="col-lg-5">

		<label for="txt_var2">Variável 2</label>
		<div class="input-group date">
	  	<input type="text" class="form-control" id="txt_var2" name="txt_var2" >
	 	</div></div>

		<div class="col-lg-5 col-lg-offset-1">
	  <label for="txt_pesoVar2">Peso Variável 2</label>
	  <div class="input-group date">
		<input type="text" class="form-control" id="txt_pesoVar2" name="txt_pesoVar2" >
		</div></div></div></div>

		<div class="form-group">
		<div class="row">
		<div class="col-lg-5">

		<label for="txt_var3">Variável 3</label>
		<div class="input-group date">
	  	<input type="text" class="form-control" id="txt_var3" name="txt_var3" >
	 	</div></div>

		<div class="col-lg-5 col-lg-offset-1">
	  <label for="txt_pesoVar3">Peso Variável 3</label>
	  <div class="input-group date">
		<input type="text" class="form-control" id="txt_pesoVar3" name="txt_pesoVar3" >
		</div></div></div></div>

		<div class="form-group">
		<div class="row">
		<div class="col-lg-5">

		<label for="txt_var4">Variável 4</label>
		<div class="input-group date">
	  	<input type="text" class="form-control" id="txt_var4" name="txt_var4" >
	 	</div></div>

		<div class="col-lg-5 col-lg-offset-1">
	  <label for="txt_pesoVar1">Peso Variável 4</label>
	  <div class="input-group date">
		<input type="text" class="form-control" id="txt_pesoVar4" name="txt_pesoVar4" >
		</div></div></div></div>

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


	  });


	</script>

	</body>
</html>
