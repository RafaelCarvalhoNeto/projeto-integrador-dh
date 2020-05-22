<?php $tituloDaPagina = "Ecommerce.com: Compre os melhores produtos!" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<section class="container mt-5">
    <div class="row">
        <div class="col-md-5">
            <div>
                <img class="d-block w-100 .produto" src="./assets/img/computador.jpg" alt="">
            </div>
        </div>
        <div class="col-md-7 my-3">
            <h2>Computador</h2>
            <small>Indentificação do Produto</small>
            <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati in odit ratione recusandae excepturi voluptates blanditiis ex, iusto veniam voluptas asperiores, assumenda eos. Voluptate omnis deleniti repellendus velit necessitatibus qui!
            </p>
            <form action="#" method="GET" id="formComprar">
                <div class="row">
                    <div class="col-md-6">
                        
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputTamanho">Modelo</label>
                                    <select class="form-control" name="inputTamanho" id="inputTamanho">
                                        <option disabled="" selected="">--</option>
                                        <option value="250">250 GB Ram</option>
                                        <option value="500">500 GB Ram</option>
                                        <option value="1000">1T Ram</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="quantidade">Quantidade</label>
                                    <input type="number" class="form-control" id="quantidade" step="1" min="1" value="1" required>
                                </div>
                            </div>

                        
                    </div>
                        
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="form-group">
                            <p class="card-text" id="preco">R$ 900,00</p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="mx-auto my-2 btn bg-dark text-white btn-lg"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>

                    </div>
                </div>
            </form>





        </div>
    </div>

    <!-- ACCORDION -->
    <div class="row">
        <div class="col-12 my-5">
            <div class="accordion" id="accordionTabsProduto">

                <div>
                    
                    <buttom class="btn btn-outline-secondary btn-lg btn-block my-2" type="buttom" data-toggle="collapse" data-target="#titulo1" aria-expanded="false" aria-controls="titulo1">
                    Ficha Técnica <i class="fas fa-chevron-down ml-3 font-weight-light"></i>
                    </buttom>

                    <div id="titulo1" class="collapse" aria-labelledby="aba01" data-parent="#accordionTabsProduto">
                        <div class="card-body">

                            <table class="table table-striped text-center">
                                <tbody>
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <td>XXXXXX</td>
                                    </tr>
                                    <tr>
                                        <th>SSD</th>
                                        <td>Não possui</td>
                                    </tr>
                                    <tr>
                                        <th>Teclado</th>
                                        <td>Comum</td>
                                    </tr>



                                </tbody>


                            </table>


                        </div>
                    </div>
                </div>

                <div>
                    <buttom class="btn btn-outline-secondary btn-lg btn-block my-2" type="buttom" data-toggle="collapse" data-target="#titulo2" aria-expanded="false" aria-controls="titulo2">
                    Avaliações <i class="fas fa-chevron-down ml-3 font-weight-light"></i>
                    </buttom>

                    <div id="titulo2" class="collapse" aria-labelledby="aba02" data-parent="#accordionTabsProduto">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, nobis delectus! Sequi, ipsum exercitationem neque blanditiis provident officia. Officia distinctio totam hic repellat! Delectus, reiciendis? Quae nobis optio provident minus?
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>


<div class="container">
  <div class="row text-center">
        <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
                <img class="card-img-top mt-3" src="assets\img\celular.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title" id="produto">Samsung S20</h3>
                    <p class="card-text" id="preco">R$ 900,00</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
                <img class="card-img-top mt-3" src="assets\img\computador.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title" id="produto">Computador Zika</h3>
                    <p class="card-text" id="preco">R$ 900,00</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
                <img class="card-img-top mt-3" src="assets\img\controle-ps5.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title" id="produto">Controle PS5</h3>
                    <p class="card-text" id="preco">R$ 900,00</p>
                </div>
            </div>
        </div>
    </div>
</div>






<?php require_once("./inc/footer.php"); ?>