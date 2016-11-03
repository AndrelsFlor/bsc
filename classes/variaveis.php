<?php
	require_once("CRUD.php");

	class Variaveis extends CRUD{

		protected $tabela = 'variaveis'

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
	}
?>