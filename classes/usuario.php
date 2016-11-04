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
			$sql = "INSERT INTO $this->tabela(Nome,Login,Senha,NivelAcesso,Ativo) VALUES(:nome,:login,:senha,:nivelAcesso,:ativo)";

			$stmt = BD::prepare($sql);

			$stmt->bindParam(':nome',$this->nome);
			$stmt->bindParam(':login',$this->login);
			$stmt->bindParam(':senha',$this->senha);
			$stmt->bindParam(':nivelAcesso',$this->nivelAcesso);
			$stmt->bindParam(':ativo',$this->ativo);

			return $stmt->execute();

		}

		public function update($id){

			$sql = "UPDATE $this->tabela SET Nome = :nome, Login = :login, Senha = :senha, NivelAcesso = :nivelAcesso, Ativo = :ativo WHERE id = :id";

			$stmt = BD::prepare($sql);

			$stmt->bindParam(':nome',$this->nome);
			$stmt->bindParam(':login',$this->login);
			$stmt->bindParam(':senha',$this->senha);
			$stmt->bindParam(':nivelAcesso',$this->nivelAcesso);
			$stmt->bindParam(':ativo',$this->ativo);
			$stmt->bindParam(':id',$id);

			return $stmt->execute();

		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setLogin($login){
			$this->login = $login;
		}

		public function setSenha($senha){
			$this->senha = password_hash($senha,PASSWORD_DEFAULT);
		}

		public function setNivelAcesso($nivelAcesso){
			$this->nivelAcesso = $nivelAcesso;
		}

		public function setAtivo($ativo){
			$this->ativo = $ativo;
		}
	}
?>