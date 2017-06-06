<?php

class Compra {
private $id_compra;
private $formaPagamento;
private $opcaoEnvio;
private $enderecoEntrega;
private $valorTotal;
private $tituloCd;

$connection = new Connection;

public function createCompra($id_compra, $formaPagamento, $opcaoEnvio, $enderecoEntrega, $valorTotal, $tituloCd) {
      $sql = "INSERT INTO compra (formaPagamento, opcaoEnvio, enderecoEntrega, valorTotal, tituloCd) VALUES (" . $formaPagamento . "," . $opcaoEnvio . "," . $enderecoEntrega . "," . $valorTotal . "," . $tituloCd . ")";
    if ($connection->conn->{query($sql)} === TRUE) {
     $last_id = $connection->conn->insert_id;
     $this->id_compra = $last_id;

   } else {
      echo "Erro:" . $sql . "<br>" . $connection->conn->error;

   }

   $this->formaPagamento = $formaPagamento;
   $this->opcaoEnvio = $opcaoEnvio;
   $this->enderecoEntrega = $enderecoEntrega;
   $this->valorTotal = $valorTotal;
   $this->tituloCd = $tituloCd;


}

public function getFormaPagamento($id_compra) {
	$sql = "SELECT formaPagamento FROM compra WHERE id_compra = " . $id_compra;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["formaPagamento"];
      } else {
        return null;
    }
}

public function setFormaPagamento($formaPagamento, $id_compra) {
       $sql = "UPDATE compra SET formaPagamento = " . $formaPagamento . "WHERE id_compra = " . $id_compra;
    if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getOpcaoEnvio($id_compra) {
	$sql = "SELECT opcaoEnvio FROM compra WHERE id_compra = " . $id_compra;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["opcaoEnvio"];
      } else {
        return null;
    }

}

public function setOpcaoEnvio($opcaoEnvio, $id_compra) {
	$sql = "UPDATE compra SET opcaoEnvio = " . $opcaoEnvio . "WHERE id_compra = " . $id_compra;
	if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getEnderecoEntrega($id_compra) {
	$sql = "SELECT enderecoEntrega FROM compra WHERE id_compra = " . $id_compra;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["enderecoEntrega"];
      } else {
        return null;
    }
}


public function setEnderecoEntrega($enderecoEntrega, $id_compra) {
	$sql = "UPDATE compra SET enderecoEntrega = " . $enderecoEntrega . "WHERE id_compra = " . $id_compra;
	if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getValorTotal($id_compra) {
	$sql = "SELECT valorTotal FROM compra WHERE id_compra = " . $id_compra;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["valorTotal"];
      } else {
        return null;
    }
}


public function setValorTotal($valorTotal, $id_compra) {
	$sql = "UPDATE compra SET valorTotal = " . $valorTotal . "WHERE id_compra = " . $id_compra;
	if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getTituloCd($id_compra) {
	$sql = "SELECT tituloCd FROM compra WHERE id_compra = " . $id_compra;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["tituloCd"];
      } else {
        return null;
    }

}


public function setTituloCd($tituloCd, $id_compra) {
      $sql = "UPDATE compra SET tituloCd = " . $tituloCd . "WHERE id_compra = " . $id_compra;
    if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


}

?>