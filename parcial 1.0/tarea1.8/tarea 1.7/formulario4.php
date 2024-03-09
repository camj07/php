<!DOCTYPE html>
<html>
<head>
    <title>Escalera de asteriscos</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <h2>Escalera de asteriscos</h2>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="n">Longitud y altura de la escalera:</label><br>
        <input type="number" id="n" name="n" required><br><br>
        
        <input type="submit" value="Crear escalera">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["n"];

        // Iterar para cada nivel de la escalera
        for ($i = 1; $i <= $n; $i++) {
            // Imprimir espacios en blanco (Nivel descendente)
            for ($j = $n - $i; $j > 0; $j--) {
                echo "&nbsp;&nbsp;";
            }

            // Imprimir asteriscos (Nivel ascendente)
            for ($k = 1; $k <= $i; $k++) {
                echo "#";
            }

            // Nueva línea para pasar al siguiente nivel
            echo "<br>";
        }
    }
    ?>
</body>
</html>
