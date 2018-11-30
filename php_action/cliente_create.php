<?php
//iniciando a sessao
session_start();
//Conexao
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
  $nome = mysqli_escape_string($connect, $_POST['nome']);
  $contato = mysqli_escape_string($connect, $_POST['contato']);
  $cidade = mysqli_escape_string($connect, $_POST['cidade']);
  $ultima_compra = mysqli_escape_string($connect, $_POST['ultima_compra']);

  //Inseriondo os dados no banco de dados
  $sql = "INSERT INTO cliente (nome, contato, cidade, ultima_compra) VALUES('$nome', '$contato', '$cidade', '$ultima_compra')";

  //verificando a query
  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../cliente_home.php');
  else:
    $_SESSION['mensagem'] = "Erro ao cadastrar cliente!";
    header('Location: ../cliente_home.php');
  endif;
endif;
 ?>
