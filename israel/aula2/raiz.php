<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Raiz</title>
</head>
<body>

    <h1>Resultado</h1>

    <?php

    $valor = $_GET["valor"]; //'$valor' é uma variável, '$_GET' é o method do form e "valor" é a name de um input
     echo "O valor Digitado é $valor."; 

     $rq = sqrt($valor); //sqrt é uma função matemática, a função de raíz quadrada
     echo "<p> A raíz de $valor é igual a $rq </p>";
    ?>

    <p><a href="raiz.html">Voltar</a></p>

    
</body>
</html>