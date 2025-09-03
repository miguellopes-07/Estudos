<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tinta</title>
    <link rel="shortcut icon" href="Oxygen-Icons.org-Oxygen-Actions-fill-color.256.png" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;

        }

        body {
            background-image: url(colors_2.webp);

        }

        header {
            text-align: center;
            background-color: white;
            border-radius: 40px;
            margin-right: 430px;
            margin-left: 430px;
            margin-top: 30px;
            margin-bottom: 30px;
            box-shadow: 30px;
            box-shadow: 2px 4px 10px black;
            border: 1px solid black;
        }

        section {
            text-align: center;
            background-color: #6a5acd;
            border-radius: 40px;
            margin-right: 430px;
            margin-left: 430px;
            margin-top: 30px;
            margin-bottom: 30px;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        footer {
            text-align: center;
            background-color: #024A7F;

            padding-bottom: 35px;

        }

        label {
            background-color: white;
            border-radius: 10px;
            padding: 2px;
            color: blue;

        }

        header p {
            font-size: 150%;
        }

        nav {
            text-align: center;
            background-color: #024A7F;
            padding-top: 30px;
            padding-bottom: 30px;

        }

        ol {
            list-style: none;
            margin-right: 430px;
            margin-left: 430px;
            border-radius: 40px;
            background-color: #1E90FF;

        }

        li {

            display: inline;
            margin: 30px;

        }

        a {
            color: white;
            text-decoration: none;
        }

        .calcular {
            background-color: white;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 10px;

        }

        .link {
            color: black;
        }

        main {
            background-color: white;
            text-align: center;
            border-radius: 40px;
            margin-right: 430px;
            margin-left: 430px;
            margin-top: 30px;
            margin-bottom: 30px;
            padding-top: 5px;
            padding-bottom: 5px;
            box-shadow: 30px;
            box-shadow: 2px 4px 10px black;
            border: 1px solid black;
        }

        @media (max-width: 768px) {

            header,
            section,
            main,
            ol {
                width: 95%;
                margin: 15px auto;
                border-radius: 20px;
            }

            header img {
                width: 80%;
            }

            ol {
                flex-direction: column;
                gap: 10px;
            }

            input[type="text"],
            input[type="number"] {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            header p {
                font-size: 1rem;
            }

            section h2 {
                font-size: 1.1rem;
            }

            input[type="submit"] {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <nav>
        <ol>
            <li><a href="atoapqmclicou.html">Coral ajuda</a></li>
            <li class="calcular"><a class="link" href="index.php">Calculadora de Tinta</a></li>
            <li><a href="produtos.html">produtos</a></li>
        </ol>
    </nav>
    <header>
        <img width="400px" src="coral-logo.png" alt="logo">
        <br>
        <br>
        <p><strong>Usando o poder das cores para transformar ambientes &#x1F308</strong></p>
    </header>


    <section>
        <h2>Vamos calcular quantas litros você precisa?</h2>
        <p>Primeiro preencha com as informações necessarias, para calcularmos para você &#x1F60A</p>


        <form action="index.php" method="get">
            <label for="cor">Informe a cor desejada:</label>
            <input type="text" name="cor" id="idcor"> <br>
            <br><label for="altura">Insira a altura da superficie:</label>
            <input type="number" name="altura" id="idaltura"> <br>
            <br> <label for="largura">Insira a largura da superficie:</label>
            <input type="number" name="largura" id="idlargura"> <br>
            <br><input type="submit" value="Enviar valores">
        </form>
    </section>

    <main>
        <?php
        $corphp = $_GET["cor"];
        $alturaphp = $_GET["altura"];
        $larguraphp = $_GET["largura"];
        $area = $larguraphp * $alturaphp;
        $tinta = $area / 2;
        echo "--- Relatório de Pintura --- <br> Para uma parede de $larguraphp de largura e $alturaphp de altura: <br> Área total: $area m<sup>2</sup> <br> Serão necessários $tinta litros de tinta $corphp.";
        ?>
    </main>
    <hr>
    <footer>
        <p><small>&copy; Coral-Miguel | Todos os direitos reservados</small></p>
    </footer>
</body>

</html>