<?php
  //Header
  include_once 'includes/header.php';
?>

  <div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Nova venda</h3>
      <form action="php_action/vendas_create.php" method="POST">
        <div class="input-field col s12">
          <input type="text" name="nome_cliente" id="nome_cliente">
          <label for="nome_cliente">Nome do cliente</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="qntd" id="qntd">
          <label for="qntd">Quantidade</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="nome_produto" id="nome_produto">
          <label for="nome_produto">Nome do produto</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="data_venda" id="data_venda">
          <label for="data_venda">Data da compra</label>
        </div>

        <button type="submit" name="btn-cadastrar" class="btn blue">Cadastrar</button>
        <a href="vendas_home.php" type="submit" class="btn green">Lista de vendas</a>

      </form>

    </div>
  </div>

<?php
  include_once 'includes/footer.php'
 ?>
