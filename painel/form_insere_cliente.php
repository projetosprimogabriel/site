<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
    require('conecta.php');

?>
<?php
    include_once('cabecalho.php');
?>

        <div class="content mt-3">
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">sucesso</span> Você leu com sucesso esta importante mensagem de alerta.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-8">
                <div class="card">
                    <form action="insere_cliente.php" method="POST">
                        <div class="mb-3">
                            <label for="nome_cliente" class="form-label">Nome do Cliente</label>
                            <input type="text" class="form-control" id="nome_cliente" name="nome_cliente">                            
                        </div>
                        <div class="mb-3">
                            <label for="email_cliente" class="form-label">Email do cliente</label>
                            <input type="email" class="form-control" id="email_cliente" name="email_cliente">
                        </div>
                        <div class="mb-3">
                            <label for="cidade" class="form-label">Cidade do cliente</label>
                            <input type="text" class="form-control" id="cidade" name="cidade">
                        </div>                        
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
            <!--/.col-->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Fim Painel Direito -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
