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
		<title>Objetos - BSC</title>

	</head>
	<body>
		<?php
			include_once 'nav_bar.php';
            require_once('classes/objetivo.php');
		?>

<div class="container">


			<h1 class="col-lg-6 col-lg-offset-5">Objetivos</h1>



<table id="tabela_objetivos" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Objetivo</th>
            <th>Data de início</th>
            <th>Data de fim</th>
            <th>Média</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $objetivo = new Objetivo();
        foreach($objetivo->selectAll() as $valor){
     ?>       
        <tr>
      


            <td><a href="objetivo_detail.php?idObj=<?php echo $valor->Id;?>"><?php echo $valor->Nome;?></a></td>
            <td><?php echo $valor->DtInicial;?></td>
            <td><?php echo $valor->DtFinal;?></td>
            <td><?php echo $valor->Media;?></td>

            
        </tr>
        <?php
            }
        ?>
        
    </tbody>
</table>


</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>



	<script>

	  $(document).ready( function () {
    $('#tabela_objetivos').DataTable({
    language: {
        url: 'http://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json'
    }
} );

} );

	</script>

	</body>
</html>
