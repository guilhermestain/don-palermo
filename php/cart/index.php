<?php
require_once('../config/db.config.php');
  
$dbConnection = new ConfigDb();
$link = $dbConnection->connectDb();

$cart = isset($_SESSION['shopping_cart']) 
? array_filter($_SESSION['shopping_cart'], function($data) {
  return $data > 0;
  }) 
: $_SESSION['shopping_cart'] = array();

$cartFormat = "(".implode(',',$cart).")";

$sql = "select * from produtos where id IN (".implode(',',$cart).")";

$produtos = array();
$result = mysqli_query($link, $sql);

if(count($cart)) {
  while($produto = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $produtos[] = $produto;
  }
}
?>


