<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Amigos</title>
</head>
<body>
    <form method = "POST" action="">
        <label for="numero1">Informe um número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <label for="numero2">Informe outro número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name = "iniciar_numamigos">Iniciar</button>
    </form>

    <?php

    function somarDivisores($n){
        $soma = 0;

        for($i = 1; $i < $n; $i++){
            if ($n % $i == 0){
                $soma += $i;
            };
        };
    return $soma;    
    };

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST ['verificar_amigos'])){

        $a = (int)$_POST['numero1'];
        $b = (int)$_POST['numero2'];


        if(somarDivisores($a) == $b && somarDivisores($b) == $a){
            echo "Os números $a e $b são amigos";
        }else{
            echo "Os números $a e $b não são amigos";
        }

    };

    ?>
</body>
</html>