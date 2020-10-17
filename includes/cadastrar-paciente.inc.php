<?php
 $nome        = trim($_POST["nome-paciente"]);
 $crm         = trim($_POST["crm-medico"]);
 $data        = trim($_POST["data-internacao"]);

 $nome        = $conexao->escape_string($nome);
 $crm         = $conexao->escape_string($crm); 
 $data        = $conexao->escape_string($data); 

 $sql = "INSERT $nomeDaTabela2 VALUES(
            null,
           '$nome',
           '$data',
           '$crm')";
 $resultado = $conexao->query($sql) or exit($conexao->error);