<?php $tituloDaPagina = "Editar Categorias" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<main class="container" id="barraPedidos">
    <h2 id="caixaPedidos">Categorias</h2>
    <p>Pesquise por uma Categoria:</p>
    <input class="form-control" id="myInput" type="text" placeholder="Pesquisar...">
    <br>
    <div id="table">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Categoria</th>
                    <th scope="col">Acoes</th>
                </tr>
            </thead>
            <tbody id="myTable">
                <tr>
                    <th scope="row">Bolsas</th>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Livros</th>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Eletrônicos</th>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Outros</th>
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
                    <br>
                    <form class="container">
                        <div class="form-group">
                            <input type="text" class="form-control" id="categoriasInput"
                                aria-describedby="categoriaNova" placeholder="Insira uma nova categoria">
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


<?php require_once("./inc/footer.php"); ?>