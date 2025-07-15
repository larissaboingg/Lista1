<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa Par ou Impar</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero_par_impar">Verifica se é um número é par ou ímpar:</label>
        <input type="number" id="numero_par_impar" name="numero_par_impar" required>
        <button type="submit" name="verificar_par_impar">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_par_impar'])){
        $numero = $_POST['numero_par_impar'];
        if($numero % 2 == 0){
           echo "O número $numero é par"; 
        }else {
            echo "O número $numero é ímpar.";
                 }
          }
      }
   ?>
 
</body>
</html>