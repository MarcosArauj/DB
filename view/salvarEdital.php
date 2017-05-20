<?php include('menu.php'); ?>
<?php include('default.php'); ?>

<?php
require_once('../controller/EditalController.php');
Processo('incluir');
?>
<script src="js/Validacaoform.js"></script>

<div class="container">

  <form name="addArquivoForm" action="" method="POST" enctype="multipart/form-data">
        <h2 class="form-signin-heading"></h2>
        <div class="col-sm-3"></div>
         <div class="col-sm-6">
        <div class="form-group">
            <input type="text" name="titulo" class="form-control" placeholder="Titulo" required autofocus>
        </div>    
           <div class="form-inline"> 
            <div class="form-group">
            <label>Data Inicial: </label>
                <input type="date" name="data_inicio" class="form-control" required>
            </div>   
            <div class="form-group">
            <label>Data Final: </label>
                <input type="date" name="data_final" class="form-control" required>
            </div>
            </div>
            <legend><h4>Upload de Arquivos</h4></legend>
             <label>
                 <input type="file" name="arquivo" class="btn btn-primary" >
             </label>
        

        <div class="form-group"> 
            <input type="submit" name="botao" value="Cadastrar" class="btn btn-primary" onclick="validar(document.form);"//>
        </div>
        </div>
        <div class="col-sm-3"></div>    
    </form>

</div> <!-- /container -->