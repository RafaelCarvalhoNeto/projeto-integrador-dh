<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<h1 class="container col-12 mt-5" id="admUsuarios">Tabela de Usuários</h1>
<div class="container col-12">
    <table class="table mt-5">
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
    <?php require_once("./inc/footer.php"); ?>