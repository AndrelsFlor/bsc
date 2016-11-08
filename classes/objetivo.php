<?php
	require_once('CRUD.php');

	 class Objetivo extends CRUD{

		protected $tabela = 'objetivo';

		private $nome;
		private $descricao;
		private $dtInicial;
		private $dtFinal;
		private $media;


		public function insert(){
			$sql = "INSERT INTO $this->tabela(Nome,Descricao,DtInicial,DtFinal,Media) VALUES(:nome,:descricao,:dtInicial,:dtFinal,:media)";
			$stmt = BD::prepare($sql);
			$stmt->bindParam(':nome',$this->nome);
			$stmt->bindParam(':descricao',$this->descricao);
			$stmt->bindParam(':dtInicial',$this->dtInicial);
			$stmt->bindParam(':dtFinal',$this->dtFinal);
			$stmt->bindParam(':media',$this->media);

			return $stmt->execute();

		}
		
		public function update($id){
			$sql = "UPDATE $this->tabela SET Nome = :nome,
											 Descricao = :descricao,
											 DtInicial = :dtInicial,
											 DtFinal = :dtFinal,
											 Media = :media WHERE id = :id";
			$stmt = BD::prepare($sql);

			$stmt->bindParam(':nome',$this->nome);
			$stmt->bindParam(':descricao',$this->descricao);
			$stmt->bindParam(':dtInicial',$this->dtInicial);
			$stmt->bindParam(':dtFinal',$this->dtFinal);
			$stmt->bindParam(':media',$this->media);
			$stmt->bindParam(':id',$id);

			return $stmt->execute();

		}

		public function selectAll(){
			$sql = "SELECT * FROM $this->tabela";
			$stmt = BD::prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function select($id){
			$sql = "SELECT * FROM $this->tabela WHERE id = :id";
			$stmt = BD::prepare($sql);
			$stmt->bindParam(':id',$id);
			$stmt->execute();
			return $stmt->fetch();

		}

		public function delete($id){
			$sql = "DELETE * FROM $this->tabela WHERE id = :id";
			$stmt = BD::prepare($sql);
			$stmt->bindParam(':id',$id);
			return $stmt->execute();

		}

		public function getTarefas(){
			
			$sql = "SELECT * FROM $this->tabela INNER JOIN tarefa ON tarefa.IdObjetivo = $this->tabela.Id";
			$stmt = BD::prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();

		}

		public function setNome($nome){
			$this->nome = $nome;

		}

		public function setDescricao($descricao){
			$this->descricao = $descricao;

		}

		public function setDtInicial($dtInicial){
			$this->dtInicial = $dtInicial;

		}

		public function setDtFinal($dtFinal){
			$this->dtFinal = $dtFinal;
		}

		public function setMedia($media){
			$this->media = $media;

		}
	}
?>