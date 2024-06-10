<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de Texto</title>
</head>
<body>
    
    <h1>Funções de Texto</h1>

    <?php
        $texto = "Instituto-da-Oportunidade-Social";
        $textoc = str_replace("-", " ", $texto);
        $nome = "israel salvalaio nunes ";

        echo $textoc;
        echo "<br> Quantidade de Caracteres: " . strlen($textoc);
        echo "<br> Quantidade de caracteres: " . strlen($nome);
        echo "<br> Quantidade de palavras: " . str_word_count($textoc);
        echo "<br> Texto em maiúsculo: " . strtoupper($nome);
        echo "<br> Texto em minúsculo: " . strtolower($textoc);
        echo "<br> Exemplo: " . ucfirst($nome);
        echo "<br> Exemplo: " . ucwords($nome);
        echo "<br> " . strpos($textoc, "Social");
        echo "<br> Exemplo: " . strrev($nome);
        echo "<br> Exemplo: " . substr($nome, 5);
        echo "<br> Exemplo: " . str_repeat($nome, 10);
        echo "<br> Exemplo: ". substr_count($textoc, "o");

        $curso = "Desenvolvimento-Web";

        echo "<br> Exemplo: " . strtoupper(str_replace("-", " ", $curso));



        $oi = "OI MUNDO";
        $misturado = str_shuffle($oi); //Mistura os caracteres de um texto (só funcionar botar aqui, pelo que eu tentei).
        
        echo "<br><br><br><br> Exemplo: " . lcfirst($oi); //Deixa a primeira letra do texto em minúsculo.
        echo "<br> Exemplo: $misturado" ;   
        echo "<br> Exemplo: " . strpbrk($oi, 'mI'); //Ele pega a variavel e "printa" a partir de quando aparecer algum dos caracteres selecionados (no caso "mI" ele printou a partir do I em OI MUNDO).
        echo "<br> Exemplo: " . str_pad($oi, 20, "kj");//Tu pode fazer com que um texto tenha uma quantidade de caracteres e se faltar espaço, ele prenche com alguma coisa (no caso botei pra preencher com "kj").
        echo "<br> Exemplo: " ;

    ?>

</body>
</html>