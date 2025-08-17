<?php 
	session_start();
	if (isset($_SESSION['user'])) {
		$user = $_SESSION['user'];
	} else {
		session_destroy();
			header("location: app/index.php?msg=Voce foi desconectado");
	}

 ?>