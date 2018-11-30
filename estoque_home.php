<?php
//Conexao
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//mensagem
include_once 'includes/mensagem.php';
?>

  <div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Estoque</h3>
      <table class="striped">
        <thead>
          <tr>
            <th>Nome do produto:</th>
            <th>Quantidade inicial:</th>
            <th>Quantidade atual:</th>
          </tr>
        </thead>

        <tbody>
          <?php
            $sql = "SELECT * FROM estoque";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) > 0):

            while($dados = mysqli_fetch_array($resultado)):
           ?>
          <tr>
            <td><?php echo $dados['nome_produto']; ?></td>
            <td><?php echo $dados['qntd_inicial']; ?></td>
            <td><?php echo $dados['qntd_atual']; ?></td>
            <td><a href="estoque_editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

            <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

            <!-- Modal Structure -->
            <div id="modal<?php echo $dados['id']; ?>" class="modal">
              <div class="modal-content">
                <h3>Aviso</h3>
                <p>Tem certeza que deseja excluir?</p>
              </div>
              <div class="modal-footer">

                <form action="php_action/estoque_delete.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                  <button type="submit" name="btn-deletar" class="btn red">Sim, desejo deletar</button>

                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                </form>
              </div>
            </div>

          </tr>
        <?php endwhile; else: ?>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
        <?php endif; ?>
        </tbody>
      </table>
      <br>
      <a href="estoque_adicionar.php" class="btn blue">Adicionar novo estoque</a>
    </div>
  </div>

<?php
  include_once 'includes/footer.php'
 ?>
