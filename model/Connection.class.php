<?php
 public class conn {
	$servername = "localhost";
	$username = "root";
	$password = "qwe123";
	$sql = "lojadecds-system";
	$conn = "";
	
	// Criar conexão
	public function __construct(){
		$conn = new mysqli($servername, $username, $password, $sql);
	}
	// Checar conexão
	if ($conn->connect_error) {
		die("Falha na conexão" . $conn->connect_error);
	}
}
?>