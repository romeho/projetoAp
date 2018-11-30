<?php
//iniciando a sessao
session_start();
//Conexao
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
  $nome_produto = mysqli_escape_string($connect, $_POST['nome_produto']);
  $qntd_inicial = mysqli_escape_string($connect, $_POST['qntd_inicial']);
  $qntd_final = mysqli_escape_string($connect, $_POST['qntd_final']);

  $id = mysqli_escape_string($connect, $_POST['id']);

  //Inseriondo os dados no banco de dados
  $sql = "UPDATE estoque SET nome_produto = '$nome_produto', qntd_inicial = '$qntd_inicial', qntd_final = '$qntd_final' WHERE id = '$id' ";

  //verificando a query
  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Alterado com sucesso!";
    header('Location: ../estoque_home.php');
  else:
    $_SESSION['mensagem'] = "Erro ao alterar!";
    header('Location: ../estoque_home.php');
  endif;
endif;
 ?>
