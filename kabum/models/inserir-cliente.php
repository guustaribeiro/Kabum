<?php
include("banco/conexao.php");

$txt = "insert into clientes (
			nome,
			data_nasc,
			cpf,
			rg,
			telefone,
			cep,
			rua,
			bairro,
			cidade,
			uf,
			numero)
		values (
			'$_POST[nome]',
			'$_POST[data_nasc]',
			'$_POST[cpf]',
			'$_POST[rg]',
			'$_POST[telefone]',
			'$_POST[cep]',
			'$_POST[rua]',
			'$_POST[bairro]',
			'$_POST[cidade]',
			'$_POST[uf]',
			'$_POST[numero]'
		)";

mysqli_query($conn, $txt);

header("Location: ../cliente/index.php");
 ?>