<?php $tituloDaPagina = "Ecommerce.com: Compre os melhores produtos!" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<main class="container px-5">
    <h1 class="p-3">Cadastro</h1>
    <form action="" method="post" id="formCadastro">                          
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

        <div class="form-group">
        <label for="inputEndereco">Endereço</label>
        <input type="text" class="form-control" placeholder="Insira seu endereço" aria-describedby="enderecoHelp" id="inputEndereco" name="inputEndereco" required>
        </div>
        
        <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputCep">CEP</label>
            <input type="text" class="form-control" placeholder="01234-567" name="inputCep" required>
        </div>
        <div class="form-group col-md-7">
            <label for="inputCidade">Cidade</label>
            <input type="text" class="form-control" placeholder="São Paulo" name="inputCidade" required>
        </div>
        <div class="form-group col-md-2">
            <label for="inputUF">UF</label>
            <select class="form-control" name="inputUF" id="inputUF" required>
            <option disabled="" selected="">UF</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AM">AM</option>
            <option value="AP">AP</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MG">MG</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="PR">PR</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="RS">RS</option>
            <option value="SC">SC</option>
            <option value="SE">SE</option>
            <option value="SP">SP</option>
            <option value="TO">TO</option>
            </select>
        </div>
        </div>

        <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" placeholder="Insira seu email" aria-describedby="emailHelp" id="inputEmail" name="inputEmail" required>
        </div>

        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputConfirma">Senha</label>
            <input type="password" name="inputSenha" class="form-control" placeholder="Senha" aria-describedby="senhaHelp" id="inputSenha" required> 
        </div>
        <div class="form-group col-md-6">
            <label for="inputSobrenome">Confirma Senha</label>
            <input type="password" class="form-control" placeholder="Confirma senha" aria-describedby="ConfirmaHelp" id="inputConfirma" name="inputConfirma" required>
        </div>
        </div>

        <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="aceiteCadastro" name="aceita" checked>
        <label class="form-check-label" for="aceiteCadastro">Estou de acordo com os termos, pode vender meus dados!</label>
        </div>

        <div class="form-group col-auto clearfix px-0">
        <button type="submit" class="btn btn-dark float-right ml-2" data-toggle="modal" data-target="#modalTeste">Cadastrar</button>
        <button type="reset" class="btn btn-secondary float-right">Limpar</button>
        </div>
    </form> 



</main>










<?php require_once("./inc/footer.php"); ?>