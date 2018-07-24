<?php
require_once('../../config/db.config.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];
$usuario = $_POST['username'];
$senha = md5($_POST['password']);
$confirma_senha = md5($_POST['password_2']);

$dbConnection = new ConfigDb();
$link = $dbConnection->connectDb();

$sql = " insert into clientes(nome, sobrenome, telefone, email, cpf, data_nascimento, usuario, senha)";
$sql .= " values ('$nome', '$sobrenome', '$telefone', '$email', '$cpf', '$data_nascimento', '$usuario', '$senha')";

if(mysqli_query($link, $sql)) {
  header('Location: ../../login/');
}else {
  echo('error ao salvar');
};

?>