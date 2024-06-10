<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="img">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    
    <header>
        <h1>Calculadora de média</h1>
        <input type="checkbox" name="#" id="toggle" class="toggle-btn">
        <label for="toggle" class="toggle-label"></label>
    </header>

    <main>

    <form method="post" action="">
        <label for="num_termos" id="titulo">Quantos termos você quer calcular?</label>
        <input type="number" name="num_termos" id="num_termos" min="1">
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num_termos = $_POST['num_termos'];
            for ($i = 1; $i <= $num_termos; $i++) { //essa linha vai por a quantidade de termos que o usúario pedir.
                echo '<label id="ativo" for="termo' . $i . '">Termo ' . $i . ':</label>';
                echo '<input type="number" name="termo[]" id="termo' . $i . '" required>'; //essa name é uma array
            }
        }
        ?>

        <input type="submit" value="Confirma" id="mg">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['termo'])) { //  isset() é uma função em PHP que verifica se uma variável foi definida e se não é nula. Ela retorna true se a variável existe e tem um valor diferente de null, caso contrário retorna false. Nessa situação ele vê se o array 'termo' foi entregue com valores (nesse caso, envia true, ativando a função if, do contrário, retorna false, ativando a função else)
            $termos = $_POST['termo'];
            $num_termos = count($termos); // A função count() em PHP é usada para contar o número de elementos em uma array ou o número de propriedades em um objeto. Por exemplo, você pode usá-la para contar o número de elementos em um array (esse é o caso da situação) ou o número de caracteres em uma string. 
            
            $soma = 0;
            foreach ($termos as $termo) {
                $soma += $termo;
            }// Essas linhas são responsáveis por calcular a soma de todos os termos inseridos pelo usuário. Aqui está uma explicação detalhada: $soma = 0;: Inicializa a variável $soma com o valor zero. Esta variável será usada para armazenar a soma de todos os termos inseridos pelo usuário. foreach ($termos as $termo) { ... }: Este é um loop foreach que percorre cada elemento do array $termos. O array $termos contém os valores dos termos inseridos pelo usuário. $soma += $termo;: Dentro do loop, cada valor de termo é adicionado à variável $soma. Isso acumula a soma de todos os valores dos termos inseridos pelo usuário. Ao final deste loop, a variável $soma conterá a soma total de todos os termos inseridos pelo usuário. Essa soma é então usada para calcular a média dos termos.
            
            $media = $soma / $num_termos;
            
            echo '<h3>A média é: ' . $media . '</h3>';
        } else {
            echo '<h3>Por favor, preencha todos os termos.</h3>';
        }
    }
    ?>



    </main>

    <footer>
        <p><i><b>&copy; Delson Pilar e Israel Nunes</b></i></p>
    </footer>

    <script src="main.js"></script>

     <!-- <a href="https://www.flaticon.com/br/icones-gratis/regua" title="régua ícones">Régua ícones criados por Creaticca Creative Agency - Flaticon</a> -->
</body>
</html>