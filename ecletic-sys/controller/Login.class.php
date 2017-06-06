<?php

class Login {
	static function autentify_login($username, $password) {
	$usuario = new Usuario();
	if($usuario->checkUsername($username) != null && 
		$password == $usuario->getPassword($username)) {
		//session_start();
		$_SESSION["username"] = $username;
	    $_SESSION["idUsuario"] = $usuario->getIdUsuario($username);
	    $_SESSION["status"] = $usuario->getStatus($_SESSION["idUsuario"]);
	    header("Location: main_menu.php");

	}  else {
		echo "<script>
		alert(" . "Nome de Usuário ou Senha incorretos" . ")
		</script>";
	}
   
  }
}

?>