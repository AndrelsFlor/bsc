<?php

require_once("CRUD.php");

 class Tarefas extends CRUD{
	

	protected $tabela = "tarefa";

	private $idObjetivo;
	private $nome;
	private $descricao;
	private $meta;
	private $dtInicio;
	private $dtFim;
	private $idUsuario;
	private $ativo;

	public function insert(){
		$sql = "INSERT INTO $this->tabela(IdObjetivo,Nome,Descricao,Meta,DtInicio,DtFim,idUsuario) VALUES(:idObjetivo,:nome,:descricao,:meta,:dtInicio,:dtFim,:idUsuario)";
		$stmt = BD::prepare($sql);

		$stmt->bindParam(':idObjetivo',$this->idObjetivo);
		$stmt->bindParam(':nome',$this->nome);
		$stmt->bindParam(':descricao',$this->descricao);
		$stmt->bindParam(':meta',$this->meta);
		$stmt->bindParam(':dtInicio',$this->dtInicio);
		$stmt->bindParam(':dtFim',$this->dtFim);
		$stmt->bindParam(':idUsuario',$this->idUsuario);
		

		return $stmt->execute();

	}

	public function update($id){
		$sql = "UPDATE $this->tabela SET IdObjetivo = :idObjetivo, Nome = :nome, Descriao = :descricao, Meta = :meta, DtInicio = :dtInicio, dtFim = :dtFim, idUsuario = :idUsuario, Ativo = :ativo WHERE id = :id";

		$stmt = BD::prepare($sql);

		$stmt->bindParam(':idObjetivo',$this->idObjetivo);
		$stmt->bindParam(':nome',$this->nome);
		$stmt->bindParam(':descricao',$this->descricao);
		$stmt->bindParam(':meta',$this->meta);
		$stmt->bindParam(':dtInicio',$this->dtInicio);
		$stmt->bindParam(':dtFim',$this->dtFim);
		$stmt->bindParam(':idUsuario',$this->idUsuario);
		$stmt->bindParam(':ativo',$this->ativo);
		$stmt->bindParam(':id',$id);

		return $stmt->execute();


	}

	public function setIdObjetivo($idObjetivo){
		$this->idObjetivo = $idObjetivo;

	}
	public function setNome($nome){
		$this->nome = $nome;

	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;

	}

	public function setMeta($meta){
		$this->meta = $meta;

	}

	public function setDtInicio($dtInicio){
		$this->dtInicio = $dtInicio;

	}

	public function setDtFim($dtFim){
		$this->dtFim = $dtFim;

	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;

	}

	public function setAtivo($ativo){
		$this->ativo = $ativo;

	}
}


?>