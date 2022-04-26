<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="pagamento.css">
  <meta charset="UTF-8">
  <title>Pagamento</title>
  <link rel="icon" type="image/x-icon" href="">
</head>

<!--
  ESSE AQUI NÃO TÔ USANDO AINDA - PEGUEI TEMPLATE DE UMA TELA DE CARTÃO DE CRÉDITO
  MAS DA PRA TESTAR É SÓ COLOCAR: localhost/hnz/principal/pagamento/pagamento.php
-->

<body>
  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="/action_page.php">

          <div class="row">
            <div class="col-50">
              <h3>Preencha com seus Dados</h3>
              <label for="fname"><i class="fa fa-user"></i> Nome completo</label>
              <input type="text" id="fname" name="firstname" placeholder="Senhor(a)">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="seuEmail@exemplo.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Endereço</label>
              <input type="text" id="adr" name="address" placeholder="R. X Av. 43">
              <label for="city"><i class="fa fa-institution"></i> Cidade</label>
              <input type="text" id="city" name="city" placeholder="Barretos">

              <div class="row">
                <div class="col-50">
                  <label for="state">Estado</label>
                  <input type="text" id="state" name="state" placeholder="SP">
                </div>
                <div class="col-50">
                  <label for="zip">CEP</label>
                  <input type="text" id="zip" name="zip" placeholder="14784-XXX">
                </div>
              </div>
            </div>

            <div class="col-50">
              <h3>Pagamento</h3>
              <label for="fname">Aceitamos</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Nome do proprietário</label>
              <input type="text" id="cname" name="cardname" placeholder="Senhor(a)">
              <label for="ccnum">Número do Cartão de Crédito</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Expira no Mês</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="Setembro">
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Expira no Ano</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2028">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>

          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Salvar dados
          </label>
          <input type="submit" value="Finalizar compra" class="btn">
        </form>
      </div>
    </div>
    <div class="col-25">
      <div class="container">
        <h4>Carrinho <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
        <p><a href="#">Produto 1</a> <span class="price">R$15</span></p>
        <p><a href="#">Produto 2</a> <span class="price">R$5</span></p>
        <p><a href="#">Produto 3</a> <span class="price">R$8</span></p>
        <p><a href="#">Produto 4</a> <span class="price">R$2</span></p>
        <hr>
        <p>Total <span class="price" style="color:black"><b>R$30</b></span></p>
      </div>
    </div>
  </div>
</body>

</html>