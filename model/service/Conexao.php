<?php

// ----- CLASSE QUE IR�O REALIZAR A CONEX�O COM O BANCO DE DADOS ----- //

class Conexao {
    
    // ----- FUNÇÃOQUE VAI ABRIR A CONEX�O COM O BANCO ----- //
    
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

    // ----- FECHA A CONEX�O COM O BANCO DE DADOS ----- //
    
    public function __destruct() {
        mysqli_close($this->cnx);
    }

}
?> 


