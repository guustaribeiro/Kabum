<?php
session_start();
if ($_SESSION["usuario"] == "" && $_SESSION["senha"] == "") {
	header("Location: index.php?erro=3"); //usuario nao esta logado.
}
?>