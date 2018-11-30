<?php
//iniciando a sessao
session_start();
//Conexao
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
  $nome = mysqli_escape_string($connect, $_POST['nome']);
  $contato = mysqli_escape_string($connect, $_POST['contato']);
  $cidade = mysqli_escape_string($connect, $_POST['cidade']);
  $ultima_compra = mysqli_escape_string($connect, $_POST['ultima_compra']);

  $id = mysqli_escape_string($connect, $_POST['id']);

  //Inseriondo os dados no banco de dados
  $sql = "UPDATE cliente SET nome = '$nome', contato = '$contato', cidade = '$cidade', ultima_compra = '$ultima_compra' WHERE id = '$id' ";

  //verificando a query
  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Alterado com sucesso!";
    header('Location: ../cliente_home.php');
  else:
    $_SESSION['mensagem'] = "Erro ao alterar cliente!";
    header('Location: ../cliente_home.php');
  endif;
endif;
 ?>
