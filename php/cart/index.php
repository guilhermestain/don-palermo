<?php
  session_start();
  
  $produto_id = isset($_GET['id']) ? $_GET['id'] : null;

  if(isset($_SESSION['shopping_cart'])) {

    if(count($_SESSION['shopping_cart']) === 0) {

      array_push($_SESSION['shopping_cart'], $produto_id);

    }else {

      array_push($_SESSION['shopping_cart'], $produto_id);

    }

  }else {

    $_SESSION['shopping_cart'] = array();   

  }
  
?>