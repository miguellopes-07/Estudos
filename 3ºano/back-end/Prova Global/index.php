<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC-Pronto</title>
    <link rel="stylesheet" href="carrinho.css">
</head>

<body>
    <header>
        <h1>PC pronto</h1>
        <ul class="lista">
            <li class="linkzin"><a href="">Loja</a></li>
            <li class="linkzin"><a class="carrinho" href="">Carrinho</a></li>
            <li class="linkzin"><a href="">Sobre</a></li>
        </ul>
    </header>

    <?php
    $produto = $_REQUEST['preco'] ?? '0';
    $quantia = $_REQUEST['quantia'] ?? '1';
    $cep = $_REQUEST['cep'] ?? '35188000';

    //Cotação de dollar
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cotacao = $dados["value"][0]["cotacaoCompra"];
    ?>

    <main>
        <h1>Carrinho &#x1F6D2</h1>
        <p>Vamos calcular o valor do produto</p>
        <p>Informe os dados necessarios:</p>
        <div>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <fieldset>
                    <legend>Produto</legend>
                    <label for="preco">Qual o valor do produto desejado?</label>
                    <br>
                    <br>
                    <input type="number" name="preco" id="preco" min="0.01" step="0.01" required value="<?= $produto ?>">
                    <br>
                    <br>
                    <label for="quantia">Quantos desse produto você deseja?</label>
                    <br>
                    <br>
                    <input type="number" name="quantia" id="quantia" min="1" value="<?= $quantia ?>">
                    <br>
            
                </fieldset>
                <fieldset>
                    <legend>Entrega</legend>
                    <label for="cep">CEP</label>
                    <br>
                    <br>
                    <input type="number" name="cep" id="cep" minlength="8" maxlength="8" required placeholder="35188000" value="<?= $cep ?>">
                </fieldset>
                <input class="calcular" type="submit" value="Calcular">
            </form>
        </div>

    </main>

    <?php

    //Valor pela quantia
    $subtotal = $produto * $quantia;

    //valor sobre o imposto
    $imposto = ($subtotal * 12.5) / 100;
    $total_final = $subtotal + $imposto;

    //valor + frete
    $min = 30;
    $max = 150;
    $frete = mt_rand($min, $max);
    $valor_com_frete = $total_final + $frete;

    //valor em dollar
    $preco_dolar = $valor_com_frete / $cotacao;

    //entrega
    $sobra = $cep / 1000000;
    //mes
    $mes = (int)($sobra / 30);
    $sobra = $sobra % 30;
    // semana
    $semana = (int)($sobra / 7);
    $sobra = $sobra % 7;
    // Dias
    $dia = $sobra;

    ?>

    <section>
        <h2>Orçamento PC-pronto</h2>
        <p>
        <ul>
            <li>Produto: <strong>R$<?= number_format($produto, 2, ",", ".") ?> (x<?= $quantia ?>)</strong></li>
            <li>Subtotal: <strong>R$<?= number_format($subtotal, 2, ",", ".") ?></strong></li>
            <li>Imposto (12,5%): R$<?= number_format($imposto, 2, ",", ".") ?></li>
            <li>Total Final: R$<?= number_format($total_final, 2, ",", ".") ?></li>
            <li>Frete: R$<?= number_format($frete, 2, ",", ".") ?></li>
            <li>Valor Total com Frete: R$<?= number_format($valor_com_frete, 2, ",", ".") ?></li>
            <li>Cotação do Dólar Hoje: R$<?= number_format($cotacao, 2, ",", ".") ?></li>
            <li>Total em Dólares: US$<?= number_format($preco_dolar, 2, ".", ",") ?></li>
        </ul>
        </p>
        <h2>Entrega</h2>
        <ul>
            <li><?= $mes?> Meses</li>
            <li><?= $semana?> Semanas</li>
            <li><?= $dia?> Dias</li>
        </ul>

    </section>
    <hr>

    <footer>
        <p><small>Miguel - PC Pronto | &copy; 2025</small></p>
    </footer>
    

</body>

</html>