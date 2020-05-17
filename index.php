<?php $tituloDaPagina = "Index" ?>
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
              src="https://www.wigan-leigh.ac.uk/application/files/6815/0816/7195/placeholder.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Item 1 Heading</h5>
              <p>Item 1 Description</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"
              src="https://www.wigan-leigh.ac.uk/application/files/6815/0816/7195/placeholder.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Item 2 Heading</h5>
              <p>Item 2 Description</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"
              src="https://www.wigan-leigh.ac.uk/application/files/6815/0816/7195/placeholder.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Item 3 Heading</h5>
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
<p class="mt-12">Mais Vendidos<br></p>
<hr>
<!-- Cards Deck -->
<section>
  <article class="col-lg-12">
    <div class="row row-cols-1 row-cols-md-3">
      <div class="col mb-4">
        <div class="card h-100">
          <img src="./assets/img/blank.jpeg" class="card-img-top" alt=".h-100">
          <div class="card-body">
            <h5 class="card-title">Produto1</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card h-100">
          <img src="./assets/img/blank.jpeg" class="card-img-top" alt=".h-100">
          <div class="card-body">
            <h5 class="card-title">Produto2</h5>
            <p class="card-text">This is a short card.</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card h-100">
          <img src="./assets/img/blank.jpeg" class="card-img-top" alt=".h-100">
          <div class="card-body">
            <h5 class="card-title">Produto3</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
              content.</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card h-100">
          <img src="./assets/img/blank.jpeg" class="card-img-top" alt=".h-100">
          <div class="card-body">
            <h5 class="card-title">Produto4</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
    </div>
  </article>
  <!-- cards redondos -->
  <section id="catR" class="row ml-5 mr-5">

    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="mb-3">
          <a href="#">
            <img id="redonda" src="./assets/img/blank2.jpeg" class alt=".h-100">
        </div>
        </a>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="mb-3">
        <a href="#">
          <img id="redonda" src="./assets/img/blank2.jpeg" class alt=".h-100">
        </a>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="mb-3">
        <a href="#">
          <img id="redonda" src="./assets/img/blank2.jpeg" class alt=".h-100">
        </a>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="mb-3">
        <a href="#">
          <img id="redonda" src="./assets/img/blank2.jpeg" class alt=".h-100">
        </a>
      </div>
    </div>

  </section>
  <!-- card deck -->
  <section>
    <article class="col-lg-12">
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <div class="card h-100">
            <img src="./assets/img/blank.jpeg" class="card-img-top" alt=".h-100">
            <div class="card-body">
              <h5 class="card-title">Produto1</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="./assets/img/blank.jpeg" class="card-img-top" alt=".h-100">
            <div class="card-body">
              <h5 class="card-title">Produto2</h5>
              <p class="card-text">This is a short card.</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="./assets/img/blank.jpeg" class="card-img-top" alt=".h-100">
            <div class="card-body">
              <h5 class="card-title">Produto3</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content.</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="./assets/img/blank.jpeg" class="card-img-top" alt=".h-100">
            <div class="card-body">
              <h5 class="card-title">Produto4</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>


  <?php require_once("./inc/footer.php"); ?>