<?php

class Cd {

private $id_cd;
private $titulo;
private $capa;
private $disponibilidade;
private $descricao;
private $anoLancamento;
private $genero;
private $preco;


$connection = new Connection;

public function createCd($titulo, $capa, $disponibilidade, $desricao, $anoLancamento, $genero) {
     $sql = "INSERT INTO cd (capa, titulo, preco, descricao, disponibilidade, anoLancamento) VALUES (". $capa . "," $titulo . "," . $preco . "," . $descricao . ",". $disponibilidade . ",". $anoLancamento . ")"; 
    if ($connection->conn->{query($sql)} === TRUE) {
    	$last_id = $connection->conn->insert_id;
    	$this->id_cd = $last_id;
    } else {
    	echo "Erro:" . $sql . "<br>" . $connection->conn->error;
    }

}

public function getTitulo($id_cd) {
     $sql = "SELECT titulo FROM cd WHERE id_cd = " . $id_cd;
     $result = $connection->conn->{query($sql)};
      if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["titulo"];
      } else {
        return null;
    }
}


public function setTitulo($titulo, $id_cd) {
      $sql = "UPDATE cd SET titulo = " . $titulo . "WHERE id_cd = " . $id_cd;
    if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getCapa($id_cd) {
      $sql = "SELECT capa FROM cd WHERE id_cd = " . $id_cd;
     $result = $connection->conn->{query($sql)};
      if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["capa"];
      } else {
        return null;
    }
}


public function setCapa($capa, $id_cd) {
      $sql = "UPDATE cd SET capa = " . $capa . "WHERE id_cd = " . $id_cd;
    if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getDisponibilidade($id_cd) {
      $sql = "SELECT disponibilidade FROM cd WHERE id_cd = " . $id_cd;
    $result = $connection->conn->{query($sql)};
      if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["disponibilidade"];
      } else {
        return null;
    }
}


public function setDisponibilidade($disponibilidade, $id_cd) {
      $sql = "UPDATE cd SET disponibilidade = " . $disponibilidade . "WHERE id_cd = " . $id_cd;
    if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getDescricao($id_cd) {
      $sql = "SELECT descricao FROM cd WHERE id_cd = " . $id_cd;
    if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["descricao"];
      } else {
        return null;
    }
}


public function setDescricao($descricao, $id_cd) {
      $sql = "UPDATE cd SET descricao = " . $descricao . "WHERE id_cd = " . $id_cd;
    if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getAnoLancamento($id_cd) {
      $sql = "SELECT anoLancamento FROM cd WHERE id_cd = " . $id_cd;
    if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["anoLancamento"];
      } else {
        return null;
    }
}

public function setAnoLancamento($anoLancamento, $id_cd) {
      $sql = "UPDATE cd SET anoLancamento = " . $anoLancamento  "WHERE id_cd = " . $id_cd;
    if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getDescricao($id_cd) {
      $sql = "SELECT descricao FROM cd WHERE id_cd = " . $id_cd;
    if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["descricao"];
      } else {
        return null;
    }
}


public function setDescricao($descricao, $id_cd){
      $sql = "UPDATE cd SET descricao = " . $descricao . "WHERE id_cd = " . $id_cd;
    if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}



public function getPreco($id_cd) {
       $sql = "SELECT preco FROM cd WHERE id_cd = " . $id_cd;
    if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["preco"];
      } else {
        return null;
    }
}


public function setPreco($preco, $id_cd) {
       $sql = "UPDATE cd SET preco = " . $preco . "WHERE id_cd = " . $id_cd;
    if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


}


?>