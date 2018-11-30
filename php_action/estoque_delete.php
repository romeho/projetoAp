<?php
//iniciando a sessao
session_start();
//Conexao
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):

  $id = mysqli_escape_string($connect, $_POST['id']);

  //deletando os dados no banco de dados
  $sql = " DELETE FROM estoque WHERE id='$id'";

  //verificando a query
  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Deletado com sucesso!";
    header('Location: ../estoque_home.php');
  else:
    $_SESSION['mensagem'] = "Erro ao deletar!";
    header('Location: ../estoque_home.php');
  endif;
endif;
 ?>
