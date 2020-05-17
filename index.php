<?php $tituloDaPagina = "Ecommerce.com: Compre os melhores produtos!" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<div class="container mt-3" id="carrosel">
  <div class="row">
    <div class="col-12">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleControls" data-slide-to="1"></li>
          <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100"
              src="https://futurelinkit.com/wp-content/uploads/2016/01/1920x500-placeholder.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h3>Item 1 Heading</h3>
              <p>Item 1 Description</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"
              src="https://futurelinkit.com/wp-content/uploads/2016/01/1920x500-placeholder.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h3>Item 2 Heading</h3>
              <p>Item 2 Description</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"
              src="https://futurelinkit.com/wp-content/uploads/2016/01/1920x500-placeholder.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h3>Item 3 Heading</h3>
              <p>Item 3 Description</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="container" id="maisvendidos">
  <h3>Mais Vendidos</h3>
  <hr>
</div>
<!-- Card deck -->
<div class="container">
  <div class="row text-center">
    <div class="col-md-4 pb-1 pb-md-0">
      <div class="card">
        <img class="card-img-top" src="assets\img\celular.jpg" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title" id="produto">Samsung S20</h3>
          <p class="card-text" id="preco">R$ 900,00</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 pb-1 pb-md-0">
      <div class="card">
        <img class="card-img-top" src="assets\img\computador.jpg" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title" id="produto">Computador Zika</h3>
          <p class="card-text" id="preco">R$ 900,00</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 pb-1 pb-md-0">
      <div class="card">
        <img class="card-img-top" src="assets\img\controle-ps5.jpg" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title" id="produto">Controle PS5</h3>
          <p class="card-text" id="preco">R$ 900,00</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row text-center mt-4">
    <div class="col-md-4 pb-1 pb-md-0">
      <div class="card">
        <img class="card-img-top" src="assets\img\celular.jpg" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title" id="produto">Card title</h3>
          <p class="card-text" id="preco">R$ 900,00</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 pb-1 pb-md-0">
      <div class="card">
        <img class="card-img-top" src="assets\img\celular.jpg" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title" id="produto">Card title</h3>
          <p class="card-text" id="preco">R$ 900,00</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 pb-1 pb-md-0">
      <div class="card">
        <img class="card-img-top" src="assets\img\celular.jpg" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title" id="produto">Card title</h3>
          <p class="card-text" id="preco">R$ 900,00</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</article>
<!-- cards redondos -->
<div class="container" id="maisvendidos">
  <h3>Navegue por loja</h3>
  <hr>
</div>
<section>
<div class="container">
    <div class="row">
      <div class="col">
        <img src="assets\img\ofertas.jpg">
      </div>
      <div class="col">
        <img src="assets\img\livros.jpg">
      </div>
      <div class="col">
        <img src="assets\img\moveis.jpg">
      </div>
      <div class="col">
        <img src="assets\img\copos.jpg">
      </div>
</section>
<!-- <div class="container">
  <section id="catR" class="row ml-5 mr-5">

    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="mb-3">
          <a href="#">
            <img id="redonda" src="assets\img\ofertas.jpg" class alt=".h-100">
        </div>
        </a>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="mb-3">
        <a href="#">
          <img id="redonda" src="assets\img\livros.jpg" class alt=".h-100">
        </a>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="mb-3">
        <a href="#">
          <img id="redonda" src="assets\img\moveis.jpg" class alt=".h-100">
        </a>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="mb-3">
        <a href="#">
          <img id="redonda" src="assets\img\copos.jpg" class alt=".h-100">
        </a>
      </div>
    </div>
</div>
</section> -->
<!-- card deck -->
<div class="container" id="maisvendidos">
  <h3>Ofertas</h3>
  <hr>
</div>
<section>
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="assets\img\celular.jpg" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title" id="produto">Samsung S20</h3>
            <p class="card-text" id="preco">R$ 900,00</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="assets\img\computador.jpg" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title" id="produto">Card title</h3>
            <p class="card-text" id="preco">R$ 900,00</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="assets\img\controle-ps5.jpg" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title" id="produto">Card title</h3>
            <p class="card-text" id="preco">R$ 900,00</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center mt-4">
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="assets\img\celular.jpg" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title" id="produto">Card title</h3>
            <p class="card-text" id="preco">R$ 900,00</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="assets\img\celular.jpg" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title" id="produto">Card title</h3>
            <p class="card-text" id="preco">R$ 900,00</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="assets\img\celular.jpg" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title" id="produto">Card title</h3>
            <p class="card-text" id="preco">R$ 900,00</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php require_once("./inc/footer.php"); ?>