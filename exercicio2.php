<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa Par ou Impar</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero_tabuada">Calcula tabuada:</label>
        <input type="number" id="numero_tabuada" name="numero_tabuada" required>
        <button type="submit" name="iniciar_tabuada">Iniciar</button>
   </form>

   <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['iniciar_tabuada'])) {
            $numero = $_POST['numero_tabuada'];

            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<br>$numero x $i = $resultado";
            }

        }
    }
    ?>
 
</body>
</html>