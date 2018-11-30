<?php
  session_start();
  $user = $_POST['user'];
  $password = $_POST['password'];

    if(($user == 'admin') && ($password == 'admin')){
      header("Location: home.php");
    } else {
      $_SESSION['loginErro'] = "Usuário ou senha inválido";
      header("Location: index.php");
    }
?>
