<!DOCTYPE html>
<html>
<head>
    <title>Calculos condicionales</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <h2>Calculos condicionales</h2>

    <form method="post">
  Ingrese un valor para N (entre 1 y 1000): <br>
  <input  type="number" name="valor_n" min="1" max="1000" required><br><br>
  <input  type="submit" name="submit" value="Calcular">
</form>

    <?php
if (isset($_POST['submit'])) {
    // Obtener el valor de N del formulario
    $N = $_POST['valor_n'];

    // Función para calcular el valor final de N y el número de modificaciones
    function calcularValorFinal($N) {
        $mod = 0;
        ///echo "<br>N: $N<br>";
            //echo "<br>N %2:". $N % 2 ."<br>";
            if ($N % 2 == 0) {
                $N = $N / 2;
                $mod++;
                //echo "<br>Par: $N<br>";
            } else {
                
                $N = $N + 1;
                $mod++;
                //echo "<br>No Par: $N<br>";
            }

            if ($N > 99) {
                $N = $N / 100;
                $mod++;
                //echo "<br>100: $N<br>";
            } elseif ($N > 9) {
                $N = $N / 10;
                $mod++;
               // echo "<br>10: $N<br>";
            }

            if ($N % 3 == 0) {
                $N = $N - 1;
                $mod++;
                //echo "<br>3mul: $N<br>";
            }

            

        return [$N, $mod++];
    }

    // Calcular el valor final de N y el número de modificaciones
    $resultado = calcularValorFinal($N);
    $valor_final = $resultado[0];
    $num_modificaciones = $resultado[1];

    // Mostrar el resultado
    echo "<br><br>Valor final de N: $valor_final<br>";
    echo "Número de modificaciones: $num_modificaciones";
}
?>


</body>
</html>
