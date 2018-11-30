<?php
//iniciando a sessao
session_start();
//Conexao
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
  $nome_produto = mysqli_escape_string($connect, $_POST['nome_produto']);
  $qntd_inicial = mysqli_escape_string($connect, $_POST['qntd_inicial']);
  $qntd_atual = mysqli_escape_string($connect, $_POST['qntd_atual']);

  //Inseriondo os dados no banco de dados
  $sql = "INSERT INTO estoque (nome_produto, qntd_inicial, qntd_atual) VALUES('$nome_produto', '$qntd_inicial', '$qntd_atual')";

  //verificando a query
  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../estoque_home.php');
  else:
    $_SESSION['mensagem'] = "Erro ao cadastrar cliente!";
    header('Location: ../estoque_home.php');
  endif;
endif;
 ?>
