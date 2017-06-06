<?php

class Musica {
private $id_musica;
private $nomeMusica;
private $tempo;

$connection = new Connection;


public function createMusica($id_musica, $nomeMusica, $tempo) {
	$sql = "INSERT INTO musica (nomeMusica, tempo) VALUES (". $nomeMusica . "," . $tempo . ")";
	if ($connection->conn->{query($sql)} === TRUE) {
     $last_id = $connection->conn->insert_id;
     $this->id_musica = $last_id;

   } else {
      echo "Erro:" . $sql . "<br>" . $connection->conn->error;

   }

   $this->nomeMusica = $nomeMusica;
   $this->tempo = $tempo;

}


public function getNomeMusica($id_musica) {
	$sql = "SELECT nomeMusica FROM musica WHERE id_musica = " . $id_musica;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["nomeMusica"];
      } else {
        return null;
    }
}


public function setNomeMusica($nomeMusica, $id_musica) {
	$sql = "UPDATE musica SET nomeMusica = " . $nomeMusica . "WHERE id_musica = " . $id_musica;
	if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


public function getTempo($id_musica) {
	$sql = "SELECT tempo FROM musica WHERE id_musica = " . $id_musica;
	if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["tempo"];
      } else {
        return null;
    }
}


public function setTempo($tempo, $id_musica) {
	$sql = "UPDATE musica SET tempo = " . $tempo . "WHERE id_musica = " . $id_musica;
	if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }
}


}

?>