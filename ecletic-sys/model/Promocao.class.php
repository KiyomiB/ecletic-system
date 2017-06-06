<?php

class Promocao {
private $id_promocao;
private $promocao;
private $porcentagemPromocao;


$connection = new Connection;


public function createPromocao($id_promocao, $promocao, $porcentagemPromocao) {
	$sql = "INSERT INTO promocao (promocao, porcentagemPromocao) VALUES (" . $promocao . "," . $porcentagemPromocao . ")";
	if ($connection->conn->{query($sql)} === TRUE) {
     $last_id = $connection->conn->insert_id;
     $this->id_promocao = $last_id;

   } else {
      echo "Erro:" . $sql . "<br>" . $connection->conn->error;

   }


   $this->promocao = $promocao;
   $this->porcentagemPromocao = $porcentagemPromocao;

}


public function getPromocao($id_promocao) {
	$sql = "SELECT promocao FROM promocao WHERE id_promocao = " . $id_promocao;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["promocao"];
      } else {
        return null;
    }
}


public function setPromocao($promocao, $id_promocao) {
	$sql = "UPDATE promocao SET promocao = " . $promocao . "WHERE id_promocao = " . $id_promocao;
	if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getPorcentagemPromocao($id_promocao) {
	$sql = "SELECT porcentagemPromocao FROM promocao WHERE id_promocao = " . $id_promocao;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["porcentagemPromocao"];
      } else {
        return null;
    }
}


public function setPorcentagemPromocao($porcentagemPromocao, $id_promocao) {
	$sql = "UPDATE promocao SET porcentagemPromocao = " . $porcentagemPromocao . "WHERE id_promocao = " . $id_promocao;
	if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}

}

?>