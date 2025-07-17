<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_par">encontre seu numero na Sequencia de Fibonacci:</label>
        <input type="number" id="numero_par" name="numero_par" required>
        <button type="submit" name="verificar_imparPar">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $value = $_POST['numero_par'];


        if (isset($_POST['verificar_imparPar'])) {
            $ultimo = 1;
            $penultimo = 0;
            echo '0 <br>';
            echo '1 <br>';
            for ($i = 1; $i <= $value - 2; $i++) {
                $atual = $ultimo + $penultimo;
                echo $atual . '<br>';

                $penultimo = $ultimo;
                $ultimo = $atual;
            }
        }
    }








    ?>
</body>

</html>