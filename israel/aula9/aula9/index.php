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
        <input type="number" name="num_termos" id="num_termos" min="1" placeholder="banana">
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num_termos = $_POST['num_termos'];
            for ($i = 1; $i <= $num_termos; $i++) {
                echo '<label id="ativo" for="termo' . $i . '">Termo ' . $i . ':</label>';
                echo '<input type="number" name="termo[]" id="termo' . $i . '" required>';
            }
        }
        ?>

        <input type="submit" value="Confirma" id="mg">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['termo'])) {
            $termos = $_POST['termo'];
            $num_termos = count($termos);
            
            $soma = 0;
            foreach ($termos as $termo) {
                $soma += $termo;
            }
            
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

</body>
</html>