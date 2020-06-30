<?php $tituloDaPagina = "Editar Categorias" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<section class="jumbotron jumbotron-fluid py-2">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex text-center flex-wrap">
                <p class="mr-3 my-auto"><strong>Menu Administrativo (Provisório)</strong></p>
                <a class="mr-3 my-auto" href="admCategorias.php">Categorias</a>
                <a class="mr-3 my-auto" href="admMensagens.php">Mensagens</a>
                <a class="mr-3 my-auto" href="admProdutos.php">Produtos</a>
                <a class="mr-3 my-auto" href="admUsuarios.php">Usuarios</a>
            </div>
        </div>
    </div>
</section>
<main class="container ajuste" id="barraPedidos">

    <div class="row">
        
        <h2 class="col-12 p-3 mt-3 mb-3 border-bottom">Categorias</h2>
        <div class="col-12 mt-3 mb-3">
            <p>Pesquise por uma Categoria:</p>
            <input class="form-control" id="myInput" type="text" placeholder="Pesquisar...">
            <div id="table" class="tableAdm">
                <table class="table table-striped text-center mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="row">ID</th>
                            <th scope="col">Categoria</th>
                            <th scope="col" colspan="2">Acoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</td>
                            <th scope="row">Bolsas</th>
                            <td>
                                <a href="#">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modal">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</td>
                            <th scope="row">Livros</th>
                            <td>
                                <a href="#">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modal">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</td>
                            <th scope="row">Eletrônicos</th>
                            <td>
                                <a href="#">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modal">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <th scope="row">Outros</th>
                            <td>
                                <a href="#">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modal">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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
                    <h4>Bolsas</h4>
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
                    <h5 class="modal-title">Adicione uma categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="container">
                    <div class="form-group">
                        <input type="text" class="form-control" id="categoriasInput"
                            aria-describedby="categoriaNova" placeholder="Insira uma nova categoria">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Adicionar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>


<?php require_once("./inc/footer.php"); ?>