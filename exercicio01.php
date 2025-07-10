<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 1</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_par_impar">Verifica se é par ou impar:</label>
        <input type="number" id="numero_par_impar" name="numero_par_impar" required>
        <button type="submit" name="verificar_primo">Verificar</button>
   </form>

    <?php 
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $numero = 2;

                if($numero % 2 == 0){
                    echo "$numero é par.";
                }else {
                    echo "$numero é impar";
                };
        }
        
    ?>
    
</body>
</html>