<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> teste </title>
	<script type="text/javascript">

		function validarCheck(){

			form = document.forms[0];

			if(form.espanhol.checked== false && form.matematica.checked== false && form.pedagogia.checked== false && form.plageder.checked == false && form.tsiad.checked == false){
				alert("Favor clicar pelo menos em um dos cursos!");
				document.getElementById('edi').focus();
				event.returnValue=false;return false;
			}
			else
			form.submit();
		}
	</script>

</head>

<form name="pesquisa" id="pesquisa" method="post" action="new.php" onsubmit="validar()">


<input type="text" name="login" id="login" size="60" maxlength="30" />

<input type="checkbox" name="cursos[]" id="espanhol" value="espanhol"/>
<input type="checkbox" name="cursos[]" id="matematica" value="matematica" />
<input type="checkbox" name="cursos[]" id="pedagogia" value="pedagogia"/>
<input type="checkbox" name="cursos[]" id="plageder" value="plageder"/>
<input type="checkbox" name="cursos[]" id="tsiad" value="tsiad"/>



<input type="submit" value="enviar" />

</form>
</body>

</html>