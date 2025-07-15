<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">me de 2 numeros e irei exibir a soma de todos os números entre eles:</label>
        <input type="number" id="numero1" name="numero1" required>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name="contar">Somar</button>
    </form>

    <?php
    if (isset($_POST['contar'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        $soma = 0;
        for ($i = $numero1; $i <= $numero2; $i++) {
            $soma += $i;
        }

        echo "<p>A soma dos números entre $numero1 e $numero2 é $soma.</p>";
    }
    ?>
</body>
</html>