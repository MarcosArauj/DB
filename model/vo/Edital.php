<?php
	class  Arquivo{

	private $titulo;
	private $dataInicio;
	private $dataFinal;
	private $arquivo;

	public function __construct($titulo,$dataInicio,$dataFinal,$arquivo){

		$this->titulo = $titulo;
		$this->dataInicio = $dataInicio;
		$this->dataFinal = $dataFinal;
		$this->arquivo = $arquivo;
	}
	
	public function getTitulo(){
		return $this->titulo;
	}
	public function getDataInicio(){
		return $this->dataInicio;
	}
	public function getDataFinal(){
		return $this->dataFinal;
	}
	public function getArquivo(){
		return $this->arquivo;
	}
	
	public function setTitulo($titulo){
		$this->titulo;
	}
	public function setDataInicio($dataInicio){
		$this->dataInicio;
	}
	public function setDataFinal($dataFinal){
		$this->dataFinal;
	}
	public function setArquivo($arquivo){
		$this->arquivo;
	}
	}
?>