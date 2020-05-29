<?php $tituloDaPagina = "Historico de Pedidos" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container">
<aside class="col-md" id="barraPerfil">
<div class="rounded-circle"><img src="https://cdn2.vectorstock.com/i/thumb-large/23/81/default-avatar-profile-icon-vector-18942381.jpg" alt="Imagem de Perfil"></div>
<!-- Quando Comercarmos a editar esta pagina no backend porfavor substituir os codigos abaixo por variaveis -->
<h1>Fulano da Silva</h1>
<h4>fulano@gmail.com</h4>
<a href="#">Editar perfil</a>
<hr>
</aside>
<main class="col-md" id="barraPedidos">
<h2 id="caixaPedidos">Todos os Pedidos</h2>
<p>Pesquise por um pedido:</p>  
<input class="form-control" id="myInput" type="text" placeholder="Pesquisar...">
<br>
<div id="table">
<table class="table">
  <thead>
    <tr>
      <th scope="col">N<sup>o</sup> do Pedido</th>
      <th scope="col">Produto</th>
      <th scope="col">Data</th>
      <th scope="col">Pagamento</th>
      <th scope="col">Status</th>
      <th scope="col">NF-e</th>
    </tr>
  </thead>
  <tbody id="myTable">
    <tr>
      <th scope="row">1</th>
      <td>Bolsa</td>
      <td>02/01/2020</td>
      <td>Boleto Bancario</td>
      <td>Enviado</td>
      <td><a href="#">pdf</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Computador</td>
      <td>02/01/2020</td>
      <td>Cartao de Credito</td>
      <td>Entregue</td>
      <td><a href="#">pdf</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Livro</td>
      <td>02/01/2020</td>
      <td>Paypal</td>
      <td>Entregue</td>
      <td><a href="#">pdf</a></td>
    </tr>
  </tbody>
</table>
</main>
</div>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php require_once("./inc/footer.php"); ?>