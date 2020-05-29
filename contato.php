<?php $tituloDaPagina = "Contato" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<main class="container">
    <h1 class="p-3">Entre em Contato Conosco!</h1>
    <hr>
    <p>Somos uma empresa que ouve nossos clientes. Nos mande um email! </p>
    <br>
    <form action="" method="post" id="formContato">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" placeholder="Insira seu nome" aria-describedby="nomeCadastroHelp" id="inputNome" name="inputNome" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputSobrenome">Sobrenome</label>
                <input type="text" class="form-control" placeholder="Insira seu sobrenome" aria-describedby="sobrenomeCadastroHelp" id="inputSobrenome" name="inputSobrenome" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" placeholder="Insira seu email" aria-describedby="emailHelp" id="inputEmail" name="inputEmail" required>
            </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">Assunto</label>
                    <input type="text" class="form-control" placeholder="Escreva seu Assunto" aria-describedby="assuntoHelp" id="inputAssunto" name="inputAssunto">
                </div>
        </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputMensagem">Mensagem</label>
                        <textarea class="form-control" placeholder="Escreva seu Assunto" aria-describedby="mensagemHelp" id="inputMensagem" rows="4"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-group col-auto clearfix px-0">
                    <button type="submit" class="btn btn-dark float-right ml-2" data-toggle="modal" data-target="#modalTeste">Enviar</button>
                    <button type="reset" class="btn btn-secondary float-right">Limpar</button>
                </div>
    </form>

</main>

<?php require_once("./inc/footer.php"); ?>