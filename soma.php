<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Simples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Localização da página -->
    <?php
        $pg_atual = 'resultado';
        include 'navbar.php';
    ?>

    <!-- Container para fazer e mostrar o resultado -->
    <div class='container-fluid my-container-resultado'>
        <h1>Resultado:</h1>

    <?php
        $n1 = $_GET['num1'];
        $n2 = $_GET['num2'];
        function soma($primeiro, $segundo,) { // vírgula permitida em PHP 8
            echo "$primeiro + $segundo = ", $primeiro + $segundo;
        }
        $resultado = soma($n1, $n2);
        echo $resultado;
    ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
