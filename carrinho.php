<?php $tituloDaPagina = "Carrinho" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<section class="container-fluid m-0 p-0 ajuste">

    <div class="row jumbotron p-0 m-0 text-center">
        <h1 class="col-md-12 p-1 mt-3 mb-3">Carrinho</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <table class="table text-center mt-5">
                    <thead class="thead">
                        <tr>
                            <th scope="col" colspan="2" class="text-left"><h4 class="mb-0">Itens selecionados</h4></th>
                            <th scope="col">Preço Unitário</th>
                            <th scope="col">Preço Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="d-flex">
                                    <img src="./assets/img/celular.jpg" idth="72" height="72" alt="">
                                    <div class="text-left mx-0 mx-md-3">
                                        <h5 class="my-0"> Celular</h5>
                                        <small class="text-muted my-0">Indentificação do produto</small><br>
                                        <label class="mr-1" name="qtd"><small>Qtd</small></label>
                                        <select name="qtd">
                                            <option selected value=1>1</option>
                                            <option value=2>2</option>
                                            <option value=3>3</option>
                                            <option value=4>4</option>
                                            <option value=5>5</option>
                                        </select>
                                        <a href="#" class="ml-3 text-dark"><small>Editar</small></a>
                                        <a href="#" class="ml-3 text-dark"><small>Excluir</small></a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">R$ 900,00</td>
                            <td class="align-middle font-weight-bold">R$ 900,00</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="d-flex">
                                    <img src="./assets/img/computador.jpg" idth="72" height="72" alt="">
                                    <div class="text-left mx-0 mx-md-3">
                                        <h5 class="my-0">Computador</h5>
                                        <small class="text-muted my-0">Indentificação do produto</small><br>
                                        <label class="mr-1" name="qtd"><small>Qtd</small></label>
                                        <select name="qtd">
                                            <option selected value=1>1</option>
                                            <option value=2>2</option>
                                            <option value=3>3</option>
                                            <option value=4>4</option>
                                            <option value=5>5</option>
                                        </select>
                                        <a href="#" class="ml-3 text-dark"><small>Editar</small></a>
                                        <a href="#" class="ml-3 text-dark"><small>Excluir</small></a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">R$ 900,00</td>
                            <td class="align-middle font-weight-bold">R$ 1800,00</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="d-flex">
                                    <img src="./assets/img/controle-ps5.jpg" idth="72" height="72" alt="">
                                    <div class="text-left mx-0 mx-md-3">
                                        <h5 class="my-0">Controle PS5</h5>
                                        <small class="text-muted my-0">Indentificação do produto</small><br>
                                        <label class="mr-1" name="qtd"><small>Qtd</small></label>
                                        <select name="qtd">
                                            <option selected value=1>1</option>
                                            <option value=2>2</option>
                                            <option value=3>3</option>
                                            <option value=4>4</option>
                                            <option value=5>5</option>
                                        </select>
                                        <a href="#" class="ml-3 text-dark"><small>Editar</small></a>
                                        <a href="#" class="ml-3 text-dark"><small>Excluir</small></a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">R$ 900,00</td>
                            <td class="align-middle font-weight-bold">R$ 3600,00</td>
                        </tr>
    
                        <tr>
                            <td colspan="2"></td>
                            <td class="align-middle font-weight-bold">Total</td>
                            <td class="align-middle font-weight-bold">R$ 3600,00</td>
                        </tr>
                        
                    </tbody>
                </table>
                <div class="form-inline">
                    <div class="form-group col-md-6">
                        <label for="cupomDesconto" class="col-auto pl-0">Cupom de Desconto</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="cupomDesconto" id="cupomDesconto" placeholder="INSIRA SEU CUPOM">
                        </div>
                    </div>
                    <div class="form-group col-md-2 offset-4">
                        <button type="submit" class="btn btn-primary" form="carrinhoForm">Finalizar Compra</button>
                    </div>
                </div>
    
            </div>
        </div>


    </div>




</section>


<?php require_once("./inc/footer.php"); ?>