<?php

// ----- CLASSE QUE IRÁ REALIZAR A CONEXÃO COM O BANCO DE DADOS ----- //

class ConexaoDB {
	
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "gestao_extensao";
	private $conexao = null;
	
	public function __construct() {
		$this->conect();
	}
	
	public function getConection() {
		return $this->conexao;
	}
	
	private function conect() {
		$this->conexao = mysqli_connect($this->host, $this->username, $this->password, $this->database);
	}	

	/*public function conect() {
		$conexao = new mysqli($this->host, $this->username, $this->password, $this->database);

		return $conexao;
	}*/
}
?>

