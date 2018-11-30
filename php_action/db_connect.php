<?php
//Conexao com o banco de dados
//Dados do servidor
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "wilson_variedades";

//variavel connect para abrir a conexao
$connect = mysqli_connect($servername, $username, $password, $db_name);

//Mudando com acento
mysqli_set_charset($connect, "utf-8");


if(mysqli_connect_error()){
  echo "Erro".mysqli_connect_error;
}
