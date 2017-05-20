<?php

 require_once("../model/vo/Edital.php"); 
 require_once("../model/dao/EditalDao.php"); // ----- CARREGA A CLASSE USUARIO  ----- //

function Processo($Processo) {

    switch ($Processo) { // ----- A PARTIR DESTE PONTO TESTA O PROCESSO PASSADO PELA CAMADA DE VISÃO ----- //

        case 'incluir': // ----- PROCESSO DE INCLUIR PASSADO NA VISÃO INCLUIR USUARIO ----- //

            global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
            global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //

            $diretorio = "../arquivos/"; //--- DIRETÓRIO A SE R SALVO O ARQUIVO DO UPLOAD -----//

         if (isset($_POST['botao'])) {

            $titulo = $_POST['titulo'];
            $dataInicio = date("Y-m-d",strtotime($_POST["data_inicio"]));
            $dataFinal = date("Y-m-d",strtotime($_POST["data_final"]));

            $arq = $_FILES['arquivo']['name'];

                $arq = str_replace("","_", $arq);
                $arq = str_replace("ç","c", $arq);

             if (!is_dir($diretorio)) {
                mkdir($diretorio);

             } else if (file_exists("$diretorio/$arq")) {
                 $a = 1;

                 while (file_exists("$diretorio/[$a]$arq")) {
                  $a++;
                 }

                 $arq = "[".$a."]".$arq;
               }

        if (move_uploaded_file($_FILES['arquivo'] ['tmp_name'], $diretorio.$arq)) {


            $arquivo = new Arquivo($titulo,$dataInicio,$dataFinal,$arq);
            $arquivoDao = new ArquivoDao($arquivo); 
            $arquivoDao->consultar("select * from arquivos");
            $linha = $arquivoDao->Linha;
            $rs = $arquivoDao->Result;

                $arquivoDao->incluir($arquivo);
                echo '<script>alert("Cadastrado com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                echo '<script>window.location="../view/index.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
            }
          }
        break;

        case 'consultar':

            global $linha;
            global $rs;

            $arquivoDao = new ArquivoDao(); 
            $arquivoDao->consultar("select * from arquivos");
            $linha = $arquivoDao->Linha;
            $rs = $arquivoDao->Result;

        break;

        case 'editar':

            global $linha;
            global $rs;

            $arquivoDao = new ArquivoDao();

            $arquivoDao->consultar("select titulo,data_inicio,data_final from arquivos where id=" . $_GET['id']);
            $linha = $arquivoDao->Linha;
            $rs = $arquivoDao->Result;

            if (isset($_POST['botao'])) {
               $titulo = $_POST['titulo'];
               $dataInicio = date("Y-m-d",strtotime($_POST["data_inicio"]));
               $dataFinal = date("Y-m-d",strtotime($_POST["data_final"]));
               $id =  $_GET['id'];

                $arquivoDao->alterar($titulo,$dataInicio,$dataFinal,$id);
                echo '<script>alert("Alterado com sucesso !");</script>';
                echo '<script>window.location="consultaEdital.php";</script>';
             }
        break;
    }

}