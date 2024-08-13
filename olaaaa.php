<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="jumbotron">
        <div class="container">
            <h1>Ótima escolha!</h1>
            <p>Obrigado por comprar na Mirror Fashion!
                Preencha seus dados para efetivar a compra.</p>
        </div>
    </div>
    <div class="container">

        <div class="panel	panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Sua compra</h2>
            </div><!--	fim	.panel-heading	-->
            <div class="panel-body">
                <dl>
                    <dt>Cor</dt>
                    <dd><?= $_POST['cor']    ?></dd>
                    <dt>Tamanho</dt>
                    <dd><?= $_POST['tamanho']    ?></dd>
                    <dt>Produto</dt>
                    <dd><?= $_POST['nome']    ?></dd>
                    <dt>Preço</dt>
                    <dd>R$ <?= $_POST['preco']    ?></dd>
                </dl>
            </div><!--	fim	.panel-body	-->
        </div><!--	fim	.panel	-->
    </div>

    <input type="hidden" name="nome" value="Fuzzy	Cardigan">
    <input type="hidden" name="preco" value="129,00">

</body>

</html>