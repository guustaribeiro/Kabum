 <?php if (session_status() != PHP_SESSION_ACTIVE) session_start(); ?>
 <div class="saudacao">
	 <?php echo $_SESSION["usuario"]; ?> [ <a href="../login/logoff.php">Sair</a> ]
</div>