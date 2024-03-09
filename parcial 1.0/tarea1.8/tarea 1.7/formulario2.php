<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de f(x, y, z)</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <h1>Calculadora de f(x, y, z)</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="x">Valor de x:</label><br>
        <input type="number" step="any" id="x" name="x" required><br><br>
        
        <label for="y">Valor de y:</label><br>
        <input type="number" step="any" id="y" name="y" required><br><br>
        
        <label for="z">Valor de z:</label><br>
        <input type="number" step="any" id="z" name="z" required><br><br>
        
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
        $y = $_POST["y"];
        $z = $_POST["z"];

        // Calcula la función f(x, y, z)
        $resultado = ($x + $y) / (2 * $x + ($x ** 3 + $y ** 3) / ($x ** 2 + $y ** 2) + $x ** 2 + $y ** 2 + $z ** 2);

        // Redondea a 6 decimales
        $resultado_redondeado = number_format($resultado, 6);

        echo "<br><br>";
        echo "El resultado de f(x, y, z) es: $resultado_redondeado";
    }
    ?>
</body>
</html>
