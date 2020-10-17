<?php
 //receber o nome do medico e sanitize-o para evitarmos a injecao SQL
 $nomeMedico = $_POST["pesquisa-medico"];
 
 
 $nomeMedico = trim($conexao->escape_string($nomeMedico));
 

 //criar uma consulta que retorna o crm relacionado ao nome do medico pesquisado na tabela medicos
 $sql = "SELECT crm FROM $nomeDaTabela1 WHERE nome='$nomeMedico'";

 $resultado = $conexao->query($sql) or die ($conexao->error);

//testar se a consulta anterior localizou o nome do medico no BD.

if($conexao->affected_rows == 0)
{
 exit("<p> O nome do médico pesquisado <span> $nomeMedico </span>não foi localizado no banco de dados. </p>");
}

else
{
 $registro = $resultado->fetch_array();
 $crm      = $registro[0];
 $crm      = htmlentities($crm, ENT_QUOTES, "UTF-8");

//Criamos a consulta 
$sql = "SELECT COUNT(*) FROM $nomeDaTabela2 WHERE crm_medico = '$crm'";

$resultado = $conexao->query($sql) or die ($conexao->error);

$registro = $resultado->fetch_array();
$quantos = $registro[0];
$quantos  = htmlentities($quantos, ENT_QUOTES, "UTF-8");

echo "<p> Neste momento, há um total de <span> $quantos </span> paciente(s) atendido(s) pelo médico <span>$nomeMedico</span>. </p>";

}



 