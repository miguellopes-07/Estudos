<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de idade</title>
</head>
<body>
    <h1>Quer ver eu descobrir sua idade?</h1>
    <p>Apenas me diga o ano em que nasceu.</p>
    <form action="idade.php" method="get">
        <label for="ano">Ano em que você nasceu:</label>
        <input type="text" name="ano" id="idano">
    </form>
    <main>
        <?php 
        const ANOATUAL = 2025;
         $data_nascimento = $_GET["ano"];
         $idade = ANOATUAL - $data_nascimento;
        print "Quem nasceu em <strong>$data_nascimento</strong> tem/terá aproximadamente <strong>$idade anos</strong>.";
        ?>
    </main>
</body>
</html>