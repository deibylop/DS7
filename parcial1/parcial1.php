<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 1</title>
</head>

<body>
    <form action="parcial1.php" method="post">
        <label>Ingrese un valor par</label>
        <br>
        <br>
        <input type="number" name="valorN">
        <input type="submit" name="enviar">
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        $valorN = $_POST["valorN"];
        validarPar($valorN);
    }

    function validarPar($valorN)
    {
        if (($valorN % 2) == 0) {
            generarMatriz($valorN);
        } else {
            echo "Debe ingresar un valor Par <br>";
        }
    }

    function generarMatriz($valorN)
    {
        $sum = 0;
        $mult = 1;
        echo "<table border=1>";
        for ($i = 0; $i < $valorN; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $valorN; $j++) {
                if (validatePosition($i,$j,$valorN)!= 0) {
                    $numeroRandom = validatePosition($i,$j,$valorN);
                    $sum += $numeroRandom;
                    $mult = $mult * $numeroRandom;
                    print_r("<td>$numeroRandom</td>");
                } else {
                    echo "<td>0</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br> La suma de los valores es: $sum";
        echo "<br> La multiplicacion de los valores es: $mult";
    }

    function generaNumeroRandom()
    {
        return rand(1, 100);
    }

    function validatePosition($valorI, $valorJ,$n)
    {
        if ($valorI % ($n-1) == 0 && $valorJ % ($n-1) == 0)
            return generaNumeroRandom();
            else
            return 0;
    }
    ?>

</body>

</html>