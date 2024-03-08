<!DOCTYPE html>
<html>
<head>
    <title>Adquisición de Letras</title>
</head>
<body>
    <h2>Cantidad de Letras Favoritas</h2>
    <form method="post" action="">
        <label for="cadena">Ingrese la cadena de letras:</label><br>
        <input type="text" id="cadena" name="cadena" required pattern="[a-z]+"><br><br>
        <label for="letra_favorita">Ingrese la letra favorita:</label><br>
        <input type="text" id="letra_favorita" name="letra_favorita" required pattern="[a-z]"><br><br>
        <input type="submit" value="Calcular Cantidad">
    </form>

    <?php
    function contarLetraFavorita($cadena, $letra_favorita) {
        $count = 0;
        for ($i = 0; $i < strlen($cadena); $i++) {
            if ($cadena[$i] == $letra_favorita) {
                $count++;
            }
        }
        return $count;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST['cadena'];
        $letra_favorita = $_POST['letra_favorita'];
        $cantidad = contarLetraFavorita($cadena, $letra_favorita);
        echo "<p>Cantidad de veces que aparece la letra favorita: $cantidad</p>";
    }
    ?>
</body>
</html>

   <li class="reg"><a href="tarea1.8.php">regresar al menu principal</a></li>

