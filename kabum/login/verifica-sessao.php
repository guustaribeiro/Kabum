<?php
session_start();
if ($_SESSION["usuario"] == "" && $_SESSION["senha"] == "") {
	header("Location: ../login/index.php"); //usuario nao esta logado.
}
?>