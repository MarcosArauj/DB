<?php
	abstract class  Usuario{

	private $login;
	private $senha;
	private $tipoUsuario;

	public function __construct($login, $senha, $tipoUsuario){
		$this->login = $login;
		$this->senha = $senha;
		$this->tipoUsuario = $tipoUsuario;
	}
	
	public function getLogin(){
		return $this->login;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function getTipoUsuario(){
		return $this->tipoUsuario;
	}
	public function setLogin($login){
		$this->login;
	}
	public function setSenha($senha){
		$this->senha;
	}
	public function setTipoUsuario($tipoUsuario){
		$this->tipoUsuario;
	}

	}
?>