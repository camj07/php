<!DOCTYPE html>
<html>
<head>
    <title>Bit de Paridad</title>
</head>
<body>
    <h2>Añadir Bit de Paridad Par</h2>
    <form method="post" action="">
        <label for="bits">Ingrese la secuencia de 7 bits:</label><br>
        <input type="text" id="bits" name="bits" maxlength="7" required pattern="[01]{7}"><br><br>
        <input type="submit" value="Calcular Bit de Paridad">
    </form>

    <?php
    function calcularParidad($bits) {
        $countOnes = substr_count($bits, '1');
        if ($countOnes % 2 == 0) {
            return $bits . '0';
        } else {
            return $bits . '1';
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bits = $_POST['bits'];
        if (strlen($bits) == 7) {
            $paridad = calcularParidad($bits);
            echo "<p>Secuencia de bits con paridad añadida: $paridad</p>";
        } else {
            echo "<p style='color: red;'>Ingrese una secuencia válida de 7 bits.</p>";
        }
    }
    ?>
</body>
</html>

<li class="reg"><a href="menu.php">regresar a los problemas</a></li>


