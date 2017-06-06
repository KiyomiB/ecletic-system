<?php
class artista {
 private $id_artista;
 private $nomeArtista;

$connection = new Connection;

public function createArtista($nomeArtista) {
   $sql = "INSERT INTO artista (nomeArtista) VALUES (" . nomeArtista . ")";
   if ($connection->conn->{query($sql)} === TRUE) {
     $last_id = $connection->conn->insert_id;
     $this->id_artista = $last_id;

   } else {
      echo "Erro:" . $sql . "<br" . $connection->conn->error;

   }

   $this->nomeArtista = $nomeArtista;

}


public function getNomeArtista($id_artista) {
    $sql = "SELECT nomeArtista FROM artista WHERE id_artista = " . $id_artista;

     $result = $connection->conn->{query($sql)};
      if ($result->num_rows > 0) {
        $return = $result->{fetch_assoc()};
        return $return["nomeArtista"];
      } else {
        return null;
    }
}

public function setNomeArtista($nomeArtista, $id_artista) {

      $sql = "UPDATE artista SET nomeArtista = " . $nomeArtista . "WHERE id_artista = " . $id_artista;

    if($conn->{query($sql)} === TRUE) {
    	echo "Registro atualizado com sucesso";
    } else {
    	echo "Erro na atualização do registro" . $conn->error;
    }

}

}

?>