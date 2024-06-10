<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos	</title>
</head>
<body>
    
    <h1>Operadores e Funções</h1>

    <?php
        $n1 = 7.8;
        $n2 = 3;

        echo "A soma de $n1 e $n2 é: " . ($n1+$n2);
        echo "<br> A subtração entre $n1 e $n2 é: " . ($n1-$n2);
        echo "<br> A multiplicação entre $n1 e $n2 é: " . ($n1*$n2);
        echo "<br> A divisão  entre $n1 e $n2 é: " . round(($n1/$n2),2);
        echo "<br> O resto entre $n1 e $n2 é: " . ($n1%$n2);
        
        $n3 = -7;

        echo "<br> O valor absoluto de $n3 é: " . abs($n3);

        echo "<br> $n1<sup>$n2</sup> = " . pow($n1,$n2);

        echo "<br> A raiz de $n1 é: " . round(sqrt($n1), 2);

        echo "<br> Função Ceil: " . ceil($n1);
        echo "<br> Função Floor: " . floor($n1);

        echo "<br> O valor inteiro de $n1 é: ". intval($n1);
        echo "<br> R$ " . number_format($n1, 2, ",", ".");

        echo "<br> Conta bizarra: " . ($n1*$n2+$n1-$n2/$n1+($n1%$n2)+pow($n2,$n1));
    ?>

</body>
</html>