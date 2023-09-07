<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.1</title>
</head>

<body>
    <form action="lab41.php" method="post">
        <label>Ingrese un porcentaje de ventas</label>
        <br>
        <input type="number" name="valorVentas" required>
        <br>
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        $valorVentas = $_POST['valorVentas'];

        if ($valorVentas > 80) {
            echo '<img src="./img/imagen1.png">';
        } elseif ($valorVentas >= 50 && $valorVentas <= 79) {
            echo '<img src="./img/imagen2.png">';
        } else {
            echo '<img src="./img/imagen3.png">';
        }
    }
    ?>
</body>

</html>
