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
                <img class="d-block w-100" src="https://www.wigan-leigh.ac.uk/application/files/6815/0816/7195/placeholder.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Item 1 Heading</h5>
                  <p>Item 1 Description</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://www.wigan-leigh.ac.uk/application/files/6815/0816/7195/placeholder.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Item 2 Heading</h5>
                  <p>Item 2 Description</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://www.wigan-leigh.ac.uk/application/files/6815/0816/7195/placeholder.png" alt="Third slide">
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


 
<?php require_once("./inc/footer.php"); ?>