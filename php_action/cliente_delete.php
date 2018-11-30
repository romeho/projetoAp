<?php
//iniciando a sessao
session_start();
//Conexao
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):

  $id = mysqli_escape_string($connect, $_POST['id']);

  //deletando os dados no banco de dados
  $sql = " DELETE FROM cliente WHERE id='$id'";

  //verificando a query
  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Deletado com sucesso!";
    header('Location: ../cliente_home.php');
  else:
    $_SESSION['mensagem'] = "Erro ao deletar cliente!";
    header('Location: ../cliente_home.php');
  endif;
endif;
 ?>
