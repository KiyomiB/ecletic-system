<?php

if (empty($_SESSION['conn'])){
	$conn = SQLconn::createConn();
	$_SESSION['conn'] = $conn;
} else {
  $_SESSION['conn'] = "";
  SQLconn::fecharConn();
  $conn = SQLconn::createConn();
  $_SESSION['conn'] = $conn;

}

?>