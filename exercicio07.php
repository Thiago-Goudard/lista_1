<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 7</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Verificarei se o numero é perfeito</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>

   <?php
   if (isset($_POST['verificar'])) {
       $numero = $_POST['numero'];
       $soma = 0;

       for ($i = 1; $i < $numero; $i++) {
           if ($numero % $i == 0) {
               $soma += $i;
           }
       }

       if ($soma == $numero) {
           echo "<p>O número $numero é perfeito.</p>";
       } else {
           echo "<p>O número $numero não é perfeito.</p>";
       }
   }
   ?>

</body>
</body>
</html>