<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
     <form method="POST" action="">
        <label for="numero">Verifica se é um número positivo, negativo ou zero :</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar'])){
        $numero = $_POST['numero'];
        
        if($numero > 0){
            echo 'é um número positivo';
        }else if($numero < 0){
            echo 'é um número negativo';
        }else{
            echo 'é zero';
        };
    };

   };

   ?>
    
</body>
</html>