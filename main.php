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
?>