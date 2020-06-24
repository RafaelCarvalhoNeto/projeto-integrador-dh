<?php $tituloDaPagina = "#404" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<aside id="error" class="container jumbotron pt-0 mt-3 ajuste">
    <div class="row">
        <h1 class="col-12 p-3 mt-3 mb-3 border-bottom text-center"><strong>Error 404</strong></h1><br>
        <div class="col-md-8">
            <h5 class="col-md-12">As principais causas podem ser:</h5>
            <div class="col-md-12 ml-4 mt-3">
                <ul class="ml-4">
                    <li>URL incorreta: Ocorre quando o usuário digita um endereço inexistente;</li><br>
                    <li>Página movida: Ocorre quando o editor do site altera a URL da página;</li><br>
                    <li>Página apagada: Ocorre quando o administrador do site exclui uma página.</li><br>
                </ul>
            </div>
            <p>
                Por Favor, verifique se o endereço digitado está correto! Caso o problema persista, entrar em contato com o nosso canal <a href="ecommerce@exemplo.com"><strong>SAC</strong></a>.
            </p>
        </div>
        <div class="col-md-4">
            <img src="./assets/img/404.png" width="250" alt="">
        </div>

        
    </div>
</aside>
<?php require_once("./inc/footer.php"); ?>