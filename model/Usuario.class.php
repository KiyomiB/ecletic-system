<?php

class Usuario {
private $id_usuario;
private $nome;
private $cpf;
private $telefone;
private $usuario;
private $status;
private $senha;

$connection = new Connection;


public function createUsuario($id_usuario, $usuario, $nome, $cpf, $telefone, $status, $senha) {
       $sql = "INSERT INTO usuario (usuario, nome, cpf, telefone, status, senha) VALUES (" . $usuario . "," . $nome . ",". $cpf . "," . $telefone . "," . $status . "," . $senha . ")";
    if ($connection->conn->{query($sql)} === TRUE) {
     $last_id = $connection->conn->insert_id;
     $this->id_usuario = $last_id;

   } else {
      echo "Erro:" . $sql . "<br>" . $connection->conn->error;

   }

   $this->usuario = $usuario;
   $this->nome = $nome;
   $this->cpf = $cpf;
   $this->telefone = $telefone;
   $this->status = $status;
   $this->senha = $senha;
}


public function getIdUsuario($usuario) {
	$sql = "SELECT id_usuario FROM usuario WHERE usuario = " . $usuario;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["id_usuario"];
      } else {
        return null;
    }
}


public function getUsuario($id_usuario) {
	$sql = "SELECT usuario FROM usuario WHERE id_usuario = " . $id_usuario;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["usuario"];
      } else {
        return null;
    }
}


public function checkUsuario($usuario) {
	$sql = "SELECT usuario FROM usuario WHERE usuario = " . $usuario;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["usuario"];
      } else {
        return null;
    }
}


public function setUsuario($usuario, $id_usuario) {
	$sql = "UPDATE usuario SET usuario = " . $usuario . "WHERE id_usuario = " . $id_usuario;
	if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getNome($id_usuario) {}