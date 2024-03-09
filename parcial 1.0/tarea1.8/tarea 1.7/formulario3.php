<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Longitud del Lado más Corto de un Cuadrilátero</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <h2>Calculadora de Longitud del Lado más Corto de un Cuadrilátero</h2>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="x1">Coordenada x1:</label>
        <input type="number" id="x1" name="x1" step="any" required><br><br>
        
        <label for="y1">Coordenada y1:</label>
        <input type="number" id="y1" name="y1" step="any" required><br><br>
        
        <label for="x2">Coordenada x2:</label>
        <input type="number" id="x2" name="x2" step="any" required><br><br>
        
        <label for="y2">Coordenada y2:</label>
        <input type="number" id="y2" name="y2" step="any" required><br><br>
        
        <label for="x3">Coordenada x3:</label>
        <input type="number" id="x3" name="x3" step="any" required><br><br>
        
        <label for="y3">Coordenada y3:</label>
        <input type="number" id="y3" name="y3" step="any" required><br><br>
        
        <label for="x4">Coordenada x4:</label>
        <input type="number" id="x4" name="x4" step="any" required><br><br>
        
        <label for="y4">Coordenada y4:</label>
        <input type="number" id="y4" name="y4" step="any" required><br><br>
        
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x1 = $_POST["x1"];
        $y1 = $_POST["y1"];
        $x2 = $_POST["x2"];
        $y2 = $_POST["y2"];
        $x3 = $_POST["x3"];
        $y3 = $_POST["y3"];
        $x4 = $_POST["x4"];
        $y4 = $_POST["y4"];

        $lado1 = distancia($x1, $y1, $x2, $y2);
        $lado2 = distancia($x2, $y2, $x3, $y3);
        $lado3 = distancia($x3, $y3, $x4, $y4);
        $lado4 = distancia($x4, $y4, $x1, $y1);

        $lado_mas_corto = min($lado1, $lado2, $lado3, $lado4);

        echo "<br><br>";
        echo "La longitud del lado más corto del cuadrilátero es: " . $lado_mas_corto;
    }

    function distancia($x1, $y1, $x2, $y2) {
        return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    }
    ?>
</body>
</html>
