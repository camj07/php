<!DOCTYPE html>
<html>
<head>
    <title>Transformador de Nombres de Autores</title>
</head>
<body>
    <h2>Transformar Variación Larga a Corta</h2>
    <form method="post" action="">
        <label for="nombre_largo">Ingrese el nombre largo del autor:</label><br>
        <input type="text" id="nombre_largo" name="nombre_largo" required pattern="[A-Z][a-z]*(-[A-Z][a-z]*)*"><br><br>
        <input type="submit" value="Transformar">
    </form>

    <?php
    function transformarNombre($nombre_largo) {
        $parts = explode('-', $nombre_largo);
        $shortName = '';
        foreach ($parts as $part) {
            $shortName .= $part[0];
        }
        return $shortName;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_largo = $_POST['nombre_largo'];
        $shortName = transformarNombre($nombre_largo);
        echo "<p>Variación corta: $shortName</p>";
    }
    ?>
</body>
</html>

<li class="reg"><a href="menu.php">regresar a los problemas</a></li>

