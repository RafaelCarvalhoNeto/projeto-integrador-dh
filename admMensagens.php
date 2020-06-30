<?php $tituloDaPagina = "Mensagens" ?>
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
        <h2 class="col-12 p-3 mt-3 mb-3 border-bottom">Mensagens</h2>
        <div class="col-12 mt-3 mb-3">
            <p>Pesquise por uma Mensagem:</p>
            <input class="form-control" id="myInput" type="text" placeholder="Pesquisar...">
            <div id="table" class="tableAdm">
                <table class="table table-striped text-center mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Assunto</th>
                            <th scope="col" colspan="2">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td scope="row">$idMensagem</td>    
                            <td scope="row">Fulano</td>
                            <td scope="row">Da Silva</td>
                            <td scope="row">fulano@gmail.com</td>
                            <td scope="row">Maquina quebrada</td>
                            <td scope="row">
                                <a href="#" data-toggle="modal" data-target="#modalAbrir">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </td>
                            <td scope="row">
                                <a href="#" data-toggle="modal" data-target="#modalExcluir">
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
        <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
            </a></p>
        <!-- Modal Abrir -->
        <div class="modal fade" id="modalAbrir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">$idMensagem</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <br>
                    <form class="container">
                    <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" readonly class="form-control-plaintext" placeholder="$nome" aria-describedby="nomeCadastroHelp" id="inputNome" name="inputNome" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputSobrenome">Sobrenome</label>
                <input type="text" readonly class="form-control-plaintext" placeholder="$sobrenome" aria-describedby="sobrenomeCadastroHelp" id="inputSobrenome" name="inputSobrenome" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">E-mail</label>
                <input type="email" readonly class="form-control-plaintext" placeholder="$email" aria-describedby="emailHelp" id="inputEmail" name="inputEmail" required>
            </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">Assunto</label>
                    <input type="text" readonly class="form-control-plaintext" placeholder="$assunto" aria-describedby="assuntoHelp" id="inputAssunto" name="inputAssunto">
                </div>
        </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputMensagem">Mensagem</label>
                        <textarea readonly class="form-control-plaintext" placeholder="$mensagem" aria-describedby="mensagemHelp" id="inputMensagem" rows="4"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-group col-auto clearfix px-0">
                    <button type="submit" class="btn btn-dark float-right ml-2" data-toggle="modal" data-target="#modalTeste">Responder</button>
                </div>
                    </form>
                </div>
            </div>
        </div>
</main>
</div>
</div>

<?php require_once("./inc/footer.php"); ?>