<?php $tituloDaPagina = "Usuários" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>


<section class="jumbotron jumbotron-fluid py-2">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex text-center">
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

            <table class="table table-striped text-center mt-3">
                <thead class="thead-dark">
                    <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>CEP</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaDeUsuarios as $usuario): ?>
                    <tr>
                        <th scope="row"><?php for ($i=0; $i < $usuario ; $i++) { 
                            echo $i + 1;
                        } ?></th>
                            <td><?= $usuario["nome"]; ?></td>
                            <td><?= $usuario["sobrenome"]; ?></td>
                            <td><?= $usuario["cpf"]; ?></td>
                            <td><?= $usuario["email"]; ?></td>
                            <td><?= $usuario["senha"]; ?></td>
                            <td><?= $usuario["cep"]; ?></td>
                            <td><?= $usuario["cidade"]; ?></td>
                            <td><?= $usuario["uf"]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>

</main>

<?php require_once("./inc/footer.php"); ?>