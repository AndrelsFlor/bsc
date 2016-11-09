<?php
	require_once("classes/objetivo.php");
	require_once("classes/tarefas.php");
	require_once("classes/usuario.php");
	require_once("classes/variaveis.php");
	
	$acao = $_POST['acao'];

	if($acao == 'cadObj'){

		$nome = $_POST['nome'];
		$dataInicial = $_POST['txt_dataInicio'];
		$dataFinal = $_POST['txt_dataFinal'];
		$descricao = $_POST['txt_descricao'];
		$media = $_POST['txt_media'];

		$objetivo = new Objetivo();

		$objetivo->setNome($nome);
		$objetivo->setDtInicial($dataInicial);
		$objetivo->setDtFinal($dataFinal);
		$objetivo->setDescricao($descricao);
		$objetivo->setMedia($media);

		$objetivo->insert();


	}

	else if($acao == 'userCad'){

		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];
		$nivelAcesso = $_POST['nivelAcesso'];

		$usuario = new Usuarios();

		$usuario->setNome($nome);
		$usuario->setSenha($senha);
		$usuario->setLogin($email);
		$usuario->setNivelAcesso($nivelAcesso);
		$usuario->setAtivo(1);

		$usuario->insert();
	}

	else if($acao == 'tarefasCad'){
		$nome = $_POST['nome'];
		$idObjetivo = $_POST['selectObjetivo'];
		$dataFinal = $_POST['txt_dataFinal'];
		$dataInicio = $_POST['txt_dataInicio'];
		$descricao = $_POST['txt_descricao'];
		$meta = $_POST['txt_meta'];

		$tarefa = new Tarefas();

		$tarefa->setIdObjetivo($idObjetivo);
		$tarefa->setNome($nome);
		$tarefa->setDescricao($descricao);
		$tarefa->setMeta($meta);
		$tarefa->setDtInicio($dataInicio);
		$tarefa->setDtFim($dataFinal);
		$tarefa->setIdUsuario(1);
		

		$tarefa->insert();
	}

	else if($acao == 'getTarefa'){
		$objetivo = new Objetivo();
		foreach($objetivo->getTarefas() as $valor){
			echo $valor->id_objetivo;

		}
	}
	else if($acao == 'cadVar'){
		$variavel = new Variaveis();

		$nome = $_POST['nome'];
		$idTarefa = $_POST['selectTarefa'];
		
		$meta = $_POST['txt_media'];

		$variavel->setVariavel($nome);
		$variavel->setIdTarefa($idTarefa);
		$variavel->setMeta($meta);

		$variavel->insert();

	}
?>