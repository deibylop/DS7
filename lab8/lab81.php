<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.1</title>
</head>

<body>
    <form action="lab81.php" method="post">
        <label>Ingrese un porcentaje de ventas</label>
        <br>
        <input type="number" name="valorVentas" required>
        <br>
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <?php
    include("./class_lib.php");
    if (isset($_POST['enviar'])) {
        $valorVentas = $_POST['valorVentas'];
        $ventas = new Ventas($valorVentas);
        print_r($ventas->imageToShow());
    }
    ?>
</body>

</html>
