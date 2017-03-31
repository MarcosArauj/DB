<?php

class Usuario {
	
	private $conecta;
	
	public function __construct(ConexaoDB $conecta) {
		$this->conecta = $conecta;
	}
	 
	
	
	public function inserir(Usuario $usuario) {
		$login = $usuario->getLogin();
		$login = $usuario->getSenha();
		$tipoUsuario = $usuario->getTipoUsuario();
		
		$query = "INSERT INTO usuarios (login, senha, tipo_usuario) VALUES(?,?,?)";
		$stmt = mysqli_prepare($this->conecta->getConection(), $query);
		mysqli_stmt_bind_param($stmt,$login, $senha, $tipoUsuario);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}

	/*public function inserir(ConexaoDB $conecta, Usuario $usuario) {

        $query = "INSERT INTO usuarios (login, senha, tipo_usuario) VALUES ('{$usuario->getLogin()}', '{$usuario->getSenha()}', '{$usuario->getTipoUsuario()}')";    
         mysqli_query($conecta->conect(), $query);
    }*/
	
}
