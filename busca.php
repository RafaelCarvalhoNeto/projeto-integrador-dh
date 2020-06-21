<?php $tituloDaPagina = "Ecommerce.com: Compre os melhores produtos!" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<div class="container">
    <h2 class="col-12 p-3 mt-3 mb-3 border-bottom">Ofertas</h2>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Promoção</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        <label class="form-check-label" for="inlineCheckbox2">Desconto</label>
    </div>
    <div class="list-group">
        <h2 class="col-12 p-3 mt-3 mb-3 border-bottom">Preço</h2>
        <div class="slidecontainer">
            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
        </div>
        <h2 class="col-12 p-3 mt-3 mb-3 border-bottom">Marca</h2>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Asus</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Sony</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Microsoft</label>
        </div>
    </div>
    <!-- Card deck -->
    <section class="container">
        <div class="row text-center mt-4">
            <div class="col-md-3 pb-1 pb-md-0 mb-3">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\eletronico-01.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Playstation 4 com 20Gb de memoria</h3>
                            <p class="card-text preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 pb-1 pb-md-0  mb-3">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\eletronico-02.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Atari - Um dos primeiros do mundo</h3>
                            <p class="card-text preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 pb-1 pb-md-0">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\eletronico-03.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Console PS3 com 10 jogos exlusivos</h3>
                            <p class="card-text preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 pb-1 pb-md-0">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\eletronico-04.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Nintendo 64 e 4 controles e 200 jogos</h3>
                            <p class="card-text preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-3 pb-1 pb-md-0 mb-3">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\eletronico-05.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Sega com dois controles e mais de mil jogos</h3>
                            <p class="card-text preco">R$ 900,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 pb-1 pb-md-0  mb-3">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\livro-02.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Livro the Five disfunction of a team</h3>
                            <p class="card-text preco">R$ 50,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 pb-1 pb-md-0">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\livro-03.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Livro O Foco Tripo - Daniel Goleman</h3>
                            <p class="card-text preco">R$ 50,00</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 pb-1 pb-md-0">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\livro-04.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Livro A Culpa é das estrelas - John Green</h3>
                            <p class="card-text preco">R$ 50,00</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </section>
    <!-- card deck -->
    <section class="container">
        <div class="row text-center mt-4">
            <div class="col-md-3 pb-1 pb-md-0 mb-3">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-header bg-success text-white text-center">
                            <p class="faixa-promo">Promoção</p>
                        </div>
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\livro-10.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Livro O Livros dos Títulos - Kniha Nazvu</h3>
                            <p class="card-text preco">R$ 50,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 pb-1 pb-md-0  mb-3">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-header bg-success text-white text-center">
                            <p class="faixa-promo">Promoção</p>
                        </div>
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\livro-05.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Livro Glossário da capa colorida</h3>
                            <p class="card-text preco">R$ 50,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 pb-1 pb-md-0">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-header bg-danger text-white text-center">
                            <p class="faixa-promo">10% de desconto</p>
                        </div>
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\livro-06.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Livro O Cirurgião - Tess Gerritsen</h3>
                            <p class="card-text preco">R$ 50,00</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 pb-1 pb-md-0">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-header bg-danger text-white text-center">
                            <p class="faixa-promo">10% de desconto</p>
                        </div>
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\eletronico-06.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Notebook Positivo 20GB 350RAM</h3>
                            <p class="card-text preco">R$ 2.000,00</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-3 pb-1 pb-md-0 mb-3">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\eletronico-07.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Notebook Samsung New Generation i9 10TB</h3>
                            <p class="card-text preco">R$ 2.000,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 pb-1 pb-md-0  mb-3">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\eletronico-09.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Notebook HP Pavillon X200, 250TB RAM</h3>
                            <p class="card-text preco">R$ 2.000,00</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 pb-1 pb-md-0">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\livro-07.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Livro Queremos nos Calar - Mel Duarte</h3>
                            <p class="card-text preco">R$ 50,00</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 pb-1 pb-md-0">
                <a href="detalheProduto.php">
                    <div class="card avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="assets\img\livro-08.png" alt="Card image cap" width="140px" height="140px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title produto">Livro 1984 - George Orwel</h3>
                            <p class="card-text preco">R$ 50,00</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <div class="row">
        <br>
    </div>
    <div class="container">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">&laquo;</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1<span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">&raquo;</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</section>

<?php require_once("./inc/footer.php"); ?>