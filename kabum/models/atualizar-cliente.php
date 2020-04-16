<?php
include("banco/conexao.php");

$txt = "update
			clientes
		set
			nome = '$_POST[nome]',
			data_nasc = '$_POST[data_nasc]',
			cpf = '$_POST[cpf]',
			rg = '$_POST[rg]',
			telefone = '$_POST[telefone]',
			cep = '$_POST[cep]',
			rua = '$_POST[rua]',
			bairro = '$_POST[bairro]',
			cidade = '$_POST[cidade]',
			uf = '$_POST[uf]',
			numero = '$_POST[numero]'
		where
			id = $_POST[id]
			";

mysqli_query($conn, $txt);

header("Location: ../cliente/index.php");
 ?>