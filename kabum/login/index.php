<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Kabum</title>
	<link href="../css/kabum.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="login">
		<div class="logo-kabum">
			<img src="../img/Kabum.png">
		</div>
		<div class="formulario-login" id="formadm">
			<form method="post" action="../models/valida-usuario.php">
				<input class="formulario_usuario" type="text" placeholder="Digite seu usuário" name="usuario" id="usuario" /><br><br />
				<input class="formulario_usuario" type="password" placeholder="Digite sua senha" name="senha" id="senha" /><br><br />
				<button type="submit"> Logar </button>
			</form>
		</div>
	</div>
	<script src="../libs/jquery-3.5.0.min.js"></script>
	<script src="../libs/jquery.mask.min.js"></script>
	<script src="../js/index.js"></script>
</body>
</html>