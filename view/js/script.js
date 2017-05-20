$(document).ready(function()
{
  $(".data").mask("99/99/9999");
  $("#cpf").mask("999.999.999-99");
  $("#telefone").mask("(99) 9999-9999");
  $("#celular").mask("(99) 9 9999-9999");
});

function carregamentoInicial()
{
  var primeiroCarregamento = true;

  if (primeiroCarregamento)
  {
    document.getElementById("cadastroAcesso").style.display = "none";
    document.getElementById("cadastroEditais").style.display = "none";
    document.getElementById("consultaCadastros").style.display = "none";
    document.getElementById("seja_bem_vindo").style.display = "block";
    primeiroCarregamento = false;
  }

  else
  {
    if (document.getElementById("cadastroEditais").style.display == "none")
    {
      document.getElementById("cadastroAcesso").style.display = "block";
      document.getElementById("cadastroEditais").style.display = "none";
      document.getElementById("seja_bem_vindo").style.display = "none";
    }

    else
    {
      document.getElementById("cadastroAcesso").style.display = "none";
      document.getElementById("cadastroEditais").style.display = "block";
      document.getElementById("seja_bem_vindo").style.display = "none";
    }
  }

}

function mostrarCadastroAcesso()
{
    document.getElementById("cadastroEditais").style.display = "none";
    document.getElementById("seja_bem_vindo").style.display = "none";
    document.getElementById("consultaCadastros").style.display = "none";
    document.getElementById("cadastroAcesso").style.display = "block";
}

function mostrarConsultaCadastros()
{
    document.getElementById("seja_bem_vindo").style.display = "none";
    document.getElementById("cadastroAcesso").style.display = "none";
    document.getElementById("cadastroEditais").style.display = "none";
    document.getElementById("consultaCadastros").style.display = "block";
}


function mostrarCadastroEditais()
{
    document.getElementById("seja_bem_vindo").style.display = "none";
    document.getElementById("cadastroAcesso").style.display = "none";
    document.getElementById("consultaCadastros").style.display = "none";
    document.getElementById("cadastroEditais").style.display = "block";
}

function ValidarCampoNome()
{
  if(document.FormCadastroAcesso.nome.value.length < 3)
  {
    document.getElementById("nome").setAttribute("class", " has-error");
  }

  else
  {
    document.getElementById("nome").setAttribute("class", " has-success");
  }

}

function ValidarCampoDeSenha()
{
  if(document.FormCadastroAcesso.confirmaSenha.value != document.FormCadastroAcesso.senha.value)
  {
    document.getElementById("confirmaSenha").setAttribute("class", " has-error col-md-4");
  }

  else if(document.FormCadastroAcesso.confirmaSenha.value == document.FormCadastroAcesso.senha.value)
  {
    document.getElementById("confirmaSenha").setAttribute("class", "has-success col-md-4");
  }

  if(document.FormCadastroAcesso.senha.value != "")
  {
    document.getElementById("senha").setAttribute("class", " has-success col-md-4");
  }
}

function ValidarCampoEmail()
{

    var email = document.FormCadastroAcesso.email.value;
    var validarEmail = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;

    if(validarEmail.test(email) == false)
    {
      document.getElementById("email").setAttribute("class", "has-error");
    }

    else
    {
      document.getElementById("email").setAttribute("class", "has-success");
    }
}

function ValidarCombobox()
{
    var tipoUsuario = document.getElementsByName("tipoUsuario")[0].value;

    if(tipoUsuario == "")
    {
      document.getElementById("tipoUsuario").setAttribute("class", "has-error");
    }

    else
    {
      document.getElementById("tipoUsuario").setAttribute("class", "has-success");
    }
}

function CadastroUsuario()
{
  var email = document.FormCadastroAcesso.email.value;
  var nome = document.FormCadastroAcesso.nome.value;
  var validarEmail = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
  var tipoUsuario = document.getElementsByName("tipoUsuario")[0].value;

  if(validarEmail.test(email) == false || tipoUsuario == "" || nome.length < 3)
  {
    document.getElementById("labelCadastroAcesso").style.color = "red";
    document.getElementById("labelCadastroAcesso").style.fontFamily = "times new roman";
    document.getElementById("labelCadastroAcesso").style.fontStyle = "italic";
    document.getElementById("labelCadastroAcesso").innerHTML = "Por Favor Preencha Os Campos Corretamente!";
    return false;
  }

  else
  {
    return true;
  }
}

// function sleep(milliseconds)
// {
//   var start = new Date().getTime();
//   for (var i = 0; i < 1e7; i++)
//   {
//     if ((new Date().getTime() - start) > milliseconds)
//     {
//       break;
//     }
//   }
// }

// function ResetFormValues()
// {
//        $(":text").each(function () {
//            $(this).val("");
//        });
//
//        $(":radio").each(function () {
//            $(this).prop({ checked: false })
//        });
//
//        $(":date").each(function () {
//            $(this).val("");
//        });
//
//        $("select").each(function () {
//            $(this).val("");
//        });
// }

// document.getElementById("alerta").style.color = "green";
// document.getElementById("alerta").style.fontFamily = "times new roman";
// document.getElementById("alerta").style.fontStyle = "italic";
// document.getElementById("alerta").innerHTML = "As senhas conferem!";
// document.getElementById("labelEmail").setAttribute("for", "inputError2");
// document.getElementById("teste").innerHTML = "Email valido!";
// document.getElementsByName("senha")[0].setAttribute("id", "inputError1");
// document.getElementsByTagName("H1")[1].setAttribute("class", "democlass");
// document.getElementById('email').className = 'has-error has-feedback col-md-6';
// document.write();
