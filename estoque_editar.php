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
    $sql = "SELECT * FROM estoque WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
  endif;
?>

  <div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Editar estoque</h3>
      <form action="php_action/estoque_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <div class="input-field col s12">
          <input type="text" name="nome_produto" id="nome_produto" value="<?php echo $dados['nome_produto']; ?>">
          <label for="nome">Nome do produto</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="qntd_inicial" id="qntd_inicial" value="<?php echo $dados['qntd_inicial']; ?>">
          <label for="qntd_inicial">Quantidade inicial</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="qntd_atual" id="qntd_atual" value="<?php echo $dados['qntd_atual']; ?>">
          <label for="qntd_atual">Quantidade atual</label>
        </div>

        <button type="submit" name="btn-editar" class="btn blue">Atualizar</button>
        <a href="estoque_home.php" type="submit" class="btn green">Lista do estoque</a>

      </form>

    </div>
  </div>

<?php
  include_once 'includes/footer.php'
 ?>
