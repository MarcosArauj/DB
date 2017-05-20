<?php include('menu.php'); ?> 

<?php include('default.php');?>

<?php
require_once('../controller/EditalController.php');
Processo('editar');
?>

<script src="js/Validacaoform.js"></script>

<div class="container">

    <form class="form-signin" action="" id="form" name="form" method="post">
        <h2 class="form-signin-heading"></h2>

<?php while ($row = mysqli_fetch_array($rs)) { ?>
    <div class="col-sm-3"></div>
         <div class="col-sm-6">
        <div class="form-group">
         <input type="text" name="titulo" class="form-control" placeholder="Titulo" required autofocus value="<?php echo $row['titulo']; ?>">
          </div>
           <div class="form-inline">
            <div class="form-group">
            <label>Data Inicial: </label>
            <input type="date" name="data_inicio" class="form-control" required value="<?php echo $row['data_inicio']; ?>">
            </div>
            <div class="form-group">
             <label>Data Final: </label>
            <input type="date" name="data_final" class="form-control" required value="<?php echo $row['data_final']; ?>">
            </div>
            </div>
   <?php } ?>

        <div class="form-group">
         <input type="submit" name="botao" value="Editar" class="btn btn-primary" onclick="validar(document.form);"/>
        </div>
        </div>
        <div class="col-sm-3"></div>
    </form>

</div>

