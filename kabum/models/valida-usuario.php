<?php
session_start();

include("../models/banco/conexao.php");

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$txt = "select * from usuario where usuario='$usuario'";

$sql = mysqli_query($conn, $txt);

if (mysqli_num_rows($sql) > 0) {
	//eu achei o usuario
	$dados = mysqli_fetch_object($sql);

	if ($senha == $dados->senha) {
		//achei a senha

		$_SESSION["usuario"] = $dados->usuario;

		echo 200;
	} else {
		// entra aqui se a senha for inválida
		// 401 é o padrão para usuário ou senha inválido
		echo 401;
	}
} else {
	// entra aqui se o usuário for inválido
	echo 401;
}
?>