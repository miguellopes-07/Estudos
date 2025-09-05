<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Teorema de Pitágoras</title>
</head>
<body>
    <h1>Vamos achar essa Hipotenusa?</h1>
    <p>Informe o valor dos catetos para que eu resolva para você</p>
    <form action="index.php" method="get">
        <label for="catetoA">Insira o cateto A</label>
        <input type="number" name="catetoA" id="idcatetoA"> <br>
        <label for="catetoB">Insira o cateto B</label>
        <input type="number" name="catetoB" id="idcatetoB"> <br>
        <input type="submit" value="Enviar catetos">
    </form> <br>
    <?php 
    $catetoA = $_GET["catetoA"];
    $cacatetoB = $_GET["catetoB"];
    $hipotenusa = sqrt( pow($catetoA, 2) + pow($cacatetoB, 2));
    print "--- Calculadora de Pitágoras --- <br>Cateto A: $catetoA <br>Cateto B: $cacatetoB <br>----------------------------- <br> A hipotenusa é: $hipotenusa";
    ?>
    
</body>
</html>