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


  // como criar filtros com php
      // $numbers = array(1,2,3,4,5,6,7,8,25, 'alexandre');

    // $more_than_four = array_filter($numbers, function($data) {
    //   return $data >= 4;
    // });

    // $less_than_four = array_filter($numbers, function($data) {
    //   return $data < 4;
    // });

    // $equal = array_filter($numbers, function($data) {
    //   return $data === 'alexandre';
    // });

    // $equalTo = array_filter($numbers, function($data) {
    //   return $data === 25;
    // });



    // print_r($more_than_four);
    // echo '<br><br>';
    // print_r($less_than_four);
    // echo '<br><br>';
    // print_r($equal);
    // echo '<br><br>';
    // print_r($equalTo);
    // echo '<br><br>';
    // print($produto_id);

?>


