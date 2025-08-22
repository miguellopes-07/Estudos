<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Produto</title>
</head>
<body>
    <?php 
    const NOME_EMPRESA = 'InfoTech 3º Ano';
    $nomeProduto = 'Processador i9';
    $quantidadeEstoque = 15;
    $precoUnitario = 2750.99;
    $emPromocao = false;
    echo "*** Relatório de Inventário da " . NOME_EMPRESA . " 3º Ano ***";
    echo "Produto: $nomeProduto";
    echo "Quantidade em Estoque: " . $quantidadeEstoque . " unidades";
    echo " Preço por Unidade: R$ $precoUnitario";  
    echo "--- Status da Promoção ---";
    var_dump($emPromocao);
    ?>
</body>
</html>