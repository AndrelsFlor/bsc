<?php
	require_once("CRUD.php");

	class Usuarios extends CRUD{

		protected $tabela = 'usuario';

		private $nome;
		private $login;
		private $senha;
		private $nivelAcesso;
		private $ativo;

		public function insert(){
			
		}
	}
?>