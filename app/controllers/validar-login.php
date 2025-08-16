<?php
    session_start();
    if(isset($_SESSION['login'])) {
        $usuario = $_SESSION['login'];
    }else {
        session_destroy();
       // header("location: ");
    }


?>