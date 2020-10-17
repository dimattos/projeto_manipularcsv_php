<?php
 //consulta para criação das duas tabelas
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela1(
           crm VARCHAR(20) PRIMARY KEY,
           nome VARCHAR(300)) ENGINE=innoDB";

 $resultado = $conexao->query($sql) or exit($conexao->error);

 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela2(
           id INT PRIMARY KEY AUTO_INCREMENT,
           nome VARCHAR(300),
           data_internacao DATE,
           crm_medico VARCHAR(20),
           FOREIGN KEY (crm_medico) REFERENCES $nomeDaTabela1(crm)) ENGINE=innoDB";

 $resultado = $conexao->query($sql) or exit($conexao->error);  
 