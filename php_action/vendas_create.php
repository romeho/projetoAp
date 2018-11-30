<?php
//iniciando a sessao
session_start();
//Conexao
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
  $nome_cliente = mysqli_escape_string($connect, $_POST['nome_cliente']);
  $qntd = mysqli_escape_string($connect, $_POST['qntd']);
  $nome_produto = mysqli_escape_string($connect, $_POST['nome_produto']);
  $data_venda = mysqli_escape_string($connect, $_POST['data_venda']);

  //Inseriondo os dados no banco de dados
  $sql = "INSERT INTO vendas (nome_cliente, qntd, nome_produto, data_venda) VALUES('$nome_cliente', '$qntd', '$nome_produto', '$data_venda')";

  //verificando a query
  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../vendas_home.php');
  else:
    $_SESSION['mensagem'] = "Erro ao cadastrar venda!";
    header('Location: ../vendas_home.php');
  endif;
endif;
 ?>
