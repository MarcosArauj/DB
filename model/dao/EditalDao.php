<?php
// ----- CARREGA A CLASSE DE CONEXÃO COM O BANCO DE DADOS
require_once('../model/service/Conexao.php');

class ArquivoDao {

    // // ----- FUNÇÃO DE INCLUSÃO DE DADOS ----- //
    
    public function incluir(Arquivo $arq) { 

        $insert = "INSERT INTO arquivos(titulo,data_inicio,data_final,arquivo) VALUES ('{$arq->getTitulo()}','{$arq->getDataInicio()}','{$arq->getDataFinal()}','{$arq->getArquivo()}')";
        $Conexao = new Conexao();
        $Conexao->Conecta();
        $Conexao->Query($insert); 
    }
    
    // ----- FUNÇÃO DE CONSULTA DE DADOS ----- //

    public function consultar($sql) {

       $Conexao = new Conexao();
       $Conexao->Conecta();
       $Conexao->Query($sql);

       $this->Linha = @mysqli_affected_rows($Conexao->result);
       $this->Result = $Conexao->result;
    }

    // ----- FUNÇÃO DE EXCLUSÃO DE DADOS ----- //
    
    public function excluir($id) {

       $delete = 'delete from usuario where id="' . $id . '"';
       $Conexao = new Conexao();
       $Conexao->Conecta();
       $Conexao->Query($delete);
    }

    // ----- FUNÇÃO DE EDIÇÃO DE DADOS ----- //
    
    public function alterar($titulo,$data_inicia,$data_final,$id) {

       $update = "UPDATE arquivos SET titulo='$titulo', data_inicio='$data_inicia', data_final='$data_final' WHERE id=$id";
       $Conexao = new Conexao();
       $Conexao->Conecta();
       $Conexao->Query($update);

       $this->Linha = @mysqli_affected_rows($Conexao->result);
       $this->Result = $Conexao->result;
    }

}
