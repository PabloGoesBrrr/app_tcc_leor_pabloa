<?php
// Inicialize a sessão
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login/login.php");
        exit;
    }

?>