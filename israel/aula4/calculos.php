<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imgs/calculadora.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos Úteis</title>

    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
    ?>
</head>
<body>

    <header>
        <h1>Cálculos Úteis</h1>
    </header>
    
    <?php
        echo "A soma de $n1 e $n2 é: " . ($n1+$n2);

        echo "<br> A subtração entre $n1 e $n2 é: " . ($n1-$n2);

        echo "<br> A multiplicação entre $n1 e $n2 é: " . ($n1*$n2);

        echo "<br> A divisão  entre $n1 e $n2 é: " . round(($n1/$n2),3);

        echo "<br> O módulo de $n1 e $n2 é: " . ($n1%$n2);

        echo "<br> $n1<sup>$n2</sup> = " . pow($n1,$n2);

    ?>
    <br>

    <a href="index.html">Voltar</a>

    <footer>
        <p>Site Feito Por Israel Salvalaio Nunes | &copy; Copyright 2024</p>
        
        <a href="https://www.flaticon.com/br/icones-gratis/calculadora" title="calculadora ícones">Calculadora ícones criados por Freepik - Flaticon</a>
    </footer>
    
</body>
</html>