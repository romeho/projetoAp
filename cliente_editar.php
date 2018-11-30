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
    $sql = "SELECT * FROM cliente WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
  endif;
?>

  <div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Editar cliente</h3>
      <form action="php_action/cliente_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <div class="input-field col s12">
          <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="contato" id="contato" value="<?php echo $dados['contato']; ?>">
          <label for="contato">Contato</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="cidade" id="cidade" value="<?php echo $dados['cidade']; ?>">
          <label for="cidade">Cidade</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="ultima_compra" id="ultima_compra" value="<?php echo $dados['ultima_compra']; ?>">
          <label for="ultima_compra">Data da última compra</label>
        </div>

        <button type="submit" name="btn-editar" class="btn blue">Atualizar</button>
        <a href="cliente_home.php" type="submit" class="btn green">Lista de clientes</a>

      </form>

    </div>
  </div>

<?php
  include_once 'includes/footer.php'
 ?>
