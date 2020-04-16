<?php
include("banco/conexao.php");

$txt = "delete from clientes where id=$_GET[id]";
mysqli_query($conn, $txt);

header("Location: ../cliente/index.php");
 ?>