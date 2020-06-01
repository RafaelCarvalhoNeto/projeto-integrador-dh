<?php $tituloDaPagina = "Historico de Pedidos" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<main class="container" id="barraPedidos">
    <h2 id="caixaPedidos">Mensagens</h2>
    <p>Pesquise por uma Mensagem:</p>
    <input class="form-control" id="myInput" type="text" placeholder="Pesquisar...">
    <br>
    <div id="table">
        <table class="table">
            <thead>
                <tr>
                    <!-- Por alguma razao as paginas Adm nao estao puxando codigo CSS entao inclui style individual em cada imagem -->
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Acoes</th>

                </tr>
            </thead>
            <tbody id="myTable">
                <tr>
                    <td scope="row">Fulano</td>
                    <td scope="row">Da Silva</td>
                    <td scope="row">fulano@gmail.com</td>
                    <td scope="row">Maquina quebrada</td>
                    <td>
                    <a href="#" data-toggle="modal" data-target="#modalAbrir">
                            <i class="fas fa-envelope"></i>
                        </a>    
                    <a href="#" data-toggle="modal" data-target="#modalExcluir">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
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
                        <h5 class="modal-title">Mensagem</h5>
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
                <label for="inputEmail">Email</label>
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
                    <button type="submit" class="btn btn-dark float-right ml-2" data-toggle="modal" data-target="#modalTeste">Enviar</button>
                    <button type="reset" class="btn btn-secondary float-right">Limpar</button>
                </div>
                    </form>
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