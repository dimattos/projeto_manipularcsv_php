<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Integração de PHP com MySQL  </title> 
  <link rel="stylesheet" href="formata-banco.css">
</head> 

<body> 
 <h1> Fundamentos de banco de dados com PHP -  exercício 4 </h1>

 <form action="exerc4.php" method="post">
  <fieldset>
  <legend> Cadastro de médicos </legend>

  <label class="alinha"> Nome: </label>
  <input type="text" name="nome-medico" autofocus> <br>

  <label class="alinha"> CRM: </label>
  <input type="text" name="crm"> <br>

  <button type="submit" name="cadastrar-medico"> Cadastrar médico </button>
 </fieldset>

 <fieldset>
  <legend> Cadastro de pacientes </legend>

  <label class="alinha"> Nome: </label>
  <input type="text" name="nome-paciente"> <br>

  <label class="alinha"> Atendido pelo médico (CRM): </label>
  <input type="text" name="crm-medico"> <br>

  <label class="alinha"> Data da internação: </label>
  <input type="date" name="data-internacao"> <br>

  <button type="submit" name="cadastrar-paciente"> Cadastrar paciente </button>
 </fieldset>

 <fieldset>
  <legend> Pesquisa por médico </legend>

  <label class="alinha"> Nome do médico: </label>
  <input type="text" name="pesquisa-medico"> <br>

  <button type="submit" name="pesquisar"> Pesquisar médico </button>
 </fieldset>
 </form>
 
  <?php
   require "./includes/dados-conexao.inc.php";
   require "./includes/conectar.inc.php";
   require "./includes/criar-banco.inc.php";
   require "./includes/abrir-banco.inc.php";
   require "./includes/definir-charset.inc.php";
   require "./includes/criar-tabelas.inc.php";
   

   if(isset($_POST["cadastrar-medico"]))
    {
    require "./includes/cadastrar-medico.inc.php";
    echo "<p> Dados do médico cadastrados com sucesso no banco de dados. </p>";  
    }
    
   if(isset($_POST["cadastrar-paciente"]))
     {
     require "./includes/cadastrar-paciente.inc.php";
     echo "<p> Dados do paciente cadastrados com sucesso no banco de dados. </p>";  
     }


    if(isset($_POST["pesquisar"]))
     {
     require "./includes/pesquisar-medico.inc.php";
     }
    
   require "./includes/desconectar.inc.php";
  ?>
</body> 
</html> 