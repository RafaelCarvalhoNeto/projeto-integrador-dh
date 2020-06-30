<?php $tituloDaPagina = "Usuários" ?>
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
        <h2 class="col-12 p-3 mt-3 mb-3 border-bottom">Tabela de Usuários</h1>
        <div class="col-12 mt-3 mb-3">
            <p>Pesquise por uma Usuário:</p>
            <input class="form-control" id="myInput" type="text" placeholder="Pesquisar...">
            <div class="tableAdm">
                <table class="table table-striped text-center mt-3 tableAdm">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col"> CPF</th>
                        <th scope="col">Email</th>
                        <th scope="col">Senha</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">UF</th>
                        <th scope="col" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td scope="row">Antonio</td>
                            <td scope="row">Pereira</td>
                            <td scope="row">00000000-000</td>
                            <td scope="row">antonio@gmail.com</td>
                            <td scope="row">afdasfasfadfasdfsadf</td>
                            <td scope="row">05555-555</td>
                            <td scope="row">Osasco</td>
                            <td scope="row">SP</td>
                            <td scope="row">
                                <a href="#">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td scope="row">
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

</main>

<?php require_once("./inc/footer.php"); ?>