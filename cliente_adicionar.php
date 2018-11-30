<?php
  //Header
  include_once 'includes/header.php';
?>

  <div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Novo cliente</h3>
      <form action="php_action/cliente_create.php" method="POST">
        <div class="input-field col s12">
          <input type="text" name="nome" id="nome">
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="contato" id="contato">
          <label for="contato">Contato</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="cidade" id="cidade">
          <label for="cidade">Cidade</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="ultima_compra" id="ultima_compra">
          <label for="ultima_compra">Data da última compra</label>
        </div>

        <button type="submit" name="btn-cadastrar" class="btn blue">Cadastrar</button>
        <a href="cliente_home.php" type="submit" class="btn green">Lista de clientes</a>

      </form>

    </div>
  </div>

<?php
  include_once 'includes/footer.php'
 ?>
