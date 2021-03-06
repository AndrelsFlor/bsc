<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="bootstrap/css/estilo.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" />
		<title>Cadastro de Objetivos - BSC</title>

	</head>
	<body>
		<?php
			include_once 'nav_bar.php';
		?>

<div class="container">

			<h1 class="col-lg-6 col-lg-offset-4">Cadastro de Usuários</h1>

	<form class="col-lg-8 col-lg-offset-2" id="formCadUser">

	<div class="form-group">
		<label class="control-label" for="txt_user_nome">Nome</label>
		<input class="form-control" id="txt_user_nome" name="nome" type="text"/>
	</div>
	
	<div class="form-group">
		<label class="control-label" for="txt_user_senha">Senha</label>
		<input class="form-control" id="txt_user_senha" name="senha" type="password"/>
	</div>
	
	<div class="form-group">
		<label class="control-label" for="txt_user_conrfirmar_senha">Confirmar Senha</label>
		<input class="form-control" id="txt_user_confirmar_senha" name="txt_user_confirmar_senha"" type="password"/>
	</div>
	
	<div class="form-group">
		<label class="control-label" for="txt_user_email">Email</label>
		<input class="form-control" id="txt_user_email" name="email" type="email"/>
	</div>
	
	<div class="form-group">
		<label class="control-label" for="txt_user_conrfirmar_email">Confirmar Senha</label>
		<input class="form-control" id="txt_user_confirmar_email" name="txt_user_confirmar_email" type="email"/>
		<input type="hidden" name="acao" value="userCad">
	</div>	

				<div class="form-group">
				<select id="nivelAcesso" name="nivelAcesso">
					<option>Nivel 1</option>
					<option>Nivel 2</option>
					<option>Nivel 3</option>
				</select>
				</div>
		
	
	<div class="form-group">
			<button class="btn btn-success pull-right  btn-lg" name="btn_salvar" type="submit">Cadastrar</button>
	</div>
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
	      $("#formCadUser").submit(function(e){
	      	var dados = $(this).serialize();
	       	e.preventDefault();
	       	var senha = $("#txt_user_senha").val();
	       	var confirmaSenha = $("#txt_user_confirmar_senha").val();

	       	if(senha != confirmaSenha){
	       		alert("As senhas não são iguais!")
	       	}
	       	else{
	      	$.ajax({
	      		url:"main.php",
	      		type:"POST",
	      		data:dados,
	      		success:function(){
	      			alert("Usuário cadastrado com sucesso!");
	      		}
	      	});
	      }
	      });


	  });

	</script>

	</body>
</html>
