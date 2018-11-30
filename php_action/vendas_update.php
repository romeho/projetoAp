<?php
//iniciando a sessao
session_start();
//Conexao
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
  $nome_cliente = mysqli_escape_string($connect, $_POST['nome_cliente']);
  $qntd = mysqli_escape_string($connect, $_POST['qntd']);
  $nome_produto = mysqli_escape_string($connect, $_POST['nome_produto']);
  $data_venda = mysqli_escape_string($connect, $_POST['data_venda']);

  $id = mysqli_escape_string($connect, $_POST['id']);

  //Inseriondo os dados no banco de dados
  $sql = "UPDATE vendas SET nome_cliente = '$nome_cliente', qntd = '$qntd', nome_produto = '$nome_produto', data_venda = '$data_venda' WHERE id = '$id' ";

  //verificando a query
  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Alterado com sucesso!";
    header('Location: ../vendas_home.php');
  else:
    $_SESSION['mensagem'] = "Erro ao alterar venda!";
    header('Location: ../vendas_home.php');
  endif;
endif;
 ?>
