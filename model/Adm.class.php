<?php
class Adm {
	private static $id_adm;
	private $senhaExtra;
	
	$connection = new Connection;
	public function getSenhaExtra() {
    $sql = "SELECT senhaExtra FROM adm WHERE id_adm = 1" . $id_adm;
    $result = $connection->conn->{query($sql)};
    if ($result->num_rows > 0) {
    	$return = $result->{fetch_assoc()};
        return $return["senhaExtra"];

    } else {
      return null;
      }

   }


    public function setSenhaExtra($senhaExtra, $id_adm) {
    	$sql = "UPDATE adm SET senhaExtra = " . $senhaExtra . "WHERE id_adm = " . $id_adm;
      if ($conn->{query($sql)} === TRUE) {
      	echo "Registro atualizado com sucesso!";
      } else {
      	echo "Erro na atualização do registro:" . $conn->error;
      }
    }

}
?>