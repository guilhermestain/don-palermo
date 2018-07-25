<?php
require_once('../config/db.config.php');


$dbConnection = new ConfigDb();
$link = $dbConnection->connectDb();

$sql = "select * from produtos where categoria = 'BEBIDA' order by descricao asc";

$result = mysqli_query($link, $sql);

$produtos = array();


while($produto = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  $produtos[] = $produto;
}

?>