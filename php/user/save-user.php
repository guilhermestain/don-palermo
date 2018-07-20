<?php

$password        = $_POST['password'];
$password_2        = $_POST['password_2'];


if($password !== $password_2) {
  echo('<script>alert("Senhas não correspondem!")</script>');
  echo "<script>location.href='../index.html'</script>";
}



?>