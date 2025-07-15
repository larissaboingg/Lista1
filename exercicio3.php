<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa número</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero_informa">Informar se um número é positivo, negativo ou zero:</label>
        <input type="number" id="numero_informa" name="numero_informa" required>
        <button type="submit" name="informar_numero">Iniciar</button>
   </form>

   <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['informar_numero'])) {
            $numero = $_POST['numero_informa'];

                if($numero == 0){
                    echo("O número é zero");
                } elseif($numero > 0){
                    echo("O número é positivo");
                } else {
                    echo("O número é negativo");
                }

        }
    }
    ?>
 
</body>
</html>