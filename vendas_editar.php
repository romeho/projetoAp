<?php
  //Conexao
  include_once 'php_action/db_connect.php';
  //Header
  include_once 'includes/header.php';
  //mensagem
  include_once 'includes/mensagem.php';
  //verificar se existe o parametro id
  if(isset($_GET['id'])):
    //pega o id do banco
    $id = mysqli_escape_string($connect, $_GET['id']);
    //faz o select
    $sql = "SELECT * FROM vendas WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
  endif;
?>

  <div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Editar venda</h3>
      <form action="php_action/vendas_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <div class="input-field col s12">
          <input type="text" name="nome_cliente" id="nome_cliente" value="<?php echo $dados['nome_cliente']; ?>">
          <label for="nome_cliente">Nome do cliente</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="qntd" id="qntd" value="<?php echo $dados['qntd']; ?>">
          <label for="qntd">Quantidade</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="nome_produto" id="nome_produto" value="<?php echo $dados['nome_produto']; ?>">
          <label for="nome_produto">Nome do produto</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="data_venda" id="data_venda" value="<?php echo $dados['data_venda']; ?>">
          <label for="data_venda">Data da compra</label>
        </div>

        <button type="submit" name="btn-editar" class="btn blue">Atualizar</button>
        <a href="vendas_home.php" type="submit" class="btn green">Lista de vendas</a>

      </form>

    </div>
  </div>

<?php
  include_once 'includes/footer.php'
 ?>
