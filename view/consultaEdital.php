<?php include('menu.php'); ?>
<?php include('default.php'); ?>

<?php
require_once('../controller/EditalController.php');
Processo('consultar');
?>

<br>
<script src="js/Validacaoform.js"></script>

<div class="container">

    <div class="panel panel-primary">

        <div class="panel-heading">Editais </div>
        <table class="table table-striped">
            <thead align="center">
            <td><b>Titulo</b></td>
            <td><b>Arquivo</b></td>
            <td><b>Data Inicial</b></td>
            <td><b>Data Final</b></td>
            <td><b>Confirmar leitura</b></td>

              <?php while ($row = mysqli_fetch_array($rs)) { ?>
                <tbody align="center">
                <td> <?php echo $row['titulo']; ?> </td>
                <td> <a href="../arquivos/<?php echo $row['arquivo']; ?>" target="_black"/><?php echo $row['arquivo']; ?></a></td>
                <td> <?php echo date('d/m/Y',strtotime($row['data_inicio'])); ?> </td>
                <td> <?php echo date('d/m/Y',strtotime($row['data_final'])); ?> </td>
                <td><input type="checkbox" name="edital[]" id="edital" value="edital" /></td>
                <td><a href="../arquivos/<?php echo $row['arquivo']; ?>" target="_black"> <button type="button" class="btn btn-primary">Download</button></a></td>
                 <td><a href="editaEdital.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary">Editar</button></a></td> 
                 <td> <a href="index.php"><button type="button" class="btn btn-primary" onclick="validarCheck()">Submeter</button></a></td>

                </tbody>
            <?php } ?>
            </thead>
        </table>
    </div>
</div>

    <script type="text/javascript">

        function validarCheck(){

            if(edital.checked== false){
                alert("Favor confirmar a leitura do edital!");
                document.getElementById('edital').focus();
                event.returnValue=false;
                return false;
            }
            
        }
    </script>