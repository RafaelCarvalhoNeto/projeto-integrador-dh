<?php $tituloDaPagina = "Historico de Pedidos" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<main class="container" id="barraPedidos">
    <h2 id="caixaPedidos">Produtos</h2>
    <p>Pesquise por uma Produto:</p>
    <input class="form-control" id="myInput" type="text" placeholder="Pesquisar...">
    <br>
    <div id="table">
        <table class="table">
            <thead>
                <tr>
                    <!-- Por alguma razao as paginas Adm nao estao puxando codigo CSS entao inclui style individual em cada imagem -->
                    <th scope="col">Imagem</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Preço (BRL)</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">ID</th>
                    <th scope="col">Acoes</th>

                </tr>
            </thead>
            <tbody id="myTable">
                <tr>
                    <td scope="row"><img src="assets\img\computador.jpg" alt="" id="thumbProduto"
                            style="max-height: 50px;"></td>
                    <td scope="row">Computador</td>
                    <td scope="row">900</td>
                    <td scope="row">Eletronicos</td>
                    <td scope="row">000</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td scope="row"><img src="assets\img\computador.jpg" alt="" id="thumbProduto"
                            style="max-height: 50px;"></td>
                    <td scope="row">Harry Potter</td>
                    <td scope="row">900</td>
                    <td scope="row">Livros</td>
                    <td scope="row">001</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td scope="row"><img src="assets\img\celular.jpg" alt="" id="thumbProduto"
                            style="max-height: 50px;"></td>
                    <td scope="row">Samsung S20</td>
                    <td scope="row">900</td>
                    <td scope="row">Eletronicos</td>
                    <td scope="row">002</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td scope="row"><img src="assets\img\computador.jpg" alt="" id="thumbProduto"
                            style="max-height: 50px;"></td>
                    <td scope="row">Bolsa Gucci</td>
                    <td scope="row">900</td>
                    <td scope="row">Bolsas</td>
                    <td scope="row">003</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Modal Excluir -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Deseja realmente excluir?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3>Computador</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <a href="Bolsas">
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <p class="font-weight-bold">Adicionar Categoria
            <a href="#" data-toggle="modal" data-target="#modalAdd">
                <i class="far fa-plus-square"></i>
            </a></p>
        <!-- Modal Adicionar -->
        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Adicione um produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <br>
                    <form class="container">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="uploadImg">Imagem</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" lang="pt">
                                    <label class="custom-file-label" for="customFileLang">Esolha o arquivo</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSobrenome">Produto</label>
                                <input type="text" class="form-control" placeholder="Insira o nome do produto"
                                    aria-describedby="adicionarProdutoHelp" id="inputSobrenome" name="inputSobrenome"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Categoria</label>
                                <select class="custom-select">
                                    <option value="1">Bolsas</option>
                                    <option value="2">Livros</option>
                                    <option value="3">Eletronicos</option>
                                    <option value="4">Outros</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSobrenome">Preço</label>
                                <input type="number" class="form-control" placeholder="Insira o preço do produto"
                                    aria-describedby="adicionarProdutoHelp" id="inputSobrenome" name="inputSobrenome"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="staticID">ID</label>
                                <input type="text" readonly class="form-control-plaintext" placeholder="000"
                                    aria-describedby="assuntoHelp" id="inputAssunto" name="inputAssunto">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Adicionar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                </div>
            </div>
        </div>
</main>
</div>
</div>

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
<?php require_once("./inc/footer.php"); ?>