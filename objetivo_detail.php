<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/estilo.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	<title>Detalhes</title>
</head>
<body>
<?php
	include_once 'nav_bar.php';
	require_once("classes/objetivo.php");
	require_once("classes/tarefas.php");
	require_once("classes/variaveis.php");
	$id = $_GET['idObj'];

	date_default_timezone_set("America/Sao_Paulo");

	$hoje = date("d/m/y");

	$soma = 0;

	
?>
<div class="container">
<div class="panel panel-success">
  <!-- Default panel contents -->
  <div class="panel-heading">Detalhes do Objetivo</div>
  <div class="panel-body">
  	<?php
  		$objetivo = new Objetivo();
  		$tarefas = new Tarefas();
  		$variaveis = new Variaveis();

  		$result = $objetivo->select($id);
  	?>
    <p><?php echo $result->Nome;?></p>
  </div>

  <!-- List group -->
  <ul class="list-group">

  <li class="list-group-item">Descrição:<p><?php echo $result->Descricao;?></p></li>
  <li class="list-group-item">Data de início:<p><?php echo $result->DtInicial;?></p></li>
  <li class="list-group-item">Data Final:<p><?php echo $result->DtFinal;?></p></li>
 
  
  <?php
  	
  	foreach($tarefas->selectTarefas($id) as $valor){
  		if(strtotime($hoje) > strtotime($valor->DtFim)){

  			$validadeTarefa = 1; 

  		}
  		else{
  			$validadeTarefa = 0;
  		}

   ?>

  	<li class="list-group-item">Tarefa:&nbsp;<?php echo $valor->Nome;?><p><br>
  		Descricao:&nbsp;<?php echo $valor->Descricao;?><br><br>
  		Meta:&nbsp;<?php echo $valor->Meta;?><br><br>
  		Data de início:&nbsp;<?php echo $valor->DtInicio;?><br><br>
  		Data FInal:&nbsp;<?php echo $valor->DtFim;?><br><br>

  		<?php
  			foreach($variaveis->selectVariaveis($valor->Id) as $valor2){
  				echo $valor2->variavel;
  		?>
  				<br><br>Meta:&nbsp;<?php echo $valor2->meta;?>
  				<br><br>Alcançado:&nbsp;<?php echo $valor2->peso;?>
  				<br><br>Status:&nbsp;<?php
  					if($validadeTarefa == 0){
  						if($valor2->peso >= $valor2->meta){
  							echo "Sucesso!";
  						}
  						else{
  							echo "Fracasso";
  						}

  					}
  					else{
  						echo "Avaliação em andamento";
  					}
  					$soma = $soma + $valor2->peso;
  				?><br><br>

  		<?

  			}
  		?>

  	</p></li>

    	 <li class="list-group-item">Status do objetivo:<p><?php 

    	 	if($validadeTarefa == 0){


    	 		echo $soma?>&nbsp;
    	 		<?php 
    	 	
    	 		$obj = $objetivo->select($id);

    	 		if($soma >= $obj->Media){
    	 			echo "(Sucesso)";

    	 		}
    	 		else{
    	 			echo "(Fracasso!)";
    	 		}
    	 	}
    	 	else{

    	 		echo "Avaliação em andamento!";
    	 	}
    	 ?></p></li>

     <?

    	}
    ?>
  </ul>

</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

</body>
</html>