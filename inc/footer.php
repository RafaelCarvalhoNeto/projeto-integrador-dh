  <footer class="container-fluid mt-5 mb-0 mx-0 px-0">
    <div id="footer">
      <div class=" bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-12 d-flex justify-content-between my-0 text-center link-footer">
              <a href="./ofertas.php">Ofertas</a>
              <a href="./livros.php">Livros</a>
              <a href="./eletronicos.php">Eletrônicos</a>
              <a href="./bolsas.php">Bolsas</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container text-white bg-dark pt-4">
          
        <div class="row">
          <div class="col-md-12 col-lg-12 text-center">
            <div class="d-flex flex-row flex-nowrap justify-content-center redes-sociais mb-2">
              <a href="#" target="_blank" title="Acesse nosso Insta"><i class="fab fa-instagram mr-2"></i></a>
              <a href="#" target="_blank" title="Acesse nosso Face"><i class="fab fa-facebook mr-2"></i></a>
              <a href="#" target="_blank" title="Acesse nosso Twitter"><i class="fab fa-twitter mr-2"></i></a>
              <a href="#" target="_blank" title="Acesse nosso Pinterest"><i class="fab fa-pinterest mr-2"></i></a>
            </div>
            <address>
              <strong>Ecommerce, Inc.</strong><br>
              Rua Alameda Santos 110, Sao Paulo, SP, 9110-999<br>
              <abbr title="Telefone">Tel:</abbr> (123) 456-7890
            </address>
            <address>
              <strong>SAC</strong><br>
              <a href="mailto:#">ecommerce@exemplo.com</a>
            </address>
          </div>
        </div>
      </div>
      <div class="d-flex flex-row flex-nowrap justify-content-center py-3 text-center">
        <small>xxxx &copy; | CNPJ 01.012.012/0001-99 | <a href="#" title="Políticas e Termos" data-toggle="modal"
            data-target="#modalPoliticas">Políticas de Privacidade</a> | <a href="#" title="Trocas e Devoluções"
            data-toggle="modal" data-target="#modalTrocas">Trocas e Devoluções</a></small>
      </div>
    </div>
  </footer>
  <!-- Modal Login  -->
  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLoginLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="meuemail@meuprovedor.com" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">Nunca salve seu email em computadores públicos.</small>
            </div>
            <div class="form-group">
              <label for="senha">Password</label>
              <input type="password" class="form-control" id="senha" placeholder="insira sua senha" aria-describedby="passwordHelp">
              <small id="passwordHelp" class="form-text text-muted">Nunca salve sua senha em computadores públicos.</small>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="aceite">
              <label class="form-check-label" for="aceite">Concordo com a <a href="politicas.php">Políticas de Privacidade</a> e <a href="politicas.php">Termos de Uso</a></label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Logar</button>
        </div>
        <label class="container justify-content-right">Ainda não tem cadastro? <a href="cadastro.php"><small>Cadastre-se Aqui!</small></a></label>
        <label class="container justify-content-right">Esqueceu sua senha? <a href="#"><small>Clique Aqui!</small></a></label>
      </div>
    </div>
  </div>
  <!-- SCRIPTS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  </body>

  </html>