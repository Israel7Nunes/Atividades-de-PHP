<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <?php
        $texto = $_GET["texto"];
        $tamanho = $_GET["tamanho"];
        $cor = $_GET["cor"];  
        $fonte = $_GET["fonte"];
        $bgcor = $_GET["bgcor"]; 
    ?>

    <style>
        body{
            background-color: <?php echo $bgcor; ?>;
        }

        span.texto{
            font-size: <?php echo $tamanho; ?>; /* ele tá chamando a varíavel do php pro css */
            color: <?php echo $cor; ?>;
            font-family: <?php echo $fonte; ?>;
        }
    </style>

</head>
<body>

    <h1>Resultado</h1>

    <?php
        echo "<span class='texto'> $texto </span>";


    ?>
    <br>

    <a href="cores.html">Voltar</a>
    
</body>
</html>