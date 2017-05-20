<?php

// ----- CLASSE QUE IRÃO REALIZAR A CONEXÃO COM O BANCO DE DADOS ----- //

class Conexao {
    
    // ----- FUNÃ‡ÃƒOQUE VAI ABRIR A CONEXÃO COM O BANCO ----- //
    
    public function Conecta() {

        $this->cnx = mysqli_connect("localhost", "root", "", "gestao_extensao");

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    // ----- REALIZA A QUERY NO BANCO ----- //
    
    public function Query($sql) {
        $this->result = mysqli_query($this->cnx,$sql, MYSQLI_STORE_RESULT);
    }

    // ----- FECHA A CONEXÃO COM O BANCO DE DADOS ----- //
    
    public function __destruct() {
        mysqli_close($this->cnx);
    }

}
?> 


