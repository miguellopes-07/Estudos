<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge Gear tenth</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $atual = date("Y");
        $nasceu = $_GET['anonasceu'] ?? '2000';
        $futuro = $_GET['ano_quer_saber'] ?? $atual;
        $idade = $futuro - $nasceu;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anonasceu">Em que ano você nasceu?</label>

            <input type="number" name="anonasceu" id="anonasceu" max="<?=$atual?>" min="1900" required value="<?=$nasceu?>">

            <label for="ano_quer_saber">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>

            <input type="number" name="ano_quer_saber" id="ano_quer_saber" min="1900" required value="<?=$futuro?>">

            <input type="submit" value="Qual será minha idade?">

        </form>
        </main>
        <section>
            <h2>Resultado</h2>
            <p>Quem nasceu em <?=$nasceu?> vai ter <strong><?=$idade?> Ano(s)</strong> em <?=$futuro?>!</p>
            
        </section>
    </body>
</html>