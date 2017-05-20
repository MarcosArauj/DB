<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>

    <form name="addArquivoForm" action="../Controller/UploadController.php"" method="post" enctype="multipart/form-data">
            <label>
                <input type="file" name="file"/>
            </label>
            <input type="submit" name="addArquivo" value="Cadastrar Arquivo"/>
        </form>

	<ul>
		<?php 
			foreach(glob("../Arquivos/*.*") as $arquivo) {
			    $nameArq = basename($arquivo);
			    echo '<li><a href="../Controller/DownloadController.php?file='.$nameArq.'">'.$nameArq.'</a></li>';
			}

		 ?>
	</ul>
    
</body>
</html>