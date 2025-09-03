<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto</title>
</head>
<body>
    <?php 
    $precoProduto = 150.00;
    $percentualDesconto = $precoProduto * 10/100;
    $precoFinal = $precoProduto - $percentualDesconto;
    echo "Preço original: R$ $precoProduto";
    echo "Desconto de 10%: R$ $percentualDesconto";
    echo "Preço Final: R$ $precoFinal";
    ?>
</body>
</html>