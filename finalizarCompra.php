<?php $tituloDaPagina = "Finalizar Compra" ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<section class="container my-3">
            <form action="pagamento-confirmado.html" method="post" class="row">
                <article class="col-12 col-md-7" id="formularioPagamento">
                    <div class="sticky-top">
                        <h4>Finalizar compras</h4>
                        <p class="ml-0">Preencha o formulário formulário com os dados do endereço de cobrança</p>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nomeCobranca">Nome</label>
                                <input type="text" class="form-control" name="nomeCobranca" id="nomeCobranca" placeholder="Seu nome" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sobrenomeCobranca">Sobrenome</label>
                                <input type="text" class="form-control" name="sobrenomeCobranca" id="sobrenomeCobranca" placeholder="Seu sobrenome" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="emailCobranca">email de Cobrança</label>
                                <input type="email" class="form-control" name="emailCobranca" id="emailCobranca" placeholder="exemplo@seuemail.com" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cpfCobranca">CPF</label>
                                <input type="number" class="form-control" name="cpfCobranca" id="cpfCobranca" placeholder="12345678900" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="cepCobranca">CEP</label>
                                <input type="text" class="form-control" name="cepCobranca" id="cepCobranca" placeholder="01234-567" required="">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="cidadeCobranca">Cidade</label>
                                <input type="text" class="form-control" name="cidadeCobranca" id="cidadeCobranca" placeholder="São Paulo" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="ufCobranca">UF</label>
                                <select class="form-control" name="uf" id="uf">
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
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="logradouroCobranca">Endereço</label>
                                <input type="text" class="form-control" name="logradouroCobranca" id="logradouroCobranca" placeholder="Av. Brasil" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="numeroCobranca">Número</label>
                                <input type="text" class="form-control" name="numeroCobranca" id="numeroCobranca" placeholder="123-A" required="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="complementoCobranca">Complemento</label>
                                <input type="text" class="form-control" name="complementoCobranca" id="complementoCobranca" placeholder="Apto. 420" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="observacaoPedido">Nota do Cliente</label>
                            <textarea class="form-control" name="observacaoPedido" id="observacaoPedido" rows="3" aria-describedby="#observacaoPedidoHelp"></textarea>
                            <small id="observacaoPedidoHelp" class="form-text text-muted">Se houver alguma observação sobre a compra, inclua nesse campo (ex.: deixar na portaria).</small>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="enderecoEntregaIgualDeCobranca" id="enderecoEntregaIgualDeCobranca" checked="">
                                <label class="form-check-label" for="enderecoEntregaIgualDeCobranca" data-toggle="collapse" href="#enderecoEntrega" role="button" aria-expanded="false" aria-controls="enderecoEntrega">O endereço de entrega é o mesmo que o de cobrança</label>
                            </div>
                        </div>
                        <div id="enderecoEntrega" class="collapse">
                            <h4>Endereço de Entrega</h4>
                            <p class="ml-0">Preencha o formulário formulário com os dados do endeço de entrega</p>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nomeDestinatario">Nome do Destinatário</label>
                                    <input type="text" class="form-control" name="nomeDestinatario" id="nomeDestinatario" placeholder="Nome de quem vai receber" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="emailDestinatario">email do Destinatário</label>
                                    <input type="email" class="form-control" name="emailDestinatario" id="emailDestinatario" placeholder="email@destinatario.com" required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="cepDestinatario">CEP</label>
                                    <input type="text" class="form-control" name="cepDestinatario" id="cepDestinatario" placeholder="01234-567" required="">
                                </div>
                                <div class="form-group col-md-7">
                                    <label for="cidadeDestinatario">Cidade</label>
                                    <input type="text" class="form-control" name="cidadeDestinatario" id="cidadeDestinatario" placeholder="São Paulo" required="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="ufDestinatario">UF</label>
                                    <select class="form-control" name="uf" id="uf">
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
                            <div class="form-row">
                                <div class="form-group col-md-7">
                                    <label for="logradouroDestinatario">Endereço</label>
                                    <input type="text" class="form-control" name="logradouroDestinatario" id="logradouroDestinatario" placeholder="Av. Brasil" required="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="numeroDestinatario">Número</label>
                                    <input type="text" class="form-control" name="numeroDestinatario" id="numeroDestinatario" placeholder="123-A" required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="complementoDestinatario">Complemento</label>
                                    <input type="text" class="form-control" name="complementoDestinatario" id="complementoDestinatario" placeholder="Apto. 420" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="observacaoEntrega">Nota de Entrega</label>
                                <textarea class="form-control" name="observacaoEntrega" id="observacaoEntrega" rows="3" aria-describedby="#observacaoEntregaHelp"></textarea>
                                <small id="observacaoEntregaHelp" class="form-text text-muted">Se houver alguma observação, inclua nesse campo (ex.: deixar na portaria).</small>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="dados-pedido col-12 col-md-5" id="dadosPedido">
                    <div class="sticky-top">
                        <h4>Dados do Pedido</h4>
                        <p class="ml-0">Confirmação do Pedido</p>
                        <ul>
                            <li class="mb-1">
                                <p class="mb-0"><span class="checkout-qtd">1</span> Produto 04 | M | <span class="checkout-price">R$ 99.99</span></p>
                                <small class="text-muted mt-0">SKU: 123-EFIUAB-98</small>
                            </li>
                            <li class="mb-1">
                                <p class="mb-0"><span class="checkout-qtd">2</span> Produto 07 | GG | <span class="checkout-price">R$ 199.98</span></p>
                                <small class="text-muted mt-0">SKU: 103-EF45EF-98</small>
                            </li>
                            <li class="mb-1">
                                <p class="mb-0"><span class="checkout-qtd">1</span> Produto 08 | PP | <span class="checkout-price">R$ 99.99</span></p>
                                <small class="text-muted mt-0">SKU: 003-RWIUAB-66</small>
                            </li>
                            <hr class="text-muted">
                            <li class="mb-1">
                                <p class="mb-0">Subtotal <span class="checkout-subtotal-price text-muted font-weight-bold">R$ 399.96</span></p>
                            </li>
                            <li class="mb-1">
                                <p class="mb-0">Cupom de desconto <span class="checkout-cupom text-info font-weight-bold">- R$ 100.00</span></p>
                            </li>
                            <li class="mb-1">
                                <p class="mb-0">Frete <span class="checkout-frete-price text-muted font-weight-bold">R$ 50.00</span></p>
                                <small class="text-muted mt-0">Prazo de Entrega: até 5 dias úteis</small>
                            </li>
                            <hr class="bg-info">
                            <li class="mb-1">
                                <p class="mb-0"><b>Total <span class="checkout-total-price">R$ 349.96</span></b></p>
                            </li>
                        </ul>
                        <h4 class="mt-5">Dados de Pagamento</h4>
                        <p class="ml-0">Preencha os dados de pagamento a seguir</p>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="nomeTitular">Nome do Titular do Cartão <i class="fa fa-credit-card"></i></label>
                                <input type="text" class="form-control" name="nomeTitular" id="nomeTitular" placeholder="Nome Completo" aria-describedby="#nomeTitularHelp" required="">
                                <small id="nomeTitularHelp" class="form-text text-muted">Digite o nome exatamente como está no cartão</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="numeroCartao">Número do Cartão</label>
                                <input type="text" class="form-control" name="numeroCartao" id="numeroCartao" placeholder="1234 5678 9012 3456" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="cvcCartao">Cód.</label>
                                <input type="number" class="form-control" name="cvcCartao" id="cvcCartao" placeholder="123" required="">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="vencimentoCartao">Vencimento</label>
                                <input type="month" class="form-control" name="vencimentoCartao" id="vencimentoCartao" placeholder="123" required="">
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="btn btn-info float-right">Confirmar Pagamento <i class="fad fa-laugh-wink"></i></button>
                        </div>
                    </div>
                </article>
            </form>
        </section>

        
<script>
// Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
    var forms = document.getElementsByClassName('needs-validation');
    // Faz um loop neles e evita o envio
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<?php require_once("./inc/footer.php"); ?>