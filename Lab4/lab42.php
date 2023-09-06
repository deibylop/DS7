<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.2</title>
</head>

<body>
    <form action="lab42.php" method="post">
        <label>Ingrese un valor n:</label>
        <input type="text" name="valorN" Value="">
        <br>
        <br>
        <input type="submit" name="enviar">
    </form>
    <?php

    if (isset($_POST['valorN'])) {
        if ($_POST['valorN'] !== "0") {
            $valorN = $_POST['valorN'];
            $resultadoFactorial = calcularFactorial($valorN);
            echo "El factorial de $valorN es = $resultadoFactorial";
        } else
            echo "El valor de N no puede ser cero, ingrese otro valor";
    }

    function calcularFactorial($valorN)
    {
        $resultado = 1;
        for ($i = $valorN; $i >= 1; $i--) {
            $resultado = $resultado * $i;
        }
        return $resultado;
    }
    ?>
</body>

</html>