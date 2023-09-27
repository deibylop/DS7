<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.2</title>
</head>

<body>
    <form action="lab82.php" method="post">
        <label>Ingrese un valor n:</label>
        <input type="text" name="valorN" Value="">
        <br>
        <br>
        <input type="submit" name="enviar">
    </form>
    <?php

    if (isset($_POST['valorN'])) {
        if ($_POST['valorN'] !== "0") {
            include("./class_lib.php");
            $valorN = $_POST["valorN"];
            $factorial = new Factorial($valorN);
            $res = $factorial->calcularFactorial();
            print_r($res);
        } else
            echo "El valor de N no puede ser cero, ingrese otro valor";
    }

   
    ?>
</body>

</html>