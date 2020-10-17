<?php
 $nome        = trim($_POST["nome-medico"]);
 $crm         = trim($_POST["crm"]);

 $nome        = $conexao->escape_string($nome);
 $crm         = $conexao->escape_string($crm); 

 $sql = "INSERT $nomeDaTabela1 VALUES(
           '$crm',
           '$nome')";
 $resultado = $conexao->query($sql) or exit($conexao->error);