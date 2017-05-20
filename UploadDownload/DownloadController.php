<?php 
 
 $diretorio = "../Arquivos";

  if (isset($_GET['file']) && file_exists("{$diretorio}/".$_GET['file'])) {
  	  $file = $_GET['file'];
  	  $type = filetype("{$diretorio}/{$file}");
  	  $size = filesize("{$diretorio}/{$file}");
  	  header("Content-Description: File Transfer");
  	  header("Content-Type:{$type}");
	  header("Content-Length:{$size}");
	  header("Content-Disposition: attachment; filename=$file");
	  readfile("{$diretorio}/{$file}");
	  exit;
  }

 ?>

