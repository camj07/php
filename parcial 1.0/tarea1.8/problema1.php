<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bit de paridad</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1 class="problem">Problema omegaup</h1>
<h2>Bit de paridad</h2>

<h3>Descripción</h3>
Un bit de paridad es un dígito binario que indica si el número de bits con un valor de 1 en un conjunto de bits es par o impar. Los bits de paridad conforman el método de detección de errores más simple. Existen dos variantes de este método:

Bit de paridad par
Bit de paridad impar.
En el caso de la paridad par, se cuentan el número de unos. Si el total es impar, el bit de paridad se establece en uno y por tanto la suma del total anterior con este bit de paridad, daría par. Si el conteo de bits uno es par, entonces el bit de paridad se deja en 0, pues ya es par.

Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.

<h3>Entrada</h3>
La entrada consiste de una sola línea con una secuencia de siete bits 0 o 1.

<h3>Salida</h3>
La salida es la misma secuencia de siete bits de la entrada más el bit de paridad par. Dicho bit de paridad se agrega al lado derecho.

<h3>Ejemplo</h3>

<table  class="tab" border="2">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Descripción</th>
        </tr>
        <tr>
            <td>1010001</td>
            <td>10100011</td>
            <td>El número de bits con valor de 1 en la entrada es 3. La salida son los mismos siete bits de la entrada y se añade un bit 1 para que en total el número de bits con valor 1 sea par.</td>
        </tr>
        <tr>
            <td>1101001</td>
            <td>11010010</td>
            <td>El número de bits con valor de 1 en la entrada es 4. La salida son los mismos siete bits de la entrada y se añade un bit 0 para que en total el número de bits con valor 1 se mantenga par.</td>
        </tr>
        <tr>
            <td>0000000</td>
            <td>00000000</td>
            <td>El número de bits con valor de 1 en la entrada es 0. La salida son los mismos siete bits de la entrada y se añade un bit 0 para que en total el número de bits con valor 1 se mantenga par (cero es un número par).</td>
        </tr>
        <tr>
            <td>111111</td>
            <td>1111111</td>
            <td>El número de bits con valor de 1 en la entrada es 7. La salida son los mismos siete bits de la entrada y se añade un bit 1 para que en total el número de bits con valor 1 sea par.</td>
        </tr>
    </table>


</table> <br>


<li class="from1"><a href="formulario1.php">Formulario 1</a></li>
<li class="reg"><a href="menu.php">regresar a los problemas</a></li>
<li class="reg"><a href="tarea1.8.php">regresar al menu principal</a></li>

</body>
</html>