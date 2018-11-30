<?php
//abrindo a sessao
session_start();
if(isset($_SESSION['mensagem'])): ?>
  <script>
  //onload serve pra carregar a funcao depois que a pagina for carregada
    window.onload = function(){
        M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
    }
  </script>
<?php
endif;
session_unset();
?>
