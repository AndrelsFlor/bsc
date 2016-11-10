		
		
		
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/estilo.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" />
		
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">BSCC</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		<li class="dropdown">
		
				<a class="active" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar <span class="caret"></span></a>

		<div class = "dropdown">
			<ul class="dropdown-menu">
  				<li><a href="user_cad.php">Cadastrar Usuário</a></li>
				
			</ul>
		</div>
				
				  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Objetivos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="objetivos.php">Objetivos</a></li>
            <li><a href="objetivos_cad.php?id=<?php echo $_SESSION['id'];?>">Cadastrar Objetivos</a></li>
          </ul>

        </li>
		<li class="dropdown">
				<a class="active" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tarefas <span class="caret"></span></a>
			<ul class="dropdown-menu">
  				<li><a href="tarefas.php">Tarefas</a></li>
  				<li><a href="tarefas_cad.php">Cadastrar Tarefas</a></li>
				</ul>
				</li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Sair</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>