<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Adivinhação</title>
</head>
<body>

    <header>
        <h1>Jogo de Adivinhação</h1>
    </header>

    <div class="container">
        <form action="" method="post">
            <label for="numero">Escreva um número entre 1 e 10</label>
            <div class="miniContainer">
                <input type="number" name="numero" id="numero" min="1" max="10" required>

                <input type="submit" value="Jogar" id="jogar">
            </div>
        </form> 

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $numeroPc = rand(1, 10);
                $numeroJogador = $_POST["numero"];
                
                if($numeroPc == $numeroJogador) /*tem q ser 2 sinais de igual*/{
                    echo "<h2> Você acertou! O número é: $numeroPc. </h2>";
                }else{
                    echo "<h2> Você errou! O número é: $numeroPc.</h2>";
                }
            }
        ?>
    </div>


    <a href="index.php">Zerar a página</a>
</body>
</html>