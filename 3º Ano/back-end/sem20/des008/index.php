<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge Gear eighth </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $numero = $_GET['num'] ?? 1;

    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero ?>">
            <input type="submit" value="Enraizar">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $rq = $numero ** (1/2);
            $rc = $numero ** (1/3);
            echo "Analisando o número $numero, temos:";
            echo "<ul><li>A sua raiz quadrada é ".number_format($rq, 2 , ",", ".")."</li>";
            echo "<li>A sua raiz cubica é".number_format($rc, 2 , ",", ".")."</li></ul>";
        ?>
    </section>
    
</body>
</html>