<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conhecendo você</title>
</head>
<body>
    <h1>Quem é você?</h1>
    <p>Me fale mais sobre você, podemos começar pelo seu nome, Que tal?</p>
    <main>
        <?php 
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        echo "Olá<strong> $nome $sobrenome</strong>, seja muito bem-vindo ao meu site, espero que goste!";
        ?>
    </main>
</body>
</html>