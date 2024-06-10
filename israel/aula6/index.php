<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>
<body>

    <h1>Operadores Relacionais</h1>

    <form action="" method="get">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nomev" id="nome"><br><br>

        <label for="idade">Idade:</label><br>
        <input type="number" name="idadev" id="idade"><br><br>

        <input type="submit" value="Verificar">
    </form>

    

    <?php
        $nome = $_GET["nomev"];
        $idade = $_GET["idadev"];

        

        echo "<br> <p>Olá $nome. Você tem $idade anos.</p>";

        

    ?>

    <h2>Operador And / && / E</h2>
    
    <?php
        if($idade >= 18 && $idade <=65) {
            echo "<br> <p>O Voto é Obrigatório.</p>";
        } else {
            echo "<br> <p>O Voto <b>NÃO</b> é Obrigatório.</p>";
        }

    ?>

    <h2>Operador Or / || / OU</h2>

    <?php
        if($idade < 18 || $idade > 65) {
            echo "<br> <p>Você não é obrigado a votar.</p>";
        } else{
            echo "<br> <p>Você é obrigado a votar.</p>";
        }
    ?>

    <h2>Operador XOR / OU EXCLUSIVO</h2>

    <?php
        $votou = true;
        $justificou = true;

        if($votou == true xor $justificou == true) {
            echo "<br> <p>Você está regular com a Justiça Eleitoral</p>";
        } else{
            echo "<br> <p>Não é possível votar e justificar na mesma eleição.</p>";
        }
    ?>

    <h2>Operador Ternário</h2>

    <form action="" method="get">
        Nota 1: <input type="number" name="n1" id="">
        Nota 2: <input type="number" name="n2" id="">
        <input type="submit" value="Calcular">
    </form>

    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2) / 2;

        echo "<br> <p>A média entre $nota1 e $nota2 é $media.</p>";

        echo "<br> <p>Situação do Aluno: " . (($media >= 7) ? "Aprovado" : "Reprovado");
    ?>


 </body>
</html>