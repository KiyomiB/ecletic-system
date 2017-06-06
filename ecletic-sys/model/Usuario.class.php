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


public function getNome($id_usuario) {
	$sql = "SELECT nome FROM usuario WHERE id_usuario =  " . $id_usuario;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["nome"];
      } else {
        return null;
    }
}


public function setNome($nome, $id_usuario) {
	$sql = "UPDATE usuario SET nome = " . $nome . "WHERE id_usuario = " . $id_usuario;
	if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getCpf($id_usuario) {
	$sql = "SELECT cpf FROM usuario WHERE id_usuario = " . $id_usuario;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["cpf"];
      } else {
        return null;
    }
}


public function setCpf($cpf, $id_usuario) {
    $sql = "UPDATE usuario SET cpf = " . $cpf . "WHERE id_usuario = " . $id_usuario;
	if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getTelefone($id_usuario) {
	$sql = "SELECT telefone FROM usuario WHERE id_usuario = " . $id_usuario;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["telefone"];
      } else {
        return null;
    }
}


public function setTelefone($telefone, $id_usuario) {
	$sql = "UPDATE usuario SET telefone = " . $telefone . "WHERE id_usuario = " . $id_usuario;
	if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getStatus($id_usuario) {
	$sql = "SELECT status FROM usuario WHERE id_usuario = " . $id_usuario;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["status"];
      } else {
        return null;
    }
}

public function setStatus($status, $id_usuario) {
	$sql = "UPDATE usuario SET status = " . $status . "WHERE id_usuario = " . $id_usuario;
	if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getSenha($usuario) {
	$sql = "SELECT senha FROM usuario WHERE usuario = " . $usuario;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["senha"];
      } else {
        return null;
    }
}


public function setSenha($senha, $id_usuario) {
	$sql = "UPDATE usuario SET usuario = " . $senha . "WHERE id_usuario = " . $id_usuario;
	if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}

?>