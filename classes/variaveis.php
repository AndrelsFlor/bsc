<?php
	require_once("CRUD.php");

	class Variaveis extends CRUD{

		protected $tabela = 'variaveis';

		private $idTarefa;
		private $variavel;
		private $peso;
		private $meta;

		public function insert(){
			
			$sql = "INSERT INTO $this->tabela(idTarefa,variavel,peso,meta) VALUES(:idTarefa,:variavel,:peso,:meta)";

			$stmt = BD::prepare($sql);

			$stmt->bindParam(':idTarefa',$this->idTarefa);
			$stmt->bindParam(':variavel',$this->variavel);
			$stmt->bindParam(':peso',$this->peso);
			$stmt->bindParam(':meta',$this->meta);

			return $stmt->execute();



		}

		public function update($id){
			
			$sql = "UPDATE $this->tabela SET idTarefa = :idTarefa, variavel = :variavel, peso = :peso, meta = :meta WHERE id = :id";

			$stmt = BD::prepare($sql);


			$stmt->bindParam(':idTarefa',$this->idTarefa);
			$stmt->bindParam(':variavel',$this->variavel);
			$stmt->bindParam(':peso',$this->peso);
			$stmt->bindParam(':meta',$this->meta);
			$stmt->bindParam(':id',$id);

			return $stmt->execute();

			
		}

		public function setIdTarefa($idTarefa){

			$this->idTarefa = $idTarefa;

		}

		public function setVariavel($variavel){

			$this->variavel = $variavel;

		}

		public function setPeso($peso){

			$this->peso = $peso;

		}

		public function setMeta($meta){

			$this->meta = $meta;

		}
	}
?>