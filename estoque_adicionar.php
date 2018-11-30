<?php
  //Header
  include_once 'includes/header.php';
?>

  <div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Novo estoque</h3>
      <form action="php_action/estoque_create.php" method="POST">
        <div class="input-field col s12">
          <input type="text" name="nome_produto" id="nome_produto">
          <label for="nome_produto">Nome do produto</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="qntd_inicial" id="qntd_inicial">
          <label for="qntd_inicial">Quantidade inicial</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="qntd_atual" id="qntd_atual">
          <label for="qntd_atual">Quantidade atual</label>
        </div>


        <button type="submit" name="btn-cadastrar" class="btn blue">Cadastrar</button>
        <a href="estoque_home.php" type="submit" class="btn green">Lista do estoque</a>

      </form>

    </div>
  </div>

<?php
  include_once 'includes/footer.php'
 ?>
