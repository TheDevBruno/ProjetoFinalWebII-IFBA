<?php 
	session_start();
	setcookie("usuario", "", time() - 3600, "/");
	session_destroy();
	header("location: ../login.php?msg=Você está desconectado!");
	exit();
 ?>