<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero_informa">Calcular o fatorial de um número:</label>
        <input type="number" id="numero_fatorial" name="numero_fatorial" required>
        <button type="submit" name="informar_fatorial">Iniciar</button>
   </form>

   <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['informar_fatorial'])) {
            $numero = $_POST['numero_fatorial'];

                $fatorial = 1;

                for($i = 1; $i<= $numero; $i++){
                    $fatorial = $fatorial * $i;
                }
 
        echo "O fatorial de $numero é $fatorial";
        }
    }
    ?>
 
</body>
</html>